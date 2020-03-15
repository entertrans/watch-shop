<div class="container" style="height: 500px">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url('assets/img/banner/header-bg.jpg') ?>" width="100%" height="100%">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1>Example headline.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget
                        metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="<?= base_url('assets/img/banner/header-bg.jpg') ?>" width="100%" height="100%">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Another example headline.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget
                        metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="<?= base_url('assets/img/banner/header-bg.jpg') ?>" width="100%" height="100%">
                <div class="container">
                    <div class="carousel-caption text-right">
                        <h1>One more for good measure.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget
                        metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                    </div>
                </div>
            </div>
        </div>

        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<!-- container -->
<div class="container">
    <!-- Our Service -->
    <section class="service">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Sevice</h1>
                <i>Lorem ipsum dolor sit, amet consectetur adipisicing elit. At expedita itaque officiis voluptatum. In
                    libero, eaque nulla a unde ipsum eum, nostrum omnis rem doloremque beatae suscipit sint sed
                voluptatibus.</i>
                <br><br>
            </div>

            <div class="col-md-4 text-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi quo necessitatibus pariatur deleniti tempore
                eius. Sit, itaque ad culpa, eum beatae quas enim tempore laudantium at consequatur exercitationem quibusdam
                voluptas.
            </div>
            <div class="col-md-4 text-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi quo necessitatibus pariatur deleniti tempore
                eius. Sit, itaque ad culpa, eum beatae quas enim tempore laudantium at consequatur exercitationem quibusdam
                voluptas.
            </div>
            <div class="col-md-4 text-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi quo necessitatibus pariatur deleniti tempore
                eius. Sit, itaque ad culpa, eum beatae quas enim tempore laudantium at consequatur exercitationem quibusdam
                voluptas.
            </div>
        </div>
    </section>
    <!-- /.row -->
    <!-- End of Our Service -->

    <hr class="featurette-divider">

    <!-- Products -->
    <section class="product">
        <div class="row">
            <div class="col-md-12 mb-4">
                <h1 class="text-center">Products</h1>
                <i>Lorem ipsum dolor sit, amet consectetur adipisicing elit. At expedita itaque officiis voluptatum. In
                    libero, eaque nulla a unde ipsum eum, nostrum omnis rem doloremque beatae suscipit sint sed
                voluptatibus.</i>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="<?= base_url('assets/img/product/01-thumbnail.jpg') ?>" />
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Item One</a>
                        </h4>
                        <h5>$24.99</h5>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Amet numquam aspernatur!
                        </p>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="<?= base_url('assets/img/product/02-thumbnail.jpg') ?>" />
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Item One</a>
                        </h4>
                        <h5>$24.99</h5>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Amet numquam aspernatur!
                        </p>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="<?= base_url('assets/img/product/03-thumbnail.jpg') ?>" />
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Item One</a>
                        </h4>
                        <h5>$24.99</h5>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Amet numquam aspernatur!
                        </p>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="<?= base_url('assets/img/product/04-thumbnail.jpg') ?>" />
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Item One</a>
                        </h4>
                        <h5>$24.99</h5>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Amet numquam aspernatur!
                        </p>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="<?= base_url('assets/img/product/05-thumbnail.jpg') ?>" />
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Item One</a>
                        </h4>
                        <h5>$24.99</h5>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Amet numquam aspernatur!
                        </p>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="<?= base_url('assets/img/product/06-thumbnail.jpg') ?>" />
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Item One</a>
                        </h4>
                        <h5>$24.99</h5>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Amet numquam aspernatur!
                        </p>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="col-md-12 text-center">
                <button class="btn btn-primary">View More</button>
            </div>
        </div>
    </section>
    <!-- /.row -->
    <!-- End of Products -->

    <hr class="featurette-divider">

    <!-- Testimonial -->
    <section class="testimonial">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Testimonial</h1>
                <i>Lorem ipsum dolor sit, amet consectetur adipisicing elit. At expedita itaque officiis voluptatum. In
                    libero, eaque nulla a unde ipsum eum, nostrum omnis rem doloremque beatae suscipit sint sed
                voluptatibus.</i>
                <br><br>
            </div>
        </div>

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row text-center">
                        <!--Grid column-->
                        <div class="col-md-4 mb-md-0 mb-5">
                            <div class="testimonial">
                                <!--Avatar-->
                                <div class="avatar mx-auto">
                                    <img width="50%" height="50%" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(1).jpg" class="rounded-circle z-depth-1 img-fluid">
                                </div>
                                <!--Content-->
                                <h4 class="font-weight-bold dark-grey-text mt-4">Anna Deynah</h4>
                                <h6 class="font-weight-bold blue-text my-3">Web Designer</h6>
                                <p class="font-weight-normal dark-grey-text">
                                    <i class="fa fa-fw fa-quote-left pr-2"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod
                                eos id officiis hic tenetur quae quaerat ad velit ab hic tenetur.</p>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-4 mb-md-0 mb-5">
                            <div class="testimonial">
                                <!--Avatar-->
                                <div class="avatar mx-auto">
                                    <img width="50%" height="50%" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(8).jpg" class="rounded-circle z-depth-1 img-fluid">
                                </div>
                                <!--Content-->
                                <h4 class="font-weight-bold dark-grey-text mt-4">John Doe</h4>
                                <h6 class="font-weight-bold blue-text my-3">Web Developer</h6>
                                <p class="font-weight-normal dark-grey-text">
                                    <i class="fa fa-fw fa-quote-left pr-2"></i>Ut enim ad minima veniam, quis nostrum exercitationem ullam
                                corporis suscipit laboriosam, nisi ut aliquid commodi.</p>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-4">
                            <div class="testimonial">
                                <!--Avatar-->
                                <div class="avatar mx-auto">
                                    <img width="50%" height="50%" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg" class="rounded-circle z-depth-1 img-fluid">
                                </div>
                                <!--Content-->
                                <h4 class="font-weight-bold dark-grey-text mt-4">Maria Kate</h4>
                                <h6 class="font-weight-bold blue-text my-3">Photographer</h6>
                                <p class="font-weight-normal dark-grey-text">
                                    <i class="fa fa-fw fa-quote-left pr-2"></i>At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                blanditiis praesentium voluptatum deleniti atque corrupti.</p>
                            </div>
                        </div>
                        <!--Grid column-->
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row text-center">
                        <!--Grid column-->
                        <div class="col-md-4 mb-md-0 mb-5">
                            <div class="testimonial">
                                <!--Avatar-->
                                <div class="avatar mx-auto">
                                    <img width="50%" height="50%" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(1).jpg" class="rounded-circle z-depth-1 img-fluid">
                                </div>
                                <!--Content-->
                                <h4 class="font-weight-bold dark-grey-text mt-4">Anna Deynah</h4>
                                <h6 class="font-weight-bold blue-text my-3">Web Designer</h6>
                                <p class="font-weight-normal dark-grey-text">
                                    <i class="fa fa-fw fa-quote-left pr-2"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod
                                eos id officiis hic tenetur quae quaerat ad velit ab hic tenetur.</p>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-4 mb-md-0 mb-5">
                            <div class="testimonial">
                                <!--Avatar-->
                                <div class="avatar mx-auto">
                                    <img width="50%" height="50%" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(8).jpg" class="rounded-circle z-depth-1 img-fluid">
                                </div>
                                <!--Content-->
                                <h4 class="font-weight-bold dark-grey-text mt-4">John Doe</h4>
                                <h6 class="font-weight-bold blue-text my-3">Web Developer</h6>
                                <p class="font-weight-normal dark-grey-text">
                                    <i class="fa fa-fw fa-quote-left pr-2"></i>Ut enim ad minima veniam, quis nostrum exercitationem ullam
                                corporis suscipit laboriosam, nisi ut aliquid commodi.</p>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-4">
                            <div class="testimonial">
                                <!--Avatar-->
                                <div class="avatar mx-auto">
                                    <img width="50%" height="50%" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg" class="rounded-circle z-depth-1 img-fluid">
                                </div>
                                <!--Content-->
                                <h4 class="font-weight-bold dark-grey-text mt-4">Maria Kate</h4>
                                <h6 class="font-weight-bold blue-text my-3">Photographer</h6>
                                <p class="font-weight-normal dark-grey-text">
                                    <i class="fa fa-fw fa-quote-left pr-2"></i>At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                blanditiis praesentium voluptatum deleniti atque corrupti.</p>
                            </div>
                        </div>
                        <!--Grid column-->
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row text-center">
                        <!--Grid column-->
                        <div class="col-md-4 mb-md-0 mb-5">
                            <div class="testimonial">
                                <!--Avatar-->
                                <div class="avatar mx-auto">
                                    <img width="50%" height="50%" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(1).jpg" class="rounded-circle z-depth-1 img-fluid">
                                </div>
                                <!--Content-->
                                <h4 class="font-weight-bold dark-grey-text mt-4">Anna Deynah</h4>
                                <h6 class="font-weight-bold blue-text my-3">Web Designer</h6>
                                <p class="font-weight-normal dark-grey-text">
                                    <i class="fa fa-fw fa-quote-left pr-2"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod
                                eos id officiis hic tenetur quae quaerat ad velit ab hic tenetur.</p>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-4 mb-md-0 mb-5">
                            <div class="testimonial">
                                <!--Avatar-->
                                <div class="avatar mx-auto">
                                    <img width="50%" height="50%" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(8).jpg" class="rounded-circle z-depth-1 img-fluid">
                                </div>
                                <!--Content-->
                                <h4 class="font-weight-bold dark-grey-text mt-4">John Doe</h4>
                                <h6 class="font-weight-bold blue-text my-3">Web Developer</h6>
                                <p class="font-weight-normal dark-grey-text">
                                    <i class="fa fa-fw fa-quote-left pr-2"></i>Ut enim ad minima veniam, quis nostrum exercitationem ullam
                                corporis suscipit laboriosam, nisi ut aliquid commodi.</p>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-4">
                            <div class="testimonial">
                                <!--Avatar-->
                                <div class="avatar mx-auto">
                                    <img width="50%" height="50%" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg" class="rounded-circle z-depth-1 img-fluid">
                                </div>
                                <!--Content-->
                                <h4 class="font-weight-bold dark-grey-text mt-4">Maria Kate</h4>
                                <h6 class="font-weight-bold blue-text my-3">Photographer</h6>
                                <p class="font-weight-normal dark-grey-text">
                                    <i class="fa fa-fw fa-quote-left pr-2"></i>At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                blanditiis praesentium voluptatum deleniti atque corrupti.</p>
                            </div>
                        </div>
                        <!--Grid column-->
                    </div>
                </div>
            </div>
            <!-- carousel-inner -->

            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <i style="color: black" class="fa fa-fw fa-chevron-left"></i>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <i style="color: black" class="fa fa-fw fa-chevron-right"></i>
            </a>
        </div>
    </section>
    <!-- End of Testimonial -->

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

</div>
<!-- /.container -->

<?php $this->load->view('layout/front-end/footer'); ?>