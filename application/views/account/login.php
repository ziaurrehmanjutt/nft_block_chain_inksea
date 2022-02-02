<div id="hero-slider-area" class="header-hero-area site-breadcrumb-header fix">
    <!-- start header banner -->

    <!-- Start Breadcrumb
		============================================= -->
    <div class="site-breadcrumb pb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center pt-200 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                    <h2 class="breadcrumb-title">My Account</h2>
                    <ul class="breadcrumb-menu clearfix">
                        <li>
                            <a href="index">Home /</a> <a href="#" class="active">Sign in</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End  Breadcrumb -->
</div><!-- End header hero area -->

<section class="signin_area pt-100 pb-30">
    <!-- start sign in area -->
    <div class="container">
        <!-- start container -->
        <div class="row">
            <!-- start row -->
            <div class="col-md-6">
                <!-- start col-6 -->
                <div class="form_bg_area account_img mr-20 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">
                    <img src="<?=base_url('assets/')?>img/extra/signup.png" alt="contact" class="responsive-fluid" />
                </div>
            </div><!-- end col-6 -->
            <div class="col-md-6">
                <!-- start col-6 -->
                <div class="acount_form_bg text-center wow fadeInRight" data-wow-duration="1s" data-wow-delay=".6s" style="visibility: visible; animation-duration: 0.4s; animation-delay: 0.4s;">
                    <div class="form-title pt-30">
                        <h2 class="account_form_title span-color"> Login your Account</h2>
                        <div class="share-btn social-profile">
                            <!-- start profile btn -->
                            <ul class="share-icon-list social-list">
                                <li class="nav-item">
                                    <a href="#" class="share-icon1"><i class="bx bxl-facebook"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="share-icon2"><i class="bx bxl-linkedin"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="share-icon3"><i class="bx bxl-twitter"></i></a>
                                </li>
                            </ul>
                        </div><!-- end profile btn -->
                        <p class="account_email"> or use your email</p>
                    </div>
                    <div class="row mt-5">
                        <!-- start row -->
                        <div class="col-md-12">
                            <div class="account_form_area text-center">
                                <form id="account-form" method="post">
                                    <div class="row">
                                        <div class="form-group account_input col-md-12 pb-10">
                                            <input type="email" name="email" class="form-control account_style" id="email" placeholder="Email here" required="required">
                                            <span class="text-danger"><?php echo form_error('email'); ?></span>
                                        </div>
                                        <div class="form-group account_input col-md-12 pb-10">
                                            <input type="password" name="password" class="form-control account_style" id="password" placeholder="Password" required="required">
                                            <span class="text-danger"><?php echo form_error('password'); ?></span>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" class="checkbox-custom" value=""> <span class="checkbox-text"> Remember Me</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="forget-password">
                                                <a href="" class="lost-password">Lost Password?</a>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="actions pt-30">
                                                <input type="submit" value="Sign In Now" name="submit" id="submitButton" class="btn btn-account btn-contact-bg" title="Submit Your Message!">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="account-alternative">
                                <p class="account_alter_text">Don't you have an account? <a href="register"> Create Account !</a></p>
                            </div>
                        </div>
                    </div><!-- end row -->
                </div><!-- end account form bg -->
            </div><!-- end col-6 -->
        </div><!-- start row -->
    </div><!-- end container -->
</section><!-- end sign in area -->

<div id="how-works" class="how-work-area pt-80 pb-80">
    <!-- start how work -->
    <div class="container">
        <!-- start container -->
        <div class="row">
            <!-- start row -->
            <div class="col-md-3 col-sm-6 mb-30">
                <!-- start col-3 -->
                <div class="single_feature_are how-one text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                    <div class="why_icon">
                        <i class='bx bx-wallet-alt'></i>
                    </div>
                    <div class="why_text">
                        <h6 class="why_title">Connect your Wallet</h6>
                    </div>
                </div>
            </div><!-- end col-3 -->
            <div class="col-md-3 col-sm-6 mb-30">
                <!-- start col-3 -->
                <div class="single_feature_are how-two text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                    <div class="why_icon">
                        <i class='bx bx-notepad'></i>
                    </div>
                    <div class="why_text">
                        <h6 class="why_title">Create a Collection</h6>
                    </div>
                </div>
            </div><!-- end col-3 -->
            <div class="col-md-3 col-sm-6 mb-30">
                <!-- start col-3 -->
                <div class="single_feature_are how-three text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                    <div class="why_icon">
                        <i class='bx bx-pyramid'></i>
                    </div>
                    <div class="why_text">
                        <h6 class="why_title">Add NFT Products</h6>
                    </div>
                </div>
            </div><!-- end col-3 -->
            <div class="col-md-3 col-sm-6 mb-30">
                <!-- start col-3 -->
                <div class="single_feature_are how-four text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".9s">
                    <div class="why_icon">
                        <i class='bx bx-grid'></i>
                    </div>
                    <div class="why_text">
                        <h6 class="why_title">Ready for Sale</h6>
                    </div>
                </div>
            </div><!-- end col-3 -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- End how work area -->