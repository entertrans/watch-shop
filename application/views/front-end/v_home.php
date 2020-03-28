  

<!-- Start slider -->
<section id="aa-slider">
  <div class="aa-slider-area">
    <div id="sequence" class="seq">
      <div class="seq-screen">
        <ul class="seq-canvas">

          <?php 
          $slider1 = $this->db->select('*')->from('tbl_produk a')->join('tbl_kategori b','a.id_kategori = b.id_kategori','inner')->where(['a.slider' => 1])->get()->result_array();
          foreach ($slider1 as $slider) {
            ?>
            <!-- single slide item -->
            <li>
              <div class="seq-model" style="background-image: url(<?= base_url().'assets/daily-shop-theme/img/man/'.$slider['img']; ?>);background-position: center;">

                <img style="visibility: hidden;" data-seq src="<?= base_url('assets/daily-shop-theme/img/slider/1.jpg') ?>" alt="Men slide img" />

              </div>
              <div class="seq-title">
<<<<<<< HEAD
                <span data-seq>Save Up to 75% Off</span>
                <h2 data-seq>Men Collection</h2>
                <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
              </div>
            </li>
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="<?= base_url('assets/daily-shop-theme/img/slider/2.jpg') ?>" alt="Wristwatch slide img" />
              </div>
              <div class="seq-title">
                <span data-seq>Save Up to 40% Off</span>
                <h2 data-seq>Wristwatch Collection</h2>
                <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
              </div>
            </li>
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="<?= base_url('assets/daily-shop-theme/img/slider/3.jpg') ?>" alt="Women Jeans slide img" />
              </div>
              <div class="seq-title">
                <span data-seq>Save Up to 75% Off</span>
                <h2 data-seq>Jeans Collection</h2>
                <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
              </div>
            </li>
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="<?= base_url('assets/daily-shop-theme/img/slider/4.jpg') ?>" alt="Shoes slide img" />
              </div>
              <div class="seq-title">
                <span data-seq>Save Up to 75% Off</span>
                <h2 data-seq>Exclusive Shoes</h2>
                <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
              </div>
            </li>
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="<?= base_url('assets/daily-shop-theme/img/slider/5.jpg') ?>" alt="Male Female slide img" />
              </div>
              <div class="seq-title">
                <span data-seq>Save Up to 50% Off</span>
                <h2 data-seq>Best Collection</h2>
                <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
              </div>
            </li>
          </ul>
        </div>
        <!-- slider navigation btn -->
        <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
          <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
          <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
        </fieldset>
      </div>
    </div>
  </section>
  <!-- / slider -->
  <!-- Start Promo section -->
  <section id="aa-promo">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-promo-area">
            <div class="row">
              <!-- promo left -->
              <div class="col-md-5 no-padding">
                <div class="aa-promo-left">
                  <div class="aa-promo-banner">
                    <img src="<?= base_url('assets/daily-shop-theme/img/promo-banner-1.jpg') ?>" alt="img">
                    <div class="aa-prom-content">
                      <span>75% Off</span>
                      <h4><a href="#">For Women</a></h4>
                    </div>
                  </div>
                </div>
              </div>
              <!-- promo right -->
              <div class="col-md-7 no-padding">
                <div class="aa-promo-right">
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">
                      <img src="<?= base_url('assets/daily-shop-theme/img/promo-banner-3.jpg') ?>" alt="img">
                      <div class="aa-prom-content">
                        <span>Exclusive Item</span>
                        <h4><a href="#">For Men</a></h4>
                      </div>
                    </div>
                  </div>
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">
                      <img src="<?= base_url('assets/daily-shop-theme/img/promo-banner-2.jpg') ?>" alt="img">
                      <div class="aa-prom-content">
                        <span>Sale Off</span>
                        <h4><a href="#">On Shoes</a></h4>
                      </div>
                    </div>
                  </div>
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">
                      <img src="<?= base_url('assets/daily-shop-theme/img/promo-banner-4.jpg') ?>" alt="img">
                      <div class="aa-prom-content">
                        <span>New Arrivals</span>
                        <h4><a href="#">For Kids</a></h4>
                      </div>
                    </div>
                  </div>
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">
                      <img src="<?= base_url('assets/daily-shop-theme/img/promo-banner-5.jpg') ?>" alt="img">
                      <div class="aa-prom-content">
                        <span>25% Off</span>
                        <h4><a href="#">For Bags</a></h4>
                      </div>
=======
               <span data-seq>Save Up to 75% Off</span>                
               <h2 data-seq> <?= 'koleksi '.$slider['nm_kategori']  ?> </h2>                
               <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
               <a data-seq href="#<?= $slider['id_kategori'] ?>" class="aa-shop-now-btn aa-secondary-btn" data-toggle="tab" onclick="scrolto()" >SHOP NOW</a>
               <!-- <a class="aa-shop-now-btn aa-secondary-btn" href="#<?= $slider['id_kategori'] ?>" data-toggle="tab"><?=  $ktg['nm_kategori'] ?>SHOP NOW</a> -->
             </div>
           </li>
         <?php  } ?>
       </ul>
     </div>
     <!-- slider navigation btn -->
     <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
      <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
      <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
    </fieldset>
  </div>
</div>
</section>
<!-- / slider -->
<!-- Start Promo section -->
<section id="aa-promo">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="aa-promo-area">
          <div class="row">
            <!-- promo left -->
            <div class="col-md-5 no-padding">                
              <div class="aa-promo-left">
                <div class="aa-promo-banner">                    
                  <img src="<?= base_url('assets/daily-shop-theme/img/promo-banner-1.jpg') ?>" alt="img">                    
                  <div class="aa-prom-content">
                    <span>75% Off</span>
                    <h4><a href="#">For Women</a></h4>                      
                  </div>
                </div>
              </div>
            </div>
            <!-- promo right -->
            <div class="col-md-7 no-padding">
              <div class="aa-promo-right">
                <div class="aa-single-promo-right">
                  <div class="aa-promo-banner">                      
                    <img src="<?= base_url('assets/daily-shop-theme/img/promo-banner-3.jpg') ?>" alt="img">                      
                    <div class="aa-prom-content">
                      <span>Exclusive Item</span>
                      <h4><a href="#">For Men</a></h4>                        
                    </div>
                  </div>
                </div>
                <div class="aa-single-promo-right">
                  <div class="aa-promo-banner">                      
                    <img src="<?= base_url('assets/daily-shop-theme/img/promo-banner-2.jpg') ?>" alt="img">                      
                    <div class="aa-prom-content">
                      <span>Sale Off</span>
                      <h4><a href="#">On Shoes</a></h4>                        
                    </div>
                  </div>
                </div>
                <div class="aa-single-promo-right">
                  <div class="aa-promo-banner">                      
                    <img src="<?= base_url('assets/daily-shop-theme/img/promo-banner-4.jpg') ?>" alt="img">                      
                    <div class="aa-prom-content">
                      <span>New Arrivals</span>
                      <h4><a href="#">For Kids</a></h4>                        
                    </div>
                  </div>
                </div>
                <div class="aa-single-promo-right">
                  <div class="aa-promo-banner">                      
                    <img src="<?= base_url('assets/daily-shop-theme/img/promo-banner-5.jpg') ?>" alt="img">                      
                    <div class="aa-prom-content">
                      <span>25% Off</span>
                      <h4><a href="#">For Bags</a></h4>                        
>>>>>>> 5db3730afb76c6bd402e6f227f598ae34ff334d8
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<<<<<<< HEAD
  </section>
  <!-- / Promo section -->
  <!-- Products section -->
  <section id="aa-product">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-product-area">
              <div class="aa-product-inner">
                <!-- start prduct navigation -->
                <ul class="nav nav-tabs aa-products-tab">
                  <li class="active"><a href="#men" data-toggle="tab">Men</a></li>
                  <li><a href="#women" data-toggle="tab">Women</a></li>
                  <li><a href="#sports" data-toggle="tab">Sports</a></li>
                  <li><a href="#electronics" data-toggle="tab">Electronics</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                  <!-- Start men product category -->
                  <div class="tab-pane fade in active" id="men">
                    <ul class="aa-product-catg">
                      <!-- start single product item -->
                      <li>
                        <figure>
                          <a class="aa-product-img" href="#"><img src="<?= base_url('assets/daily-shop-theme/img/man/polo-shirt-2.png') ?>" alt="polo shirt img"></a>
                          <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                          <figcaption>
                            <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                            <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                          </figcaption>
                        </figure>
                        <div class="aa-product-hvr-content">

                          <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                        </div>
                        <!-- product badge -->
                        <span class="aa-badge aa-sale" href="#">SALE!</span>
                      </li>
                      <!-- start single product item -->
                      <li>
                        <figure>
                          <a class="aa-product-img" href="#"><img src="<?= base_url('assets/daily-shop-theme/img/man/t-shirt-1.png') ?>" alt="polo shirt img"></a>
                          <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                          <figcaption>
                            <h4 class="aa-product-title"><a href="#">T-Shirt</a></h4>
                            <span class="aa-product-price">$45.50</span>
                          </figcaption>
                        </figure>
                        <div class="aa-product-hvr-content">

                          <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                        </div>
                        <!-- product badge -->
                        <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                      </li>
                      <!-- start single product item -->
                      <li>
                        <figure>
                          <a class="aa-product-img" href="#"><img src="<?= base_url('assets/daily-shop-theme/img/man/polo-shirt-1.png') ?>" alt="polo shirt img"></a>
                          <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                          <figcaption>
                            <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                            <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                          </figcaption>
                        </figure>
                        <div class="aa-product-hvr-content">

                          <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                        </div>
                      </li>
                      <!-- start single product item -->
                      <li>
                        <figure>
                          <a class="aa-product-img" href="#"><img src="<?= base_url('assets/daily-shop-theme/img/man/polo-shirt-4.png') ?>" alt="polo shirt img"></a>
                          <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                          <figcaption>
                            <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                            <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                          </figcaption>
                        </figure>
                        <div class="aa-product-hvr-content">

                          <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                        </div>
                        <!-- product badge -->
                        <span class="aa-badge aa-hot" href="#">HOT!</span>
                      </li>
                      <!-- start single product item -->
                      <li>
                        <figure>
                          <a class="aa-product-img" href="#"><img src="<?= base_url('assets/daily-shop-theme/img/man/polo-shirt-5.png') ?>" alt="polo shirt img"></a>
                          <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                          <figcaption>
                            <h4 class="aa-product-title"><a href="#">T-Shirt</a></h4>
                            <span class="aa-product-price">$45.50</span>
                          </figcaption>
                        </figure>
                        <div class="aa-product-hvr-content">

                          <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                        </div>
                      </li>
                      <!-- start single product item -->
                      <li>
                        <figure>
                          <a class="aa-product-img" href="#"><img src="<?= base_url('assets/daily-shop-theme/img/man/polo-shirt-6.png') ?>" alt="polo shirt img"></a>
                          <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                          <figcaption>
                            <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                            <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                          </figcaption>
                        </figure>
                        <div class="aa-product-hvr-content">

                          <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                        </div>
                      </li>
                      <!-- start single product item -->
                      <li>
                        <figure>
                          <a class="aa-product-img" href="#"><img src="<?= base_url('assets/daily-shop-theme/img/man/polo-shirt-2.png') ?>" alt="polo shirt img"></a>
                          <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                          <figcaption>
                            <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                            <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                          </figcaption>
                        </figure>
                        <div class="aa-product-hvr-content">

                          <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                        </div>
                        <!-- product badge -->
                        <span class="aa-badge aa-sale" href="#">SALE!</span>
                      </li>
                      <!-- start single product item -->
                      <li>
                        <figure>
                          <a class="aa-product-img" href="#"><img src="<?= base_url('assets/daily-shop-theme/img/man/t-shirt-1.png') ?>" alt="polo shirt img"></a>
                          <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                          <figcaption>
                            <h4 class="aa-product-title"><a href="#">T-Shirt</a></h4>
                            <span class="aa-product-price">$45.50</span>
                          </figcaption>
                        </figure>
                        <div class="aa-product-hvr-content">

                          <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                        </div>
                        <!-- product badge -->
                        <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                      </li>
                    </ul>
                    <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                  </div>
                  <!-- / men product category -->

                  <!-- start women product category -->
                  <div class="tab-pane fade" id="women">
                    <ul class="aa-product-catg">
                      <!-- start single product item -->
                      <li>
                        <figure>
                          <a class="aa-product-img" href="#"><img src="<?= base_url('assets/daily-shop-theme/img/women/girl-1.png') ?>" alt="polo shirt img"></a>
                          <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                          <figcaption>
                            <h4 class="aa-product-title"><a href="#">This is Title</a></h4>
                            <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                          </figcaption>
                        </figure>
                        <div class="aa-product-hvr-content">

                          <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                        </div>
                        <!-- product badge -->
                        <span class="aa-badge aa-sale" href="#">SALE!</span>
                      </li>
                      <!-- start single product item -->
                      <li>
                        <figure>
                          <a class="aa-product-img" href="#"><img src="<?= base_url('assets/daily-shop-theme/img/women/girl-2.png') ?>" alt="polo shirt img"></a>
                          <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                          <figcaption>
                            <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                            <span class="aa-product-price">$45.50</span>
                          </figcaption>
                        </figure>
                        <div class="aa-product-hvr-content">

                          <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                        </div>
                        <!-- product badge -->
                        <span class="aa-badge aa-hot" href="#">HOT!</span>
                      </li>
                      <!-- start single product item -->
                      <li>
                        <figure>
                          <a class="aa-product-img" href="#"><img src="<?= base_url('assets/daily-shop-theme/img/women/girl-3.png') ?>" alt="polo shirt img"></a>
                          <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                          <figcaption>
                            <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                            <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                          </figcaption>
                        </figure>
                        <div class="aa-product-hvr-content">

                          <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                        </div>
                      </li>
                      <!-- start single product item -->
                      <li>
                        <figure>
                          <a class="aa-product-img" href="#"><img src="<?= base_url('assets/daily-shop-theme/img/women/girl-4.png') ?>" alt="polo shirt img"></a>
                          <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                          <figcaption>
                            <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                            <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                          </figcaption>
                        </figure>
                        <div class="aa-product-hvr-content">

                          <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                        </div>
                        <!-- product badge -->
                        <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                      </li>
                      <!-- start single product item -->
                      <li>
                        <figure>
                          <a class="aa-product-img" href="#"><img src="<?= base_url('assets/daily-shop-theme/img/women/girl-5.png') ?>" alt="polo shirt img"></a>
                          <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                          <figcaption>
                            <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                            <span class="aa-product-price">$45.50</span>
                          </figcaption>
                        </figure>

                        <div class="aa-product-hvr-content">

                          <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                        </div>
                      </li>
                      <!-- start single product item -->
                      <li>
                        <figure>
                          <a class="aa-product-img" href="#"><img src="<?= base_url('assets/daily-shop-theme/img/women/girl-6.png') ?>" alt="polo shirt img"></a>
                          <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                          <figcaption>
                            <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                            <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                          </figcaption>
                        </figure>
                        <div class="aa-product-hvr-content">

                          <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                        </div>
                      </li>
                      <!-- start single product item -->
                      <li>
                        <figure>
                          <a class="aa-product-img" href="#"><img src="<?= base_url('assets/daily-shop-theme/img/women/girl-7.png') ?>" alt="polo shirt img"></a>
                          <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                          <figcaption>
                            <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                            <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                          </figcaption>
                        </figure>
                        <div class="aa-product-hvr-content">

                          <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                        </div>
                        <!-- product badge -->
                        <span class="aa-badge aa-sale" href="#">SALE!</span>
                      </li>
                      <!-- start single product item -->
                      <li>
                        <figure>
                          <a class="aa-product-img" href="#"><img src="<?= base_url('assets/daily-shop-theme/img/women/girl-1.png') ?>" alt="polo shirt img"></a>
                          <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                          <figcaption>
                            <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                            <span class="aa-product-price">$45.50</span>
                          </figcaption>
                        </figure>
                        <div class="aa-product-hvr-content">

                          <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                        </div>
                        <!-- product badge -->
                        <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                      </li>
                    </ul>
                    <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                  </div>
                  <!-- / women product category -->

                  <!-- start sports product category -->
                  <div class="tab-pane fade" id="sports">
                    <ul class="aa-product-catg">
                      <!-- start single product item -->
                      <li>
                        <figure>
                          <a class="aa-product-img" href="#"><img src="<?= base_url('assets/daily-shop-theme/img/sports/sport-1.png') ?>" alt="polo shirt img"></a>
                          <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                          <figcaption>
                            <h4 class="aa-product-title"><a href="#">This is Title</a></h4>
                            <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                          </figcaption>
                        </figure>
                        <div class="aa-product-hvr-content">

                          <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                        </div>
                        <!-- product badge -->
                        <span class="aa-badge aa-sale" href="#">SALE!</span>
                      </li>
                      <!-- start single product item -->
                      <li>
                        <figure>
                          <a class="aa-product-img" href="#"><img src="<?= base_url('assets/daily-shop-theme/img/sports/sport-2.png') ?>" alt="polo shirt img"></a>
                          <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                          <figcaption>
                            <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                            <span class="aa-product-price">$45.50</span>
                          </figcaption>
                        </figure>
                        <div class="aa-product-hvr-content">

                          <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                        </div>
                        <!-- product badge -->
                        <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                      </li>
                      <!-- start single product item -->
                      <li>
                        <figure>
                          <a class="aa-product-img" href="#"><img src="<?= base_url('assets/daily-shop-theme/img/sports/sport-3.png') ?>" alt="polo shirt img"></a>
                          <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                          <figcaption>
                            <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                            <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                          </figcaption>
                        </figure>
                        <div class="aa-product-hvr-content">

                          <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                        </div>
                      </li>
                      <!-- start single product item -->
                      <li>
                        <figure>
                          <a class="aa-product-img" href="#"><img src="<?= base_url('assets/daily-shop-theme/img/sports/sport-4.png') ?>" alt="polo shirt img"></a>
                          <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                          <figcaption>
                            <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                            <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                          </figcaption>
                        </figure>
                        <div class="aa-product-hvr-content">

                          <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                        </div>
                        <!-- product badge -->
                        <span class="aa-badge aa-hot" href="#">HOT!</span>
                      </li>
                      <!-- start single product item -->
                      <li>
                        <figure>
                          <a class="aa-product-img" href="#"><img src="<?= base_url('assets/daily-shop-theme/img/sports/sport-5.png') ?>" alt="polo shirt img"></a>
                          <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                          <figcaption>
                            <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                            <span class="aa-product-price">$45.50</span>
                          </figcaption>
                        </figure>
                        <div class="aa-product-hvr-content">

                          <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                        </div>
                      </li>
                      <!-- start single product item -->
                      <li>
                        <figure>
                          <a class="aa-product-img" href="#"><img src="<?= base_url('assets/daily-shop-theme/img/sports/sport-6.png') ?>" alt="polo shirt img"></a>
                          <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                          <figcaption>
                            <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                            <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                          </figcaption>
                        </figure>
                        <div class="aa-product-hvr-content">

                          <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                        </div>
                      </li>
                      <!-- start single product item -->
                      <li>
                        <figure>
                          <a class="aa-product-img" href="#"><img src="<?= base_url('assets/daily-shop-theme/img/sports/sport-7.png') ?>" alt="polo shirt img"></a>
                          <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                          <figcaption>
                            <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                            <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                          </figcaption>
                        </figure>
                        <div class="aa-product-hvr-content">

                          <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                        </div>
                        <!-- product badge -->
                        <span class="aa-badge aa-sale" href="#">SALE!</span>
                      </li>
                      <!-- start single product item -->
                      <li>
                        <figure>
                          <a class="aa-product-img" href="#"><img src="<?= base_url('assets/daily-shop-theme/img/sports/sport-8.png') ?>" alt="polo shirt img"></a>
                          <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                          <figcaption>
                            <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                            <span class="aa-product-price">$45.50</span>
                          </figcaption>
                        </figure>
                        <div class="aa-product-hvr-content">

                          <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                        </div>
                        <!-- product badge -->
                        <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                      </li>
                    </ul>
                  </div>
                  <!-- / sports product category -->
                  <!-- start electronic product category -->
                  <div class="tab-pane fade" id="electronics">
                    <ul class="aa-product-catg">
                      <!-- start single product item -->
                      <li>
                        <figure>
                          <a class="aa-product-img" href="#"><img src="<?= base_url('assets/daily-shop-theme/img/electronics/electronic-1.png') ?>" alt="polo shirt img"></a>
                          <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                          <figcaption>
                            <h4 class="aa-product-title"><a href="#">This is Title</a></h4>
                            <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                          </figcaption>
                        </figure>
                        <div class="aa-product-hvr-content">

                          <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                        </div>
                        <!-- product badge -->
                        <span class="aa-badge aa-sale" href="#">SALE!</span>
                      </li>
                      <!-- start single product item -->
                      <li>
                        <figure>
                          <a class="aa-product-img" href="#"><img src="<?= base_url('assets/daily-shop-theme/img/electronics/electronic-2.png') ?>" alt="polo shirt img"></a>
                          <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                          <figcaption>
                            <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                            <span class="aa-product-price">$45.50</span>
                          </figcaption>
                        </figure>
                        <div class="aa-product-hvr-content">

                          <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                        </div>
                        <!-- product badge -->
                        <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                      </li>
                      <!-- start single product item -->
                      <li>
                        <figure>
                          <a class="aa-product-img" href="#"><img src="<?= base_url('assets/daily-shop-theme/img/electronics/electronic-3.png') ?>" alt="polo shirt img"></a>
                          <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                          <figcaption>
                            <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                            <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                          </figcaption>
                        </figure>
                        <div class="aa-product-hvr-content">

                          <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                        </div>
                      </li>
                      <!-- start single product item -->
                      <li>
                        <figure>
                          <a class="aa-product-img" href="#"><img src="<?= base_url('assets/daily-shop-theme/img/electronics/electronic-4.png') ?>" alt="polo shirt img"></a>
                          <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                          <figcaption>
                            <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                            <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                          </figcaption>
                        </figure>
                        <div class="aa-product-hvr-content">

                          <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                        </div>
                        <!-- product badge -->
                        <span class="aa-badge aa-hot" href="#">HOT!</span>
                      </li>
                      <!-- start single product item -->
                      <li>
                        <figure>
                          <a class="aa-product-img" href="#"><img src="<?= base_url('assets/daily-shop-theme/img/electronics/electronic-5.png') ?>" alt="polo shirt img"></a>
                          <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                          <figcaption>
                            <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                            <span class="aa-product-price">$45.50</span>
                          </figcaption>
                        </figure>
                        <div class="aa-product-hvr-content">

                          <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                        </div>
                      </li>
                      <!-- start single product item -->
                      <li>
                        <figure>
                          <a class="aa-product-img" href="#"><img src="<?= base_url('assets/daily-shop-theme/img/electronics/electronic-6.png') ?>" alt="polo shirt img"></a>
                          <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                          <figcaption>
                            <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                            <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                          </figcaption>
                        </figure>
                        <div class="aa-product-hvr-content">

                          <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                        </div>
                      </li>
                      <!-- start single product item -->
                      <li>
                        <figure>
                          <a class="aa-product-img" href="#"><img src="<?= base_url('assets/daily-shop-theme/img/electronics/electronic-7.png') ?>" alt="polo shirt img"></a>
                          <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                          <figcaption>
                            <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                            <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                          </figcaption>
                        </figure>
                        <div class="aa-product-hvr-content">

                          <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
=======
  </div>
</section>
<!-- / Promo section -->
<!-- Products section -->
<section id="aa-product">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="aa-product-area">
            <div class="aa-product-inner">
              <!-- start prduct navigation -->
              <ul class="nav nav-tabs aa-products-tab">
                <?php $kategori= $this->db->get('tbl_kategori')->result_array();  
                foreach ($kategori as $ktg) {
                  $active = ($ktg['id_kategori']==1) ? 'active' : '' ;
                  ?>
                  <li class="<?= $active ?>">
                    <a href="#<?= $ktg['id_kategori'] ?>" data-toggle="tab"><?=  $ktg['nm_kategori'] ?></a></li>
                  <?php } ?>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">

                  <!-- Start men product category -->
                  <div class="tab-pane fade in active" id="1">
                    <ul class="aa-product-catg">
                      <?php $produk = $this->db->get_where('tbl_produk', ['id_kategori ' => '1'])->result_array(); 
                        // var_dump($produk_1);
                      foreach ($produk as $produk) {
                        ?>
                        <!-- assets/daily-shop-theme/img/man/polo-shirt-2.png -->
                        <!-- start single product item -->
                        <li>
                          <figure style="background-image: url(<?= base_url().'assets/daily-shop-theme/img/man/'.$produk['img']; ?>);background-position: center;background-size: cover;">
                           <img style="visibility: hidden;" src="<?= base_url('assets/daily-shop-theme/img/man/t-shirt-1.png') ?>" alt="polo shirt img" >
                           <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                           <figcaption>
                            <h4 class="aa-product-title"><a href="#" ata-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><?= $produk['nm_product']  ?></a></h4>
                            <span class="aa-product-price"><?= 'Rp. '.rupiah($produk['harga'])  ?></span>
                            <!-- jika ada discount gunakan ini -->
                            <span class="aa-product-price"><del>$65.50</del>
                            </span>
                              <!-- 
                              <div style="position: relative;
                              top: 313px;">
                              <h4 class="aa-product-title"><a href="#">This is Title</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                            </div> -->
                          </figcaption>
                        </figure>                        
                        <div class="aa-product-hvr-content">

                          <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                          
>>>>>>> 5db3730afb76c6bd402e6f227f598ae34ff334d8
                        </div>
                        <!-- product badge -->
                        <span class="aa-badge aa-sale" href="#">SALE!</span>
                      </li>
<<<<<<< HEAD
                      <!-- start single product item -->
                      <li>
                        <figure>
                          <a class="aa-product-img" href="#"><img src="<?= base_url('assets/daily-shop-theme/img/electronics/electronic-8.png') ?>" alt="polo shirt img"></a>
                          <a class="aa-add-card-btn" href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                          <figcaption>
                            <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                            <span class="aa-product-price">$45.50</span>
                          </figcaption>
                        </figure>
                        <div class="aa-product-hvr-content">

                          <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                        </div>
                        <!-- product badge -->
                        <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                      </li>
                    </ul>
                    <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                  </div>
                  <!-- / electronic product category -->
                </div>
                <!-- quick view modal -->
                <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <div class="row">
                          <!-- Modal view slider -->
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="aa-product-view-slider">
                              <div class="simpleLens-gallery-container" id="demo-1">
                                <div class="simpleLens-container">
                                  <div class="simpleLens-big-image-container">
                                    <a class="simpleLens-lens-image" data-lens-image="<?= base_url('assets/daily-shop-theme/img/view-slider/large/polo-shirt-1.png') ?>">
                                      <img src="<?= base_url('assets/daily-shop-theme/img/view-slider/medium/polo-shirt-1.png') ?>" class="simpleLens-big-image">
                                    </a>
                                  </div>
                                </div>
                                <div class="simpleLens-thumbnails-container">
                                  <a href="#" class="simpleLens-thumbnail-wrapper" data-lens-image="<?= base_url('assets/daily-shop-theme/img/view-slider/large/polo-shirt-1.png') ?>" data-big-image="<?= base_url('assets/daily-shop-theme/img/view-slider/medium/polo-shirt-1.png') ?>">
                                    <img src="<?= base_url('assets/daily-shop-theme/img/view-slider/thumbnail/polo-shirt-1.png') ?>">
                                  </a>
                                  <a href="#" class="simpleLens-thumbnail-wrapper" data-lens-image="<?= base_url('assets/daily-shop-theme/img/view-slider/large/polo-shirt-3.png') ?>" data-big-image="<?= base_url('assets/daily-shop-theme/img/view-slider/medium/polo-shirt-3.png') ?>">
                                    <img src="<?= base_url('assets/daily-shop-theme/img/view-slider/thumbnail/polo-shirt-3.png') ?>">
                                  </a>

                                  <a href="#" class="simpleLens-thumbnail-wrapper" data-lens-image="<?= base_url('assets/daily-shop-theme/img/view-slider/large/polo-shirt-4.png') ?>" data-big-image="<?= base_url('assets/daily-shop-theme/img/view-slider/medium/polo-shirt-4.png') ?>">
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Modal view content -->
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="aa-product-view-content">
                              <h3>T-Shirt</h3>
                              <div class="aa-price-block">
                                <span class="aa-product-view-price">$34.99</span>
                                <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                              </div>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!</p>
                              <h4>Size</h4>
                              <div class="aa-prod-view-size">
                                <a href="#">S</a>
                                <a href="#">M</a>
                                <a href="#">L</a>
                                <a href="#">XL</a>
                              </div>
                              <div class="aa-prod-quantity">
                                <form action="">
                                  <select name="" id="">
                                    <option value="0" selected="1">1</option>
                                    <option value="1">2</option>
                                    <option value="2">3</option>
                                    <option value="3">4</option>
                                    <option value="4">5</option>
                                    <option value="5">6</option>
                                  </select>
                                </form>
                                <p class="aa-prod-category">
                                  Category: <a href="#">Polo T-Shirt</a>
                                </p>
                              </div>
                              <div class="aa-prod-view-bottom">
                                <a href="#" class="aa-add-to-cart-btn"><span class="fa fa-shopping-cart"></span>Add To Cart</a>

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div><!-- / quick view modal -->
=======
                      <!-- END OF PRODUC -->    
                    <?php  } ?>
                  </ul>
                </div>
                <!-- / men product category -->

                <!-- start women product category -->
                <div class="tab-pane fade" id="2">
                  <ul class="aa-product-catg">
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="<?= base_url('assets/daily-shop-theme/img/women/girl-1.png') ?>" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                        <figcaption>
                          <h4 class="aa-product-title"><a href="#">This is Title</a></h4>
                          <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                        </figcaption>
                      </figure>                         
                      <div class="aa-product-hvr-content">

                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                            
                      </div>
                      <!-- product badge -->
                      <span class="aa-badge aa-sale" href="#">SALE!</span>
                    </li>

                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="<?= base_url('assets/daily-shop-theme/img/women/girl-2.png') ?>" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                        <figcaption>
                          <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                          <span class="aa-product-price">$45.50</span>
                        </figcaption>
                      </figure>                         
                      <div class="aa-product-hvr-content">

                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                      <!-- product badge -->
                      <span class="aa-badge aa-hot" href="#">HOT!</span>
                    </li>
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="<?= base_url('assets/daily-shop-theme/img/women/girl-3.png') ?>" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                        <figcaption>
                          <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                          <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                        </figcaption>
                      </figure>                         
                      <div class="aa-product-hvr-content">

                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                    </li>
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="<?= base_url('assets/daily-shop-theme/img/women/girl-4.png') ?>" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                        <figcaption>
                          <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                          <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                        </figcaption>
                      </figure>                          
                      <div class="aa-product-hvr-content">

                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                      <!-- product badge -->
                      <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                    </li>
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="<?= base_url('assets/daily-shop-theme/img/women/girl-5.png') ?>" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                        <figcaption>
                          <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                          <span class="aa-product-price">$45.50</span>
                        </figcaption>
                      </figure>

                      <div class="aa-product-hvr-content">

                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                    </li>
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="<?= base_url('assets/daily-shop-theme/img/women/girl-6.png') ?>" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                        <figcaption>
                          <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                          <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                        </figcaption>
                      </figure>                          
                      <div class="aa-product-hvr-content">

                        <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                      </div>
                    </li>
                    <!-- start single product item -->
                    <li>
                      <figure>
                        <a class="aa-product-img" href="#"><img src="<?= base_url('assets/daily-shop-theme/img/women/girl-7.png') ?>" alt="polo shirt img"></a>
                        <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                        <figcaption>
                          <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                          <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                        </figcaption>
                      </figure>                          
                      <div class="aa-product-hvr-content">

                       <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                     </div>
                     <!-- product badge -->
                     <span class="aa-badge aa-sale" href="#">SALE!</span>
                   </li>
                   <!-- start single product item -->
                   <li>
                    <figure>
                      <a class="aa-product-img" href="#"><img src="<?= base_url('assets/daily-shop-theme/img/women/girl-1.png') ?>" alt="polo shirt img"></a>
                      <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                      <figcaption>
                        <h4 class="aa-product-title"><a href="#">Lorem ipsum doller</a></h4>
                        <span class="aa-product-price">$45.50</span>
                      </figcaption>
                    </figure>                         
                    <div class="aa-product-hvr-content">

                      <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                    </div>
                    <!-- product badge -->
                    <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
                  </li>                        
                </ul>
                <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
              </div>
              <!-- / women product category -->
            </div>

            <!-- quick view modal -->                  
            <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">                      
                  <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <div class="row">
                      <!-- Modal view slider -->
                      <div class="col-md-6 col-sm-6 col-xs-12">                              
                        <div class="aa-product-view-slider">                                
                          <div class="simpleLens-gallery-container" id="demo-1">
                            <div class="simpleLens-container">
                              <div class="simpleLens-big-image-container">
                                <a class="simpleLens-lens-image" data-lens-image="<?= base_url('assets/daily-shop-theme/img/view-slider/large/polo-shirt-1.png') ?>">
                                  <img src="<?= base_url('assets/daily-shop-theme/img/view-slider/medium/polo-shirt-1.png') ?>" class="simpleLens-big-image">
                                </a>
                              </div>
                            </div>
                            <div class="simpleLens-thumbnails-container">
                              <a href="#" class="simpleLens-thumbnail-wrapper"
                              data-lens-image="<?= base_url('assets/daily-shop-theme/img/view-slider/large/polo-shirt-1.png') ?>"
                              data-big-image="<?= base_url('assets/daily-shop-theme/img/view-slider/medium/polo-shirt-1.png') ?>">
                              <img src="<?= base_url('assets/daily-shop-theme/img/view-slider/thumbnail/polo-shirt-1.png') ?>">
                            </a>                                    
                            <a href="#" class="simpleLens-thumbnail-wrapper"
                            data-lens-image="<?= base_url('assets/daily-shop-theme/img/view-slider/large/polo-shirt-3.png') ?>"
                            data-big-image="<?= base_url('assets/daily-shop-theme/img/view-slider/medium/polo-shirt-3.png') ?>">
                            <img src="<?= base_url('assets/daily-shop-theme/img/view-slider/thumbnail/polo-shirt-3.png') ?>">
                          </a>

                          <a href="#" class="simpleLens-thumbnail-wrapper"
                          data-lens-image="<?= base_url('assets/daily-shop-theme/img/view-slider/large/polo-shirt-4.png') ?>"
                          data-big-image="<?= base_url('assets/daily-shop-theme/img/view-slider/medium/polo-shirt-4.png') ?>">
                        </a>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Modal view content -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="aa-product-view-content">
                    <h3>T-Shirt</h3>
                    <div class="aa-price-block">
                      <span class="aa-product-view-price">$34.99</span>
                      <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!</p>
                    <h4>Size</h4>
                    <div class="aa-prod-view-size">
                      <a href="#">S</a>
                      <a href="#">M</a>
                      <a href="#">L</a>
                      <a href="#">XL</a>
                    </div>
                    <div class="aa-prod-quantity">
                      <form action="">
                        <select name="" id="">
                          <option value="0" selected="1">1</option>
                          <option value="1">2</option>
                          <option value="2">3</option>
                          <option value="3">4</option>
                          <option value="4">5</option>
                          <option value="5">6</option>
                        </select>
                      </form>
                      <p class="aa-prod-category">
                        Category: <a href="#">Polo T-Shirt</a>
                      </p>
                    </div>
                    <div class="aa-prod-view-bottom">
                      <a href="#" class="aa-add-to-cart-btn"><span class="fa fa-shopping-cart"></span>Add To Cart</a>

                    </div>
                  </div>
                </div>
>>>>>>> 5db3730afb76c6bd402e6f227f598ae34ff334d8
              </div>
            </div>                        
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- / quick view modal -->  


    </div>
  </div>
</div>
</div>
</div>
</div>
</section>
<!-- / Products section -->



<<<<<<< HEAD
  <!-- Client Brand -->
  <div style="height: 200px">
    <section id="aa-client-brand" style="padding-top: 10px">
      <h2 style="text-align: center;">Testimoni</h2>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-client-brand-area">
              <ul class="aa-client-brand-slider">
                <li>
                  <a href="#" style="padding-top: 5px; padding-bottom: 5px;"><img src="<?= base_url('assets/daily-shop-theme/img/promo-banner-1.jpg') ?>" alt="jquery img"></a>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </li>
                <li>
                  <a href="#" style="padding-top: 5px; padding-bottom: 5px;"><img src="<?= base_url('assets/daily-shop-theme/img/promo-banner-1.jpg') ?>" alt="jquery img"></a>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </li>
                <li>
                  <a href="#" style="padding-top: 5px; padding-bottom: 5px;"><img src="<?= base_url('assets/daily-shop-theme/img/promo-banner-1.jpg') ?>" alt="jquery img"></a>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </li>
                <li>
                  <a href="#" style="padding-top: 5px; padding-bottom: 5px;"><img src="<?= base_url('assets/daily-shop-theme/img/promo-banner-1.jpg') ?>" alt="jquery img"></a>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </li>
                <li>
                  <a href="#" style="padding-top: 5px; padding-bottom: 5px;"><img src="<?= base_url('assets/daily-shop-theme/img/promo-banner-1.jpg') ?>" alt="jquery img"></a>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </li>
                <li>
                  <a href="#" style="padding-top: 5px; padding-bottom: 5px;"><img src="<?= base_url('assets/daily-shop-theme/img/promo-banner-1.jpg') ?>" alt="jquery img"></a>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </li>
                <li>
                  <a href="#" style="padding-top: 5px; padding-bottom: 5px;"><img src="<?= base_url('assets/daily-shop-theme/img/promo-banner-1.jpg') ?>" alt="jquery img"></a>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </li>
                <li>
                  <a href="#" style="padding-top: 5px; padding-bottom: 5px;"><img src="<?= base_url('assets/daily-shop-theme/img/promo-banner-1.jpg') ?>" alt="jquery img"></a>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </li>
                <li>
                  <a href="#" style="padding-top: 5px; padding-bottom: 5px;"><img src="<?= base_url('assets/daily-shop-theme/img/promo-banner-1.jpg') ?>" alt="jquery img"></a>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </li>
                <li>
                  <a href="#" style="padding-top: 5px; padding-bottom: 5px;"><img src="<?= base_url('assets/daily-shop-theme/img/promo-banner-1.jpg') ?>" alt="jquery img"></a>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </li>
                <li>
                  <a href="#" style="padding-top: 5px; padding-bottom: 5px;"><img src="<?= base_url('assets/daily-shop-theme/img/promo-banner-1.jpg') ?>" alt="jquery img"></a>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
=======
<!-- Client Brand -->
<div style="height: 200px">
  <section id="aa-client-brand" style="padding-top: 10px">
   <h2 style="text-align: center;">Testimoni</h2>
   <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="aa-client-brand-area">
          <ul class="aa-client-brand-slider">
            <?php $testimoni=$this->db->get('tbl_testimoni')->result_array(); 
            foreach ($testimoni as $testimoni) {
              ?>
              <li>        
                <a href="#" style="background-image: url(<?= base_url().'assets/daily-shop-theme/img/testimoni/'.$testimoni['img']; ?>);background-position: center;background-size: cover;padding-top: 5px; padding-bottom: 5px;">

                  <img style="visibility: hidden;" src="<?= base_url('assets/daily-shop-theme/img/promo-banner-1.jpg') ?>" alt="jquery img" >
                </a>                   
                <p><?= substr($testimoni['deskripsi'],0,100);?><?php if (strlen($testimoni['deskripsi'])>100) {echo "...";} ?></p> 
              </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>
>>>>>>> 5db3730afb76c6bd402e6f227f598ae34ff334d8
  </div>
</section>
</div>
  <!-- / Client Brand -->