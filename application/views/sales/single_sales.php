<div id="hero-slider-area" class="header-hero-area site-breadcrumb-header fix"> <!-- start header banner -->

    <!-- Start Breadcrumb
    ============================================= -->
    <div class="site-breadcrumb pb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center pt-200 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                    <h2 class="breadcrumb-title"><?=$data->nft_name?></h2>
                    <ul class="breadcrumb-menu clearfix">
                        <li>
                            <a href="<?=base_url('/')?>">Home /</a> <a href="<?=base_url('search')?>">Explore /</a> <a href="#" class="active">Deatla</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End  Breadcrumb -->
</div><!-- End header hero area -->

<!-- Start Modal Popup -->

<div class="modal fade popup" id="popup_share" tabindex="-1" role="dialog" aria-hidden="true"><!-- start share btn popup -->
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal"
                aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body space-y-20 p-40">
                <h3>Share with : </h3>
                <div class="share-btn"><!-- start place btn -->
                    <ul class="share-icon-list">
                        <li class="nav-item">
                            <a href="#" class="share-icon1"><i class='bx bxl-facebook' ></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="share-icon2"><i class='bx bxl-linkedin' ></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="share-icon3"><i class='bx bxl-twitter' ></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="share-icon4"><i class='bx bxl-pinterest-alt' ></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="share-icon5"><i class='bx bxl-google-plus' ></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="share-icon6"><i class='bx bxl-instagram' ></i></a>
                        </li>
                    </ul>
                </div><!-- end share btn -->
            </div><!-- end modal body -->
        </div><!-- end modal content -->
    </div><!-- end modal dialog -->
</div><!-- end  share btn popup -->
<div class="modal fade popup" id="popup_report_success" tabindex="-1" role="dialog" aria-hidden="true"><!-- start report successful -->
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal"
            aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-body space-y-20 p-40">
            <h3 class="text-center">Your Report Successfuly Counted</h3>
            <p class="text-center">We will have taken against this item after reviewing. Thanks for your support.</p>
            <a href=" " class="btn btn-dark"> Watch More</a>
        </div>
    </div>
</div>
</div><!-- end report successful -->
<div class="modal fade popup" id="popup_report" tabindex="-1" role="dialog" aria-hidden="true"><!-- start report input popup -->
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal"
            aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-body space-y-20 p-40">
            <h3>Copyright Claim Against :</h3>
            <div class="input-field-form">
                <input type="text" class="form-control" placeholder="Explain behind the reason">
            </div>
            <div class="hr"></div>
            <div class="place-bid-btn"><!-- start place btn -->
                <a href="" class="btn btn-primary w-full popup-bid-btn"
                    data-toggle="modal" data-target="#popup_report_success"
                    data-dismiss="modal" aria-label="Close"> Submit Report
                </a>
            </div><!-- end place btn -->
        </div><!-- end modal body -->
    </div><!-- end modal content -->
</div><!-- end modal dialog -->
</div><!-- end report input popup -->
<div class="modal fade popup" id="popup_bid_success" tabindex="-1" role="dialog" aria-hidden="true"><!-- start bid successful -->
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal"
            aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-body space-y-20 p-40">
            <h3 class="text-center">Your Bid Successfuly Added</h3>
            <p class="text-center">Your bid <span class="color_text txt_bold">(5.511 ETH) </span> has been counted.</p>
            <a href=" " class="btn btn-dark"> Watch More</a>
        </div>
    </div>
</div>
</div><!-- end bid successful -->
<div class="modal fade popup" id="popup_bid" tabindex="-1" role="dialog" aria-hidden="true"><!-- start bid input popup -->
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal"
            aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-body space-y-20 p-40">
            <h3>Place a Bid</h3>
            <div class="d-flex justify-content-between">
                <p> service fee : </p>
                <p class="text-right color_black txt _bold"> .511 ETH </p>
            </div>
            <div class="d-flex justify-content-between last-child-bid">
                <p> You must bid at least : </p>
                <p class="text-right color_black txt _bold"> 5.00 ETH</p>
            </div>
            <div class="input-field-form">
                <input type="text" class="form-control" placeholder=" 5.00 ETH / UNIT">
                <p class="enter-quantity">Unit Quantity. <span class="offline-color">26 available</span></p>
            </div>
            <div class="hr"></div>
            <div class="d-flex justify-content-between">
                <p> Total bid amount : </p>
                <p class="text-right color_black txt _bold"> 5.511 ETH </p>
            </div>
            <div class="place-bid-btn"><!-- start place btn -->
                <a href="" class="btn btn-primary w-full popup-bid-btn"
                    data-toggle="modal" data-target="#popup_bid_success"
                    data-dismiss="modal" aria-label="Close"> Place bid
                </a>
            </div><!-- end place btn -->
        </div><!-- end modal body -->
    </div><!-- end modal content -->
</div><!-- end modal dialog -->
</div><!-- end bid input popup -->
<div class="modal fade popup" id="popup_history" tabindex="-1" role="dialog" aria-hidden="true"><!-- start bid history -->
<div class="modal-dialog modal-dialog-centered" role="document"><!-- start modal-dialog -->
    <div class="modal-content"><!-- start modal-content -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-body space-y-20 p-40"><!-- start modal-body -->
            <h4> Bidding Activity </h4>
            <div class="creator_item creator_card space-x-10"><!-- start creator item -->
                <div class="avatars space-x-10">
                    <div class="media">
                        <a href="Profile.html" class="btn-avatar">
                            <i class='bx bxs-check-circle'></i>
                            <img src="img/avatar/7.jpg" alt="Avatar" class="avatar avatar-md">
                        </a>
                    </div>
                    <div class="bid-accepted">
                        <p class="color_black">Bid accepted
                            <span class="color_brand">12 ETH</span> by <a class="color_black txt_bold" href="Profile.html">Amanda</a>
                        </p>
                        <span class="date color_text">18/11/2021, 17:54</span>
                    </div>
                </div>
            </div><!-- end creator item -->
            <div class="creator_item creator_card space-x-10"><!-- start creator item -->
                <div class="avatars space-x-10">
                    <div class="media">
                        <a href="Profile.html" class="btn-avatar">
                            <i class='bx bxs-check-circle'></i>
                            <img src="img/avatar/4.jpg" alt="Avatar" class="avatar avatar-md">
                        </a>
                    </div>
                    <div class="bid-accepted">
                        <p class="color_black">Bid accepted
                            <span class="color_brand">5.511 ETH</span> by <a class="color_black txt_bold" href="Profile.html">Devid Monda</a>
                        </p>
                        <span class="date color_text">28/11/2021, 13:54</span>
                    </div>
                </div>
            </div><!-- end creator item -->
        </div><!-- end modal-body -->
    </div><!-- end modal-content -->
</div><!-- end modal-dialog -->
</div><!-- end bid history -->

<!-- End Modal Popup -->

<section class="product_slider_area item-details-area live_product_bg"><!-- start product slider area -->
<div class="container"><!-- start container -->
    <div class="single_slide pt-100"><!-- start single slide -->
        <div class="row"><!-- start row -->
            <div class="col-md-5 col-sm-12 pb-50"><!-- start col -->
                <div class="slider_text_area single_product single_item_details wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">
                    <div class="nft_product_text slide-auction">
                        <ul class="author-profile-link text-center"><!-- start author-->
                            <li class="nav-item">
                                <a href="author-details.html" class="author_link author-slider-c offline">
                                    <img src="<?=base_url('assets/')?>img/avatar/7.jpg" alt="author" class="responsive-fluid img-1" />
                                    <!-- <i class='bx bxs-check-circle'></i> -->
                                </a>
                                <span class="hover_author_link">
                                    <a href="author-details.html" class="author_link_text">@<?= $data->user_name ?></a>
                                </span>
                            </li>
                           
                        </ul>
                    </div><!-- end author-->
                    <div class="slide-header item-details-header text-left">
                        <h2 class="explore_title section_heading"><?=$data->nft_name?></h2>
                        <p class="item-details-text mt-10"><?=$data->nft_descriptions?></p>
                    </div><!-- end slide header -->
                    <div class="slide_auction_bid text-left">
                        <p class="auction_bid_text">Maximum Prise : <span class="item_size"><?=$data->sale_price?> ETH </span></p>
                        <!-- <p class="auction_bid_text">Item Size : <span class="item_size">250 MB </span></p>
                        <p class="auction_bid_text">Width & Height : <span class="item_size">2500 px * 3600 px</span></p>
                        <p class="auction_bid_text">Unit : <span class="item_size">4 out of 4</span></p> -->
                    </div>
                    <div class="nft_product_link slide_auction_bottom pt-20 pb-10"><!-- start product link -->
                        <ul>
                            <li class="product-all-icon">
                                <span class="item-history product-icon">
                                    <a href="#" class="item-history-btn" data-toggle="modal" data-target="#popup_history">
                                        <i class='bx bx-comment-detail'></i>
                                    </a>
                                </span>
                            </li>
                                <li class="product-all-icon">
                                    <span class="report-icon product-icon">
                                            <a href="#" class="report-link" data-toggle="modal" data-target="#popup_share">
                                                <i class='bx bxs-share-alt'></i>
                                            </a>
                                    </span>
                                </li>
                                <li class="product-all-icon">
                                    <span class="report-icon product-icon">
                                            <a href="#" class="report-link" data-toggle="modal" data-target="#popup_report">
                                                <i class='bx bxs-flag-alt'></i>
                                            </a>
                                    </span>
                                </li>
                        </ul>
                        <span class="place-bid-slider btn-item-details"><!-- start place bid -->
                            <a href="#" class="placebid slider-bid price" data-toggle="modal" data-target="#popup_bid">Bid Now</a>
                        </span><!-- end place bid -->
                    </div><!-- end product link -->
                </div><!-- end slide text area -->
            </div><!-- end col -->
            <div class="col-md-7 col-sm-12"><!-- start col -->
                <div class="slider_img_area item-details-area wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                    <div class="jumbotron countdown slide-countdown show" data-Date='<?=$data->expire_at?>' data-endText="Auction ended">
                        <div class="running">
                            <span class="timer slide">
                              <span class="days"> </span> : Ds
                              <span class="hours"> </span> : Hs
                              <span class="minutes"> </span> : Ms
                              <span class="seconds"> </span> : Ss
                              </span>
                        </div>
                    </div> <!-- end count down -->
                    <div class="slider_img">
                        <img src="<?= base_url('assets/nfts/') . $data->nft_file ?>" alt="" class="responsive-fluid" />
                    </div>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end single slide -->
</div><!-- end container -->
</section><!-- end product slider area -->

<div id="how-works" class="how-work-area pt-100 pb-80"><!-- start how work -->
<div class="container"><!-- start container -->
    <div class="row"><!-- start row -->
        <div class="col-md-3 col-sm-6 mb-20"><!-- start col-3 -->
            <div class="single_feature_are how-one text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                <div class="why_icon">
                    <i class='bx bx-wallet-alt'></i>
                </div>
                <div class="why_text">
                    <h6 class="why_title">Connect your Wallet</h6>
                </div>
            </div>
        </div><!-- end col-3 -->
        <div class="col-md-3 col-sm-6 mb-20"><!-- start col-3 -->
            <div class="single_feature_are how-two text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                <div class="why_icon">
                    <i class='bx bx-notepad'></i>
                </div>
                <div class="why_text">
                    <h6 class="why_title">Create a Collection</h6>
                </div>
            </div>
        </div><!-- end col-3 -->
        <div class="col-md-3 col-sm-6 mb-20"><!-- start col-3 -->
            <div class="single_feature_are how-three text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                <div class="why_icon">
                    <i class='bx bx-pyramid'></i>
                </div>
                <div class="why_text">
                    <h6 class="why_title">Add NFT Products</h6>
                </div>
            </div>
        </div><!-- end col-3 -->
        <div class="col-md-3 col-sm-6 mb-20"><!-- start col-3 -->
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
