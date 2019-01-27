<?php
define( 'corlate_CSS', get_template_directory_uri().'/css/' );
define( 'corlate_JS', get_template_directory_uri().'/js/' );
define( 'corlate_DIR', get_template_directory() );

define( 'CORLATE_DIR', get_template_directory() );
define( 'CORLATE_URI', trailingslashit(get_template_directory_uri()) );


/* -------------------------------------------
*           	Include TGM Plugins
* -------------------------------------------- */
require_once( CORLATE_DIR . '/lib/class-tgm-plugin-activation.php');


/*-------------------------------------------*
 *				Register Navigation
 *------------------------------------------*/
register_nav_menus( array(
	'primary' => esc_html__( 'Primary Menu', 'corlate' ),
	'footernav' => esc_html__( 'Footer Menu', 'corlate' ),
) );


/*-------------------------------------------*
 *				navwalker
 *------------------------------------------*/
require_once( corlate_DIR . '/lib/menu/admin-megamenu-walker.php');
require_once( corlate_DIR . '/lib/menu/meagmenu-walker.php');
require_once( corlate_DIR . '/lib/menu/mobile-navwalker.php');
add_filter( 'wp_edit_nav_menu_walker', function( $class, $menu_id ){
	return 'Themeum_Megamenu_Walker';
}, 10, 2 );


/*-------------------------------------------*
 *				Startup Register
 *------------------------------------------*/
require_once( corlate_DIR . '/lib/main-function/themeum-register.php');


/*-------------------------------------------------------
 *				Themeum Core
 *-------------------------------------------------------*/
require_once( corlate_DIR . '/lib/main-function/themeum-core.php');


/*-----------------------------------------------------
 * 				Custom Excerpt Length
 *----------------------------------------------------*/
if(!function_exists('corlate_excerpt_max_charlength')):
	function corlate_excerpt_max_charlength($charlength) {
		$excerpt = get_the_excerpt();
		$charlength++;

		if ( mb_strlen( $excerpt ) > $charlength ) {
			$subex = mb_substr( $excerpt, 0, $charlength - 5 );
			$exwords = explode( ' ', $subex );
			$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
			if ( $excut < 0 ) {
				return mb_substr( $subex, 0, $excut );
			} else {
				return $subex;
			}
		} else {
			return $excerpt;
		}
	}
endif;


/*-------------------------------------------
 *          	Custom Excerpt Length
 *-------------------------------------------*/
if(!function_exists('crowdfunding_excerpt_max_charlength')):
    function crowdfunding_excerpt_max_charlength($str,$charlength) {
        $excerpt = $str;
        $charlength++;
        if ( mb_strlen( $excerpt ) > $charlength ) {
            $subex = mb_substr( $excerpt, 0, $charlength - 5 );
            $exwords = explode( ' ', $subex );
            $excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
            if ( $excut < 0 ) {
                return mb_substr( $subex, 0, $excut );
            } else {
                return $subex;
            }
        } else {
            return $excerpt;
        }
    }
endif;



/* -------------------------------------------
 * 				Custom body class
 * ------------------------------------------- */
add_filter( 'body_class', 'corlate_body_class' );
function corlate_body_class( $classes ) {
    $layout = get_theme_mod( 'boxfull_en', 'fullwidth' );
    $classes[] = $layout.'-bg';
	return $classes;
}

/* -------------------------------------------
 * 				Logout Redirect Home
 * ------------------------------------------- */
add_action( 'wp_logout', 'corlate_auto_redirect_external_after_logout');
function corlate_auto_redirect_external_after_logout(){
  wp_redirect( home_url('/') );
  exit();
}


/* -------------------------------------------
* 				Remove API
* ------------------------------------------- */
function corlate_remove_api() {
	remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
	remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );
}
add_action( 'after_setup_theme', 'corlate_remove_api' );


/* -------------------------------------------
 * 				SVG image upload
 * ------------------------------------------- */
function corlate_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  $mimes['svgz'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'corlate_mime_types');


/* -------------------------------------------
 *        Theme Updater
 * ------------------------------------------- */

if ( ! class_exists('Themeum_Regular_Theme_Updater')) {
  class Themeum_Regular_Theme_Updater {
    private $api_end_point;
    private $theme_name;
    private $theme_version;

    public static function init() {
      return new self();
    }

    public function __construct() {
      $theme               = wp_get_theme();
      $this->theme_name    = strtolower( $theme->get( 'TextDomain' ) );
      $this->theme_version = $theme->get( "Version" );
      $this->api_end_point = 'https://www.themeum.com/wp-json/themeum-free-product/v2/';

      add_filter( 'pre_set_site_transient_update_themes', array( $this, 'check_for_update' ) );
    }

    /**
     * @return array|bool|mixed|object
     *
     * Get update information
     */
    public function check_for_update_api() {
      // Make the POST request
      $request = wp_remote_post( $this->api_end_point.'check-update',
        array(
          'timeout' => 45,
          'body' => array(
            'product_type' => 'theme',
            'name' => $this->theme_name
          ),
        )
      );

      $request_body = false;
      // Check if response is valid
      if ( ! is_wp_error( $request ) || wp_remote_retrieve_response_code( $request ) === 200 ) {
        $request_body = json_decode( $request['body'] );
      }
      return $request_body;
    }

    /**
     * @param $transient
     *
     * @return mixed
     */
    public function check_for_update( $transient ) {
      if ( empty( $transient->checked[ $this->theme_name ] ) ) {
        return $transient;
      }
      $request = $this->check_for_update_api();

      if ( $request->success ) {
        $request_data = $request->data;
        if ( version_compare( $this->theme_version, $request_data->version, '<' ) ) {
          $transient->response[ $this->theme_name ] = array(
            'new_version' => $request_data->version,
            'package'     => $request_data->download_url,
            'url'     => 'https://themeum.com',
          );
        }
      }

      return $transient;
    }
  }

  Themeum_Regular_Theme_Updater::init();
}