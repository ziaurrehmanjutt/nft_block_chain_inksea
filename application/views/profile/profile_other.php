<div class="modal fade popup" id="popup_share" tabindex="-1" role="dialog" aria-hidden="true">
    <!-- start share btn popup -->
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body space-y-20 p-40">
                <h3>Share with : </h3>
                <div class="share-btn">
                    <!-- start place btn -->
                    <ul class="share-icon-list">
                        <li class="nav-item">
                            <a href="#" class="share-icon1"><i class='bx bxl-facebook'></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="share-icon2"><i class='bx bxl-linkedin'></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="share-icon3"><i class='bx bxl-twitter'></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="share-icon4"><i class='bx bxl-pinterest-alt'></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="share-icon5"><i class='bx bxl-google-plus'></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="share-icon6"><i class='bx bxl-instagram'></i></a>
                        </li>
                    </ul>
                </div><!-- end share btn -->
            </div><!-- end modal body -->
        </div><!-- end modal content -->
    </div><!-- end modal dialog -->
</div><!-- end  share btn popup -->
<div class="modal fade popup" id="popup_report_success" tabindex="-1" role="dialog" aria-hidden="true">
    <!-- start report successful -->
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
<div class="modal fade popup" id="popup_report" tabindex="-1" role="dialog" aria-hidden="true">
    <!-- start report input popup -->
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body space-y-20 p-40">
                <h3>Copyright Claim Against :</h3>
                <div class="input-field-form">
                    <input type="text" class="form-control" placeholder="Explain behind the reason">
                </div>
                <div class="hr"></div>
                <div class="place-bid-btn">
                    <!-- start place btn -->
                    <a href="" class="btn btn-primary w-full popup-bid-btn" data-toggle="modal" data-target="#popup_report_success" data-dismiss="modal" aria-label="Close"> Submit Report
                    </a>
                </div><!-- end place btn -->
            </div><!-- end modal body -->
        </div><!-- end modal content -->
    </div><!-- end modal dialog -->
</div><!-- end report input popup -->
<div class="modal fade popup" id="popup_bid_success" tabindex="-1" role="dialog" aria-hidden="true">
    <!-- start bid successful -->
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
<div class="modal fade popup" id="popup_bid" tabindex="-1" role="dialog" aria-hidden="true">
    <!-- start bid input popup -->
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <form method="POST">
                <div class="modal-body space-y-20 p-40">
                    <h3>Place a Bid</h3>
                    <!-- <div class="d-flex justify-content-between">
                    <p> Gas fee : </p>
                    <p class="text-right color_black txt _bold"> .511 ETH </p>
                </div>
                <div class="d-flex justify-content-between last-child-bid">
                    <p> You must bid at least : </p>
                    <p class="text-right color_black txt _bold"> 5.00 ETH</p>
                </div> -->
                    <input type="hidden" name="sale_id" class="sale_id_inputs" />
                    <div class="input-field-form">
                        <input type="number" name="bid_amount" id="bid_price_required" min="0" step="0.000001" required class="form-control" placeholder=" 5.00 ETH / UNIT">

                        <!-- <p class="enter-quantity">Unit Quantity. <span class="offline-color">26 available</span></p> -->
                    </div>
                    <div class="hr"></div>
                    <div class="d-flex justify-content-between">
                        <p> Gas fee & tax : </p>
                        <p class="text-right color_black txt _bold"> 20% </p>
                    </div>

                    <div class="d-flex justify-content-between">
                        <p> Total bid amount : </p>
                        <p class="text-right color_black txt _bold"> <span id="total_bid_price">5.511</span> ETH </p>
                    </div>
                    <div class="place-bid-btn">
                        <!-- start place btn -->
                        <button type="submit" name="place_a_bid" class="btn btn-primary w-full popup-bid-btn"> Place bid </button>
                        <!-- <a href="" class="btn btn-primary w-full popup-bid-btn" data-toggle="modal" data-target="#popup_bid_success" data-dismiss="modal" aria-label="Close"> Place bid
                    </a> -->
                    </div><!-- end place btn -->
                </div><!-- end modal body -->
            </form>
        </div><!-- end modal content -->
    </div><!-- end modal dialog -->
</div><!-- end bid input popup -->
<div class="modal fade popup" id="popup_history" tabindex="-1" role="dialog" aria-hidden="true">
    <!-- start bid history -->
    <div class="modal-dialog modal-dialog-centered" role="document">
        <!-- start modal-dialog -->
        <div class="modal-content">
            <!-- start modal-content -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body space-y-20 p-40">
                <!-- start modal-body -->
                <h4> Bidding Activity </h4>
                <div class="creator_item creator_card space-x-10">
                    <!-- start creator item -->
                    <div class="avatars space-x-10">
                        <div class="media">
                            <a href="#" class="btn-avatar">
                                <i class='bx bxs-check-circle'></i>
                                <img src="img/avatar/7.jpg" alt="Avatar" class="avatar avatar-md">
                            </a>
                        </div>
                        <div class="bid-accepted">
                            <p class="color_black">Bid accepted
                                <span class="color_brand">12 ETH</span> by <a class="color_black txt_bold" href="#">Amanda</a>
                            </p>
                            <span class="date color_text">18/11/2021, 17:54</span>
                        </div>
                    </div>
                </div><!-- end creator item -->
                <div class="creator_item creator_card space-x-10">
                    <!-- start creator item -->
                    <div class="avatars space-x-10">
                        <div class="media">
                            <a href="" class="btn-avatar">
                                <i class='bx bxs-check-circle'></i>
                                <img src="img/avatar/4.jpg" alt="Avatar" class="avatar avatar-md">
                            </a>
                        </div>
                        <div class="bid-accepted">
                            <p class="color_black">Bid accepted
                                <span class="color_brand">5.511 ETH</span> by <a class="color_black txt_bold" href="">Devid Monda</a>
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

<section class="author-details dark-bg-all pt-90 pb-80" style="margin-top: 50px;">
    <!-- start author details area -->
    <div class="container author-details-container">
        <!-- start container -->
        <div class="row">
            <!-- start row -->
            <div class="col-md-5">
                <!-- start col -->
                <div class="author-details-top pb-50">
                    <div class="author-details-img">
                        <img src="img/avatar/2.jpg" alt="" class="responsive-fluid" />
                        <div class="author-icon">
                            <i class="bx bxs-check-circle"></i>
                        </div>
                    </div>
                    <div class="author-text-link">
                        <h6 class="author_name"><?= $profile->user_name ?></h6>
                        <div class="copy-icon-otr author-copy-link">
                            <span id="wallet-copy" class="profile_wallet author-wallet text heading-SB">MSckb9oW1HPa7K7f865Kk4LqnrME</span>
                            <button id="wallet_btn_copy" title="Copy Text">
                                <i class='bx bx-copy-alt'></i>
                            </button>
                        </div><!-- end copy link  -->
                        <div class="follower-btn-counter">
                            <!-- <a href="#" class="follower-btn">Follow </a> -->
                            <form method="POST">
                                <button name="start_follow" class="follower-btn btn btn-primary">Follow</button>
                            </form>
                            <span class="followers-count"><?= $profile->total_foloowings ?></span>
                        </div>
                    </div>
                </div>
            </div><!-- end col -->
            <div class="col-md-7">
                <!-- start col -->
                <div class="about-me">
                    <!-- tab item -->
                    <div class="about-me-text-link">
                        <h6 class="about-heading">Author Brief</h6>
                        <p> <?php echo $profile->user_bio ?> </p>
                    </div>
                    <div class="share-btn social-profile">
                        <!-- start share btn -->
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
                            <li class="nav-item">
                                <a href="#" class="share-icon6"><i class="bx bxl-instagram"></i></a>
                            </li>
                        </ul>
                    </div><!-- start share btn -->
                </div> <!-- end tab item -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
    <div class="container macaw-tabs-container">
        <!-- start container -->
        <div class="row">
            <!-- start row -->
            <div class="col-md-12 col-sm-12 pt-50">
                <!-- start col-10 -->
                <div class="macaw-tabs macaw-elegant-tabs">
                    <!-- start macaw tabs -->
                    <div role="tablist" aria-label="Resources">
                        <!-- start tablist -->

                        <button role="tab" aria-selected="false" aria-controls="auction-tab" id="auction" tabindex="-1">
                            <span class="label"><i class='bx bx-shopping-bag'></i> Item on Sale</span>
                        </button>

                    </div><!-- end tablist -->

                    <div tabindex="0" role="tabpanel" aria-labelledby="auction" id="auction-tab">
                        <!-- start tab panel -->
                        <div class="sale-item tab-area-bg">
                            <!-- start tab area -->
                            <div class="row">


                                <?php foreach ($live as $l) : ?>
                                    <div class="col-md-4 col-sm-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                                        <!-- start col-4 -->
                                        <div class="single_product mt-50 pb-30">
                                            <!-- Single Product -->
                                            <div class="jumbotron countdown show" data-Date='<?= $l['expire_at'] ?>' data-endText="Auction ended">
                                                <div class="running">
                                                    <span class="timer">
                                                        <span class="days"></span>d
                                                        <span class="hours"></span>h
                                                        <span class="minutes"></span>m
                                                        <span class="seconds"></span>s
                                                    </span>
                                                </div>
                                            </div> <!-- end count down -->
                                            <div class="profile-rating" onclick="doRatting(<?= $l['rowid'] ?>)">
                                                <!-- thumbsup rating -->
                                                <i class='bx bx-heart'></i>
                                                <span class="thumbsup" id="rat-<?= $l['rowid'] ?>"><?= $l['total_star'] ?></span>
                                            </div> <!-- end thumbsup rating -->
                                            <div class="single_product_img">
                                                <!-- start single product img -->
                                                <a href="" class="theme_preview_link">

                                                    <img src="<?= base_url('assets/nfts/rel_') . $l['nft_file'] ?>" alt="" class="responsive-fluid" />
                                                </a>
                                            </div> <!-- End single product img -->
                                            <div class="nft_product_description">
                                                <!-- start product description -->
                                                <div class="nft_product_text">
                                                    <ul class="author-profile-link">
                                                        <!-- start author-->
                                                        <li class="nav-item">
                                                            <a href="" class="author_link offline">
                                                                <img src="<?= base_url('assets/') ?>img/avatar/1.jpg" alt="author" class="responsive-fluid img-1" />
                                                                <i class='bx bxs-check-circle'></i>
                                                            </a>
                                                            <span class="hover_author_link">
                                                                <a href="" class="author_link_text">@<?= $l['user_name'] ?></a>
                                                            </span>
                                                        </li>
                             
                                                    </ul>
                                                </div><!-- end author-->
                                                <div class="product_title_link">
                                                    <!-- start product title-->
                                                    <a class="product-title" href="#">
                                                        <h6 class="product_title_intro"><?= $l['nft_name'] ?></h6>
                                                    </a>
                                                </div><!-- end product title-->
                                            </div><!-- end product text -->
                                            <div class="nft_product_link">
                                                <!-- start product link -->
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
                                                            <a href="#" onclick="reportBlock(<?= $l['rowid'] ?>)" class="report-link" data-toggle="modal" data-target="#popup_report">
                                                                <i class='bx bxs-flag-alt'></i>
                                                            </a>
                                                        </span>
                                                    </li>
                                                    <li class="product-all-icon">
                                                        <span class="sale-count product-icon">
                                                            <span class="sale-counter"><?= $l['sale_price'] ?> ETH</span>
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div><!-- end product link -->
                                            <div class="place-bid">
                                                <!-- start place bid -->
                                                <?php if (isset($_SESSION['login'])) : ?>
                                                    <a href="#" class="placebid price" data-toggle="modal" data-target="#popup_bid">Bid Now</a>
                                                <?php else : ?>
                                                    <a href="<?= base_url('login') ?>" class="placebid price">Login to Bid</a>
                                                <?php endif; ?>
                                            </div><!-- end place bid -->
                                        </div><!-- end Single Product -->
                                    </div> <!-- End col-4 -->
                                <?php endforeach; ?>
                            </div> <!-- End row -->
                        </div> <!-- End tab area -->
                    </div> <!-- end tab panel -->

                </div><!-- end macaw tabs -->
            </div> <!-- end col-8 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end author details area -->


<script>
    $("#bid_price_required").change(function() {
        let newVal = +$(this).val();
        if (newVal > 0)
            $('#total_bid_price').html((newVal + (newVal / 100 * 20)).toFixed(10))
    });
</script>