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
                            <a href="<?=base_url()?>">Home /</a> <a href="#" class="active">Forget Password</a>
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
                    <img src="<?= base_url('assets/') ?>img/extra/signup.png" alt="contact" class="responsive-fluid" />
                </div>
            </div><!-- end col-6 -->
            <div class="col-md-6">
                <!-- start col-6 -->
                <div class="acount_form_bg text-center wow fadeInRight" data-wow-duration="1s" data-wow-delay=".6s" style="visibility: visible; animation-duration: 0.4s; animation-delay: 0.4s;">
                    <div class="form-title pt-30">
                        <h2 class="account_form_title span-color"> Update Your Password</h2>
                      
                    </div>
                    <div class="row mt-5">
                        <!-- start row -->
                        <div class="col-md-12">
                            <div class="account_form_area text-center">
                                <?php if (isset($_SESSION['error_info'])) : ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?= $_SESSION['error_info'] ?>
                                    </div>
                                <?php unset($_SESSION['error_info']);
                                endif;  ?>

                                <form id="account-form" method="post">
                                    <div class="row">
                                        <div class="form-group account_input col-md-12 pb-10">
                                            <input type="password" minlength='3' name="password" class="form-control account_style" id="email" placeholder="Enter New Password" value="<?=set_value('password')?>" required="required">
                                            <span class="text-danger"><?php echo form_error('password'); ?></span>
                                        </div>
                                        <div class="form-group account_input col-md-12 pb-10">
                                            <input type="password" minlength='3' name="password1"  class="form-control account_style"  placeholder="Confirm Password" required="required">
                                            <span class="text-danger"><?php echo form_error('password1'); ?></span>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="actions pt-30">
                                                <input type="submit" value="Update Password" name="submit" id="submitButton" class="btn btn-account btn-contact-bg" title="Submit Your Message!">
                                            </div>
                                        </div>
                                    </div>
                                </form>
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

                        <fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
                        </fb:login-button>

                    </div>
                </div>
            </div><!-- end col-3 -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- End how work area -->


<div class="modal fade popup" id="popup_report" tabindex="-1" role="dialog" aria-hidden="true">
    <!-- start report input popup -->
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<form method="POST" id="report_form">
                <div class="modal-body space-y-20 p-40">
                    <h3>Forget Password?</h3>
                    <div class="input-field-form">
                        <input type="email" required id="v" name="password_forget" class="form-control" placeholder="Enter Account Email">
                    </div>
                    <div class="hr"></div>
                    <div class="place-bid-btn">
                        <!-- start place btn -->
                        <button name="senamail" class="btn btn-primary w-full popup-bid-btn">Send Email</button>
                        <!-- <a href="" class="btn btn-primary w-full popup-bid-btn" data-toggle="modal" data-target="#popup_report_success" data-dismiss="modal" aria-label="Close"> Submit Report
                        </a> -->
                    </div><!-- end place btn -->
                </div><!-- end modal body -->
            </form>
        </div><!-- end modal content -->
    </div><!-- end modal dialog -->
</div><!-- end report input popup -->

<script>
    function checkLoginState() {
        FB.getLoginStatus(function(response) {
            statusChangeCallback(response);
        });
    }

    window.fbAsyncInit = function() {
        FB.init({
            appId: '294074106124045',
            cookie: true,
            xfbml: true,
            version: 'v13.0'
        });

        FB.AppEvents.logPageView();

    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {
            return;
        }
        js = d.createElement(s);
        js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>



