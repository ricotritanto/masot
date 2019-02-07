<!-- top-brands -->
    <div class="top-brands">
        <div class="container">
        <h2>Top selling offers</h2>
            <div class="grid_3 grid_5">
                <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#expeditions" id="expeditions-tab" role="tab" data-toggle="tab" aria-controls="expeditions" aria-expanded="true">CCTV offers</a></li>
                        <li role="presentation"><a href="#tours" role="tab" id="tours-tab" data-toggle="tab" aria-controls="tours">ACCESORIES Offers</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="expeditions" aria-labelledby="expeditions-tab">
                            <div class="agile-tp">
                                <h5>CCTV</h5>
                                <p class="w3l-ad">We've pulled together all our advertised offers into one place, so you won't miss out on a great deal.</p>
                            </div>
                                            
                            <div class="agile_top_brands_grids">
                             <?php foreach($products->result_array() as $row)
                            {?>         
                                <div class="col-md-4 top_brand_left">
                                    <div class="hover14 column">
                                        <div class="agile_top_brand_left_grid">
                                            <div class="agile_top_brand_left_grid_pos">
                                                <img src="<?php echo base_url();?>assets/front/market/images/offer.png" alt=" " class="img-responsive" />
                                            </div>
                                            <div class="agile_top_brand_left_grid1">
                                                <figure>
                                                    <div class="snipcart-item block" >
                                                        <div class="snipcart-thumb">
                                                            <a href="products.html"><img title=" " alt=" " src="<?php echo base_url('images/products/'. $row['picture']);?>" /></a>        
                                                            <p><?php echo $row['product_name'] ?></p>
                                                            <div class="stars">
                                                                <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                                            </div>
                                                        </div>                                                       
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>   <?php }?>                                                  
                                <div class="clearfix"> </div>
                            </div> 

                            <div class="agile_top_brands_grids">
                             <?php foreach($products2->result_array() as $row)
                            {?>
                                <div class="col-md-4 top_brand_left">
                                    <div class="hover14 column">
                                        <div class="agile_top_brand_left_grid">
                                            <div class="agile_top_brand_left_grid_pos">
                                                <img src="<?php echo base_url();?>assets/front/market/images/offer.png" alt=" " class="img-responsive" />
                                            </div>
                                            <div class="agile_top_brand_left_grid1">
                                                <figure>
                                                    <div class="snipcart-item block" >
                                                        <div class="snipcart-thumb">
                                                            <a href="products.html"><img title=" " alt=" " src="<?php echo base_url('images/products/'. $row['picture']);?>" /></a>        
                                                            <p><?php echo $row['product_name'] ?></p>
                                                            <div class="stars">
                                                                <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                                            </div>
                                                        </div>                                                       
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>   <?php }?>                                                  
                                <div class="clearfix"> </div>
                            </div> 
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tours" aria-labelledby="tours-tab">
                            <div class="agile-tp">
                                <h5>This week</h5>
                                <p class="w3l-ad">We've pulled together all our advertised offers into one place, so you won't miss out on a great deal.</p>
                            </div>
                            <div class="agile_top_brands_grids">
                            <?php foreach($accesories->result_array() as $row)
                            {?>
                                <div class="col-md-4 top_brand_left">
                                    <div class="hover14 column">
                                        <div class="agile_top_brand_left_grid">
                                            <div class="agile_top_brand_left_grid_pos">
                                                <img src="<?php echo base_url();?>assets/front/market/images/offer.png" alt=" " class="img-responsive" />
                                            </div>
                                            <div class="agile_top_brand_left_grid1">
                                                <figure>
                                                    <div class="snipcart-item block" >
                                                        <div class="snipcart-thumb">
                                                            <a href="products.html"><img title=" " alt=" " src="<?php echo base_url('images/products/'. $row['picture']);?>" /></a>        
                                                            <p><?php echo $row['product_name'] ?></p>
                                                            <div class="stars">
                                                                <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                                            </div>                                                            
                                                        </div>                                                        
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div><?php }?>                    
                                <div class="clearfix"> </div>
                            </div>
                            <div class="agile_top_brands_grids">
                            <?php foreach($accesories2->result_array() as $row)
                            {?>
                                <div class="col-md-4 top_brand_left">
                                    <div class="hover14 column">
                                        <div class="agile_top_brand_left_grid">
                                            <div class="agile_top_brand_left_grid_pos">
                                                <img src="<?php echo base_url();?>assets/front/market/images/offer.png" alt=" " class="img-responsive" />
                                            </div>
                                            <div class="agile_top_brand_left_grid1">
                                                <figure>
                                                    <div class="snipcart-item block" >
                                                        <div class="snipcart-thumb">
                                                            <a href="products.html"><img title=" " alt=" " src="<?php echo base_url('images/products/'. $row['picture']);?>" /></a>        
                                                            <p><?php echo $row['product_name'] ?></p>
                                                            <div class="stars">
                                                                <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                                            </div>                                                            
                                                        </div>                                                        
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div><?php }?>                    
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- //top-brands -->
 <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
         <a href="beverages.html"> <img class="first-slide" src="images/b1.jpg" alt="First slide"></a>
       
        </div>
        <div class="item">
         <a href="personalcare.html"> <img class="second-slide " src="images/b3.jpg" alt="Second slide"></a>
         
        </div>
        <div class="item">
          <a href="household.html"><img class="third-slide " src="images/b1.jpg" alt="Third slide"></a>
          
        </div>
      </div>
    
    </div><!-- /.carousel -->   
<!--banner-bottom-->
                <div class="ban-bottom-w3l">
                    <div class="container">
                    <div class="col-md-6 ban-bottom3">
                            <div class="ban-top">
                                <img src="images/p2.jpg" class="img-responsive" alt=""/>
                                
                            </div>
                            <div class="ban-img">
                                <div class=" ban-bottom1">
                                    <div class="ban-top">
                                        <img src="images/p3.jpg" class="img-responsive" alt=""/>
                                        
                                    </div>
                                </div>
                                <div class="ban-bottom2">
                                    <div class="ban-top">
                                        <img src="images/p4.jpg" class="img-responsive" alt=""/>
                                        
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-md-6 ban-bottom">
                            <div class="ban-top">
                                <img src="images/111.jpg" class="img-responsive" alt=""/>
                                
                                
                            </div>
                        </div>
                        
                        <div class="clearfix"></div>
                    </div>
                </div>
<!--banner-bottom-->
<!--brands-->
    <div class="brands">
        <div class="container">
        <h3>Clients</h3>
            <div class="brands-agile">
                <div class="col-md-2 w3layouts-brand">
                    <div class="brands-w3l">
                        <p><a href="#">BUS DOUBLE DECK CIMB</a></p>
                    </div>
                </div>
                <div class="col-md-2 w3layouts-brand">
                    <div class="brands-w3l">
                        <p><a href="#">BUS DOUBLE DECK DULUX3</a></p>
                    </div>
                </div>
                <div class="col-md-2 w3layouts-brand">
                    <div class="brands-w3l">
                        <p><a href="#">MAXI TRANSJAKARTA</a></p>
                    </div>
                </div>            
                <div class="clearfix"></div>
            </div>
        </div>
    </div>  
<!--//brands-->
<!-- new -->
    <div class="newproducts-w3agile">
        <div class="container">
            <h3>SUPPORTS</h3>
                <div class="agile_top_brands_grids">
                    <div class="col-md-3 top_brand_left-1">
                        <div class="hover14 column">
                            <div class="agile_top_brand_left_grid">
                                <div class="agile_top_brand_left_grid_pos">
                                </div>
                                <div class="agile_top_brand_left_grid1">
                                    <figure>
                                        <div class="snipcart-item block">
                                            <div class="snipcart-thumb">
                                                <a href="#"><img title=" " alt=" " src="<?php echo base_url();?>images/supports/AMP.jpg"></a>     
                                                <p>AMP</p>
                                            </div>                                            
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 top_brand_left-1">
                        <div class="hover14 column">
                            <div class="agile_top_brand_left_grid">
                                <div class="agile_top_brand_left_grid_pos">
                                </div>
                                <div class="agile_top_brand_left_grid1">
                                    <figure>
                                        <div class="snipcart-item block">
                                            <div class="snipcart-thumb">
                                                <a href="#"><img src="<?php echo base_url();?>images/supports/INFINITY.png"></a> 
                                                <p>INFINITY</p>                                                
                                            </div>                                            
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 top_brand_left-1">
                        <div class="hover14 column">
                            <div class="agile_top_brand_left_grid">                                
                                <div class="agile_top_brand_left_grid1">
                                    <figure>
                                        <div class="snipcart-item block">
                                            <div class="snipcart-thumb">
                                                <a href="#"><img src="<?php echo base_url();?>images/supports/DAHUA.png" alt=" " class="img-responsive"></a>
                                                <p>DAHUA</p>                                                
                                            </div>                                            
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 top_brand_left-1">
                        <div class="hover14 column">
                            <div class="agile_top_brand_left_grid">
                                <div class="agile_top_brand_left_grid_pos">
                                </div>
                                <div class="agile_top_brand_left_grid1">
                                    <figure>
                                        <div class="snipcart-item block">
                                            <div class="snipcart-thumb">
                                                <a href="#"><img title=" " alt=" " src="<?php echo base_url();?>images/supports/HIKVISION.jpg"></a>     
                                                <p>HIKVISON</p>                                                
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="clearfix"> </div>
                </div>
        </div>
    </div>
<!-- //new -->