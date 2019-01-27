<?php
  $topbarsocial = get_theme_mod( 'topbar_social', true );
?>
<div class="header-top">
  <div class="container">
    <div class="row">
      <div class="col-6 col-md-6 d-sm-flex align-items-center">
        <div class="header-top-contact">
          <?php if ( get_theme_mod( 'header_phone', true )) { ?>
              <span><i class="fa fa-phone-square"></i> <?php echo wp_kses_post(balanceTags( get_theme_mod( 'header_phone', '+123 456 789') )); ?></span>
          <?php }?>
        </div>
      </div>
      <div class="col-6 col-md-6">
        <div class="header-top-right text-right">
          <?php
              if ( $topbarsocial ) {
                  get_template_part('lib/social-link');
              }
          ?>

        </div>
      </div>
    </div>
  </div>
</div>
