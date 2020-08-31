<?php get_header(); ?>

    <!-- Hero Section Begin -->
    <section class="hero set-bg" data-setbg="<?php echo get_template_directory_uri(). '/img/hero.png' ?>">
        <div class="container-fluid">
            <div class="hero__text">
                <img src="<?php echo get_template_directory_uri(). '/img/icon/hi.png' ?>" alt="">
                <h5>Welcome to Dream</h5>
                <h2>Plan the perfect wedding</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusm`od tempor. </p>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Services Section Begin -->
    <section class="services spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Our services</h2>
                        <img src="<?php echo get_template_directory_uri(). '/img/icon/ti.png' ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="services__item">
                        <img src="<?php echo get_template_directory_uri(). '/img/icon/si-1.png'; ?>" alt="">
                        <h4>Photos & Video</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusm`od tempor.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="services__item">
                        <img src="<?php echo get_template_directory_uri(). '/img/icon/si-2.png'; ?>" alt="">
                        <h4>Wedding Makeup</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusm`od tempor.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="services__item">
                        <img src="<?php echo get_template_directory_uri(). '/img/icon/si-3.png'; ?>" alt="">
                        <h4>Restaurant</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusm`od tempor.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="services__item">
                        <img src="<?php echo get_template_directory_uri(). '/img/icon/si-4.png' ?>" alt="">
                        <h4>Live Music & DJ</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusm`od tempor.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="services__item">
                        <img src="<?php echo get_template_directory_uri(). '/img/icon/si-5.png'; ?>" alt="">
                        <h4>Wedding cake</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusm`od tempor.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="services__item">
                        <img src="<?php echo get_template_directory_uri(). '/img/icon/si-6.png' ?>" alt="">
                        <h4>Honeymoons</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusm`od tempor.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Feature Section Begin -->
    <section class="features spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Our wedding feature</h2>
                        <img src="<?php echo get_template_directory_uri(). '/img/icon/ti.png' ?>" alt="">
                    </div>
                    <ul class="filter__controls">
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".couple">Couple</li>
                        <li data-filter=".event">Event</li>
                        <li data-filter=".music">Music Live</li>
                        <li data-filter=".honeymoon">Honeymoon</li>
                        <li data-filter=".photography">Photography</li>
                    </ul>
                </div>
            </div>
            <div class="feature__gallery">
                <div class="grid-sizer"></div>
                <div class="fg__item photography set-bg" data-setbg="<?php echo get_template_directory_uri(). '/img/features/feature-1.jpg'; ?>">
                    <div class="fg__item__text">
                        <span>Ceremonies</span>
                        <h2>Christina & Evelyn</h2>
                    </div>
                </div>
                <div class="fg__item honeymoon mid_item set-bg" data-setbg="<?php echo get_template_directory_uri(). '/img/features/feature-2.jpg'; ?>">
                    <div class="fg__item__text">
                        <span>Ceremonies</span>
                        <h2>Christina & Evelyn</h2>
                    </div>
                </div>
                <div class="fg__item music large_item set-bg" data-setbg="<?php echo get_template_directory_uri(). '/img/features/feature-3.jpg' ?>">
                    <div class="fg__item__text">
                        <span>Ceremonies</span>
                        <h2>Christina & Evelyn</h2>
                    </div>
                </div>
                <div class="fg__item event large_item set-bg" data-setbg="<?php echo get_template_directory_uri(). '/img/features/feature-4.jpg' ?>">
                    <div class="fg__item__text">
                        <span>Ceremonies</span>
                        <h2>Christina & Evelyn</h2>
                    </div>
                </div>
                <div class="fg__item couple mid_item set-bg" data-setbg="<?php echo get_template_directory_uri(). '/img/features/feature-5.jpg'; ?>">
                    <div class="fg__item__text">
                        <span>Ceremonies</span>
                        <h2>Christina & Evelyn</h2>
                    </div>
                </div>
                <div class="fg__item photography set-bg" data-setbg="<?php echo get_template_directory_uri(). '/img/features/feature-6.jpg'; ?>">
                    <div class="fg__item__text">
                        <span>Ceremonies</span>
                        <h2>Christina & Evelyn</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="load__more">
                        <a href="#" class="primary-btn">View more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Section End -->

    <!-- Counter Section Begin -->
    <div class="counter spad set-bg" data-setbg="<?php echo get_template_directory_uri(). '/img/counter-bg.jpg' ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="counter__item">
                        <img src="<?php echo get_template_directory_uri(). '/img/icon/ci-1.png'; ?>" alt="">
                        <h2 class="counter_num">8365</h2>
                        <p>Photos</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="counter__item">
                        <img src="<?php echo get_template_directory_uri(). '/img/icon/ci-2.png' ?>" alt="">
                        <h2 class="counter_num">568</h2>
                        <p>Happy Couple</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="counter__item">
                        <img src="<?php echo get_template_directory_uri(). '/img/icon/ci-3.png' ?>" alt="">
                        <h2 class="counter_num">849</h2>
                        <p>Joast</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="counter__item">
                        <img src="<?php echo get_template_directory_uri(). '/img/icon/ci-4.png' ?>" alt="">
                        <h2 class="counter_num">2574</h2>
                        <p>Dress Cakes</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter Section End -->

    <!-- Request Form Section Begin -->
    <section class="request">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-7">
                    <div class="request__form">
                        <div class="section-title">
                            <span>let’s meet</span>
                            <h2>Make a request</h2>
                            <p>Should you have any enquiries about Wedding Planner, please fill in our enquiry form.</p>
                        </div>
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 px-2">
                                    <input type="text" placeholder="Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 px-2">
                                    <input type="text" placeholder="Email">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 px-2">
                                    <select>
                                        <option value="">Services</option>
                                        <option value="">Option 1</option>
                                        <option value="">Option 2</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 px-2">
                                    <select>
                                        <option value="">Guest</option>
                                        <option value="">Option 1</option>
                                        <option value="">Option 2</option>
                                    </select>
                                </div>
                                <div class="col-lg-12 px-2 text-center">
                                    <textarea placeholder="Message"></textarea>
                                    <button type="submit" class="site-btn">send a request</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Request Form Section End -->

    <!-- Latest Blog Section Begin -->
    <section class="latest spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Our blog</h2>
                        <img src="<?php echo get_template_directory_uri(). '/img/icon/ti.png'; ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="latest__item">
                        <img src="<?php echo get_template_directory_uri(). '/img/blog/latest-1.jpg' ?>" alt="">
                        <ul>
                            <li>Inspiration</li>
                            <li>Nov 27, 2019</li>
                            <li>05 Comment</li>
                        </ul>
                        <h4><a href="#">Newlyweds share first wedding photos</a></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="latest__item">
                        <img src="<?php echo get_template_directory_uri(). '/img/blog/latest-2.jpg' ?>" alt="">
                        <ul>
                            <li>Inspiration</li>
                            <li>Nov 27, 2019</li>
                            <li>05 Comment</li>
                        </ul>
                        <h4><a href="#">Newlyweds share first wedding photos</a></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="latest__item">
                        <img src="<?php echo get_template_directory_uri(). '/img/blog/latest-3.jpg' ?>" alt="">
                        <ul>
                            <li>Inspiration</li>
                            <li>Nov 27, 2019</li>
                            <li>05 Comment</li>
                        </ul>
                        <h4><a href="#">Newlyweds share first wedding photos</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->

    <!-- Logo Begin -->
    <div class="logo">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo__carousel owl-carousel">
                        <div class="logo__item">
                            <a href="#"><img src="<?php echo get_template_directory_uri(). '/img/logo-carousel/lc-1.png'; ?>" alt=""></a>
                        </div>
                        <div class="logo__item">
                            <a href="#"><img src="<?php echo get_template_directory_uri(). '/img/logo-carousel/lc-2.png' ?>" alt=""></a>
                        </div>
                        <div class="logo__item">
                            <a href="#"><img src="<?php echo get_template_directory_uri(). '/img/logo-carousel/lc-3.png' ?>" alt=""></a>
                        </div>
                        <div class="logo__item">
                            <a href="#"><img src="<?php echo get_template_directory_uri(). '/img/logo-carousel/lc-4.png' ?>" alt=""></a>
                        </div>
                        <div class="logo__item">
                            <a href="#"><img src="<?php echo get_template_directory_uri(). '/img/logo-carousel/lc-5.png' ?>" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Logo End -->
<?php get_footer() ?>