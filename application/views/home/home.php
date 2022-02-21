<div class="browse_categories pt-90 pb-90">
    <!-- start category -->
    <div class="container">
        <!-- start container -->
        <div class="section_title">
            <h4 class="section-subtitle wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">Browse by category to choose your file. More than 4 Millions people love us without hesitation.</h4>
        </div><!-- end section title -->
        <div class="row">
            <!-- start row -->

            <?php foreach ($categories as $cat) : ?>
                <div class="col-md-2 col-sm-4 col-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                    <!-- start col-2 -->
                    <a href="#" class="single_category category_box1">
                        <!-- <span class="category_icon">
                                <i class='bx bx-image'></i>
                            </span> -->

                        <img height="50px" width="50px" src="<?= base_url('uploaded/images/categories/') . $cat['cate_image'] ?>" />

                        <br>
                        <span class="category_title"><?= $cat['cate_name'] ?></span>
                    </a>
                </div><!-- end col-2 -->
            <?php endforeach; ?>
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end category -->


<!-- Start Modal Popup -->

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
                            <a href="#" target="_blank" id="face_book_share" class="share-icon1"><i class='bx bxl-facebook'></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="#"  target="_blank" id="linked_in_share" class="share-icon2"><i class='bx bxl-linkedin'></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" target="_blank" id="twitter_share" class="share-icon3"><i class='bx bxl-twitter'></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" id="pin_sahre_button" target="_blank" class="share-icon4"><i class='bx bxl-pinterest-alt'></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" id="google_sahre_button"  target="_blank" class="share-icon5"><i class='bx bxl-google-plus'></i></a>
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
                <h3 class="text-center">Your Report Successfully Counted</h3>
                <p class="text-center">We will take action against this item after reviewing your report. Thanks for
                    your support.</p>
                <a href=" " class="btn btn-dark"> Watch More</a>
            </div>
        </div>
    </div>
</div><!-- end report successful -->
<div class="modal fade popup" id="popup_report" tabindex="-1" role="dialog" aria-hidden="true">
    <!-- start report input popup -->
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form method="POST" id="report_form">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body space-y-20 p-40">
                    <h3>Copyright Claim Against :</h3>
                    <div class="input-field-form">
                        <input type="hidden" name="sale_id" id="sale_id_report" class="sale_id_inputs" />
                        <input type="text" id="decryptions" name="decryptions" class="form-control" placeholder="Explain behind the reason">
                    </div>
                    <div class="hr"></div>
                    <div class="place-bid-btn">
                        <!-- start place btn -->
                        <button class="btn btn-primary w-full popup-bid-btn">Submit Report</button>
                        <!-- <a href="" class="btn btn-primary w-full popup-bid-btn" data-toggle="modal" data-target="#popup_report_success" data-dismiss="modal" aria-label="Close"> Submit Report
                        </a> -->
                    </div><!-- end place btn -->
                </div><!-- end modal body -->
            </form>
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
                <p class="text-center">Your bid <span class="color_text txt_bold">(5.511 ETH) </span> has been
                    counted.</p>
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
                <div class="creator_item creator_card space-x-10" id="all_actives">
                    <!-- start creator item -->
                    <div class="avatars space-x-10">
                        <div class="media">
                            <a href="Profile.html" class="btn-avatar">
                                <!-- <i class='bx bxs-check-circle'></i> -->
                                <img src="<?= base_url('assets/') ?>img/avatar/7.jpg" alt="Avatar" class="avatar avatar-md">

                                <span style="color: white;margin: -4px 10px;"> Zia Ok Ok</span>
                            </a>
                        </div>
                        <div class="bid-accepted">
                            <p class="color_black">Bid created
                                <span class="color_brand">12 ETH</span> at <a class="color_black txt_bold" href="Profile.html">
                                <span class="date color_text">18/11/2022, 17:54</span>
                                </a>
                            </p>
                            
                        </div>
                    </div>
                </div><!-- end creator item -->
              
            </div><!-- end modal-body -->
        </div><!-- end modal-content -->
    </div><!-- end modal-dialog -->
</div><!-- end bid history -->

<!-- End Modal Popup -->

<section id="nft_product_part" class="nft-product-area pt-50 pb-50">
    <!-- start explore products -->
    <div class="shape-relative">
        <div class="shape-explore1"></div>
        <div class="shape-explore2"></div>
    </div>
    <div class="container pt-50">
        <!-- start container -->
        <div class="row">
            <!-- start row -->
            <div class="col-md-6 col-sm-12 pb-10">
                <!-- start col-6 -->
                <div class="section_intro wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                    <p class="section_top_title">Live Auction</p>
                    <h2 class="section_heading"></h2>
                </div>
            </div><!-- end col-6 -->
            <div class="col-md-6 col-sm-12">
                <!-- start col-6 -->
                <div class="section_description">
                    <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s"> Find a broad variety of
                        designs, ink prints and tattoo artists.. We believe that artists can beat machines in many
                        aspects when it comes to creating art. That’s why Inksea will be focusing on the most
                        beautiful, the biological artists. We aim to connect tattoo fans with artists, from online
                        to ink to skin. . </p>
                </div>
            </div><!-- end col-6 -->
        </div><!-- end row -->
    </div><!-- end container -->
    <div class="container">
        <!-- start container -->
        <div class="row">
            <!-- start row -->
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
                            <a href="<?=base_url('browse/detail/').$l['rowid']?>" class="theme_preview_link">

                                <img src="<?= base_url('assets/nfts/') . $l['nft_file'] ?>" alt="" class="responsive-fluid" />
                            </a>
                        </div> <!-- End single product img -->
                        <div class="nft_product_description">
                            <!-- start product description -->
                            <div class="nft_product_text">
                                <ul class="author-profile-link">
                                    <!-- start author-->
                                    <li class="nav-item">
                                        <a href="author-details.html" class="author_link offline">
                                            <img src="<?= base_url('assets/') ?>img/avatar/1.jpg" alt="author" class="responsive-fluid img-1" />
                                            <i class='bx bxs-check-circle'></i>
                                        </a>
                                        <span class="hover_author_link">
                                            <a href="author-details.html" class="author_link_text">@<?= $l['user_name'] ?></a>
                                        </span>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a href="author-details.html" class="author_link">
                                            <img src="<?= base_url('assets/') ?>img/avatar/2.jpg" alt="author" class="responsive-fluid img-2" />
                                            <i class='bx bxs-check-circle'></i>
                                        </a>
                                        <span class="hover_author_link">
                                            <a href="author-details.html" class="author_link_text">@manila007</a>
                                        </span>
                                    </li> -->
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
                                        <a href="" onclick="loadBids(<?= $l['rowid'] ?>)" class="item-history-btn" data-toggle="modal" data-target="#popup_history">
                                            <i class='bx bx-comment-detail'></i>
                                        </a>
                                    </span>
                                </li>
                                <li class="product-all-icon">
                                    <span class="report-icon product-icon">
                                        <a href="#"  onclick="oprSahre(<?= $l['rowid'] ?>)" class="report-link" data-toggle="modal" data-target="#popup_share">
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
        <div class="row">
            <!-- start row -->
            <div class="col-md-12 pt-50 pb-30">
                <div class="all_nft-product-area text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                    <a href="<?=base_url('search')?>" class="btn btn_all_nft_product">View All Artwork <i class="bx bx-arrow-back"></i></a>
                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End Container -->
</section><!-- end explore product -->

<section class="author-list-area pt-50 pb-50">
    <!-- start author list area -->
    <div class="container pt-50 mb-20">
        <!-- start container -->
        <div class="row">
            <!-- start row -->
            <div class="col-md-6 col-sm-12 pb-30">
                <div class="section_intro wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                    <h2 class="section_heading"> Meet Talented Artists</h2>
                    <div class="section_description">
                        <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">We believe that artists
                            can beat machines in many aspects when it comes to creating art. That’s why Inksea will
                            be focusing on the most beautiful, the biological artists. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 float-right col-sm-12">
                <div class="author-btn">
                    <!-- <a href="artist.html" class="btn btn_authors">All Artists <i class="bx bx-arrow-back"></i></a> -->
                </div>
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
    <div class="container pb-20">
        <!-- start Container -->
        <div class="row">
            <!-- start row -->
            <?php foreach ($users as $key => $value) { ?>

                <div class="col-md-3 col-sm-6 mb-30 mt-20">
                    <!-- start col -->
                    <div class="single-author-area">
                        <!-- start single author -->
                        <div class="single-author-img">
                            <a href="<?= base_url('profile/') .$value['rowid'] ?>" class="author_link offline">

                                <?php if ($value['user_image']) : ?>
                                    <img src="<?= base_url('assets/users/') . $value['user_image'] ?>" alt="author" class="responsive-fluid img-1" />
                                <?php else : ?>
                                    <img style="height:45px;width:45px" src="<?= base_url('assets/') ?>img/avatar/2.jpg" alt="author" class="responsive-fluid img-1" />
                                <?php endif; ?>

                                <i class="bx bxs-check-circle"></i>
                            </a>
                            <div class="name-amount">
                                <a href="<?= base_url('profile/') .$value['rowid'] ?>" class="author_link_text">@<?= $value['user_name'] ?></a>
                                <p class="eth-amount"> <span class="total-items">Total items : </span><?= $value['tnft'] ?></p>
                            </div>
                        </div><!-- end single author image -->
                        <div class="copy-icon-otr single-author-copy">
                            <div id="wallet0" class="profile_wallet text heading-SB"><?= $value['meta_mask_key'] ?></div>
                            <a href="#" class="btn_copy_link" title="Copy Text">
                                <i class="bx bx-copy-alt"></i>
                            </a>
                        </div><!-- end copy link -->
                    </div><!-- end single author -->
                </div><!-- end col -->
            <?php } ?>
        </div><!-- End row -->
    </div> <!-- End Container -->
</section><!-- end author list area -->

<div class="new_nft_product nft_product_features pt-50" id="nft-pro-slider">
    <!-- start new product slider -->
    <div class="container">
        <!-- start container -->
        <div class="row">
            <!-- start row -->
            <div class="col-md-6 col-sm-12 pb-10">
                <div class="section_intro wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                    <p class="section_top_title">Artwork</p>
                    <h2 class="section_heading">Featured Arworks</h2>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="section_description">
                    <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">We don’t believe that simple
                        machine-generated pictures without any utility will dominate the NFT space. That’s why we
                        created Inksea the marketplace where you and I can find a broad variety of designs, ink
                        prints and tattoo artists. </p>
                </div>
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
    <div class="container new-proslider-homepage">
        <!-- start container -->
        <div id="owl-demo" class="owl-carousel new-proslider">
            <!-- start owl-carousel -->
            <?php foreach ($live as $val) : ?>
                <div class="single_product mt-50 pb-30">
                    <!-- Single Product -->
                    <div class="jumbotron countdown show" data-Date='2022/04/24 23:59:59' data-endText="Auction ended">
                        <div class="running">
                            <span class="timer">
                                <span class="days"></span>d
                                <span class="hours"></span>h
                                <span class="minutes"></span>m
                                <span class="seconds"></span>s
                            </span>
                        </div>
                    </div> <!-- end count down -->
                    <div class="profile-rating">
                        <!-- thumbsup rating -->
                        <i class='bx bx-heart'></i>
                        <span class="thumbsup">2.1k</span>
                    </div> <!-- end thumbsup rating -->
                    <div class="single_product_img">
                        <!-- start single product img -->
                        <a href="product.html" class="theme_preview_link">
                            <img src="<?= base_url('assets/') ?>img/items/12.jpg" alt="" class="responsive-fluid" />
                        </a>
                    </div> <!-- End single product img -->
                    <div class="nft_product_description">
                        <!-- start product description -->
                        <div class="nft_product_text">
                            <ul class="author-profile-link slider_item_author">
                                <!-- start author-->
                                <li class="nav-item">
                                    <a href="author-details.html" class="author_link author-slider">
                                        <img src="<?= base_url('assets/') ?>img/avatar/1.jpg" alt="author" class="responsive-fluid img-1" />
                                        <i class='bx bxs-check-circle'></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="author-details.html" class="author_link author-slider offline">
                                        <img src="<?= base_url('assets/') ?>img/avatar/2.jpg" alt="author" class="responsive-fluid img-1" />
                                        <i class='bx bxs-check-circle'></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="author-details.html" class="author_link author-slider">
                                        <img src="<?= base_url('assets/') ?>img/avatar/3.jpg" alt="author" class="responsive-fluid img-2" />
                                        <i class='bx bxs-check-circle'></i>
                                    </a>
                                </li>
                            </ul>
                        </div><!-- end author-->
                        <div class="product_title_link slider_item">
                            <!-- start product title-->
                            <a class="product-title" href="#">
                                <h6 class="product_title_intro">Mysterious Robotic Body Art</h6>
                            </a>
                        </div><!-- end product title-->
                    </div><!-- end product text -->
                    <div class="nft_product_link pt-20 pb-10">
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
                                    <a href="#" class="report-link" data-toggle="modal" data-target="#popup_report">
                                        <i class='bx bxs-flag-alt'></i>
                                    </a>
                                </span>
                            </li>
                        </ul>
                        <span class="place-bid-slider">
                            <!-- start place bid -->
                            <a href="#" class="placebid slider-bid price" data-toggle="modal" data-target="#popup_bid">Bid Now</a>
                        </span><!-- end place bid -->
                    </div><!-- end product link -->
                </div><!-- end Single Product -->
            <?php endforeach; ?>
            <div class="single_product mt-50 pb-30">
                <!-- Single Product -->
                <div class="jumbotron countdown show" data-Date='2022/07/24 23:59:59' data-endText="Auction ended">
                    <div class="running">
                        <span class="timer">
                            <span class="days"></span>d
                            <span class="hours"></span>h
                            <span class="minutes"></span>m
                            <span class="seconds"></span>s
                        </span>
                    </div>
                </div> <!-- end count down -->
                <div class="profile-rating">
                    <!-- thumbsup rating -->
                    <i class='bx bx-heart'></i>
                    <span class="thumbsup">4.3k</span>
                </div> <!-- end thumbsup rating -->
                <div class="single_product_img">
                    <!-- start single product img -->
                    <a href="product.html" class="theme_preview_link">
                        <img src="<?= base_url('assets/') ?>img/items/11.jpg" alt="" class="responsive-fluid" />
                    </a>
                </div> <!-- End single product img -->
                <div class="nft_product_description">
                    <!-- start product description -->
                    <div class="nft_product_text">
                        <ul class="author-profile-link slider_item_author">
                            <!-- start author-->
                            <li class="nav-item">
                                <a href="author-details.html" class="author_link author-slider offline">
                                    <img src="<?= base_url('assets/') ?>img/avatar/1.jpg" alt="author" class="responsive-fluid img-1" />
                                    <i class='bx bxs-check-circle'></i>
                                </a>
                            </li>
                        </ul>
                    </div><!-- end author-->
                    <div class="product_title_link slider_item">
                        <!-- start product title-->
                        <a class="product-title" href="#">
                            <h6 class="product_title_intro">3D Artwork </h6>
                        </a>
                    </div><!-- end product title-->
                </div><!-- end product text -->
                <div class="nft_product_link pt-20 pb-10">
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
                                <a href="#" class="report-link" data-toggle="modal" data-target="#popup_report">
                                    <i class='bx bxs-flag-alt'></i>
                                </a>
                            </span>
                        </li>
                    </ul>
                    <span class="place-bid-slider">
                        <!-- start place bid -->
                        <a href="#" class="placebid slider-bid price" data-toggle="modal" data-target="#popup_bid">Bid Now</a>
                    </span><!-- end place bid -->
                </div><!-- end product link -->
            </div><!-- end Single Product -->
            <div class="single_product mt-50 pb-30">
                <!-- Single Product -->
                <div class="jumbotron countdown show" data-Date='2022/09/24 23:59:59' data-endText="Auction ended">
                    <div class="running">
                        <span class="timer">
                            <span class="days"></span>d
                            <span class="hours"></span>h
                            <span class="minutes"></span>m
                            <span class="seconds"></span>s
                        </span>
                    </div>
                </div> <!-- end count down -->
                <div class="profile-rating">
                    <!-- thumbsup rating -->
                    <i class='bx bx-heart'></i>
                    <span class="thumbsup">9.3k</span>
                </div> <!-- end thumbsup rating -->
                <div class="single_product_img">
                    <!-- start single product img -->
                    <a href="product.html" class="theme_preview_link">
                        <img src="<?= base_url('assets/') ?>img/items/10.jpg" alt="" class="responsive-fluid" />
                    </a>
                </div> <!-- End single product img -->
                <div class="nft_product_description">
                    <!-- start product description -->
                    <div class="nft_product_text">
                        <ul class="author-profile-link slider_item_author">
                            <!-- start author-->
                            <li class="nav-item">
                                <a href="author-details.html" class="author_link author-slider">
                                    <img src="<?= base_url('assets/') ?>img/avatar/5.jpg" alt="author" class="responsive-fluid img-1" />
                                    <i class='bx bxs-check-circle'></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="author-details.html" class="author_link author-slider">
                                    <img src="<?= base_url('assets/') ?>img/avatar/6.jpg" alt="author" class="responsive-fluid img-2" />
                                    <i class='bx bxs-check-circle'></i>
                                </a>
                            </li>
                        </ul>
                    </div><!-- end author-->
                    <div class="product_title_link slider_item">
                        <!-- start product title-->
                        <a class="product-title" href="#">
                            <h6 class="product_title_intro">Virtual Robotic Art</h6>
                        </a>
                    </div><!-- end product title-->
                </div><!-- end product text -->
                <div class="nft_product_link pt-20 pb-10">
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
                                <a href="#" class="report-link" data-toggle="modal" data-target="#popup_report">
                                    <i class='bx bxs-flag-alt'></i>
                                </a>
                            </span>
                        </li>
                    </ul>
                    <span class="place-bid-slider">
                        <!-- start place bid -->
                        <a href="#" class="placebid slider-bid price" data-toggle="modal" data-target="#popup_bid">Bid Now</a>
                    </span><!-- end place bid -->
                </div><!-- end product link -->
            </div><!-- end Single Product -->
            <div class="single_product mt-50 pb-30">
                <!-- Single Product -->
                <div class="jumbotron countdown show" data-Date='2022/11/24 23:59:59' data-endText="Auction ended">
                    <div class="running">
                        <span class="timer">
                            <span class="days"></span>d
                            <span class="hours"></span>h
                            <span class="minutes"></span>m
                            <span class="seconds"></span>s
                        </span>
                    </div>
                </div> <!-- end count down -->
                <div class="profile-rating">
                    <!-- thumbsup rating -->
                    <i class='bx bx-heart'></i>
                    <span class="thumbsup">5.7k</span>
                </div> <!-- end thumbsup rating -->
                <div class="single_product_img">
                    <!-- start single product img -->
                    <a href="product.html" class="theme_preview_link">
                        <img src="<?= base_url('assets/') ?>img/items/9.jpg" alt="" class="responsive-fluid" />
                    </a>
                </div> <!-- End single product img -->
                <div class="nft_product_description">
                    <!-- start product description -->
                    <div class="nft_product_text">
                        <ul class="author-profile-link slider_item_author">
                            <!-- start author-->
                            <li class="nav-item">
                                <a href="author-details.html" class="author_link author-slider offline">
                                    <img src="<?= base_url('assets/') ?>img/avatar/4.jpg" alt="author" class="responsive-fluid img-1" />
                                    <i class='bx bxs-check-circle'></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="author-details.html" class="author_link author-slider">
                                    <img src="<?= base_url('assets/') ?>img/avatar/7.jpg" alt="author" class="responsive-fluid img-2" />
                                    <i class='bx bxs-check-circle'></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="author-details.html" class="author_link author-slider">
                                    <img src="<?= base_url('assets/') ?>img/avatar/8.jpg" alt="author" class="responsive-fluid img-2" />
                                    <i class='bx bxs-check-circle'></i>
                                </a>
                            </li>
                        </ul>
                    </div><!-- end author-->
                    <div class="product_title_link slider_item">
                        <!-- start product title-->
                        <a class="product-title" href="#">
                            <h6 class="product_title_intro">Beautiful Natural 3D</h6>
                        </a>
                    </div><!-- end product title-->
                </div><!-- end product text -->
                <div class="nft_product_link pt-20 pb-10">
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
                                <a href="#" class="report-link" data-toggle="modal" data-target="#popup_report">
                                    <i class='bx bxs-flag-alt'></i>
                                </a>
                            </span>
                        </li>
                    </ul>
                    <span class="place-bid-slider">
                        <!-- start place bid -->
                        <a href="#" class="placebid slider-bid price" data-toggle="modal" data-target="#popup_bid">Bid Now</a>
                    </span><!-- end place bid -->
                </div><!-- end product link -->
            </div><!-- end Single Product -->
            <div class="single_product mt-50 pb-30">
                <!-- Single Product -->
                <div class="jumbotron countdown show" data-Date='2022/08/24 23:59:59' data-endText="Auction ended">
                    <div class="running">
                        <span class="timer">
                            <span class="days"></span>d
                            <span class="hours"></span>h
                            <span class="minutes"></span>m
                            <span class="seconds"></span>s
                        </span>
                    </div>
                </div> <!-- end count down -->
                <div class="profile-rating">
                    <!-- thumbsup rating -->
                    <i class='bx bx-heart'></i>
                    <span class="thumbsup">4.3k</span>
                </div> <!-- end thumbsup rating -->
                <div class="single_product_img">
                    <!-- start single product img -->
                    <a href="product.html" class="theme_preview_link">
                        <img src="<?= base_url('assets/') ?>img/items/8.jpg" alt="" class="responsive-fluid" />
                    </a>
                </div> <!-- End single product img -->
                <div class="nft_product_description">
                    <!-- start product description -->
                    <div class="nft_product_text">
                        <ul class="author-profile-link slider_item_author">
                            <!-- start author-->
                            <li class="nav-item">
                                <a href="author-details.html" class="author_link author-slider">
                                    <img src="<?= base_url('assets/') ?>img/avatar/1.jpg" alt="author" class="responsive-fluid img-1" />
                                    <i class='bx bxs-check-circle'></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="author-details.html" class="author_link author-slider">
                                    <img src="<?= base_url('assets/') ?>img/avatar/2.jpg" alt="author" class="responsive-fluid img-2" />
                                    <i class='bx bxs-check-circle'></i>
                                </a>
                            </li>
                        </ul>
                    </div><!-- end author-->
                    <div class="product_title_link slider_item">
                        <!-- start product title-->
                        <a class="product-title" href="#">
                            <h6 class="product_title_intro">Mysterious Ocean Water</h6>
                        </a>
                    </div><!-- end product title-->
                </div><!-- end product text -->
                <div class="nft_product_link pt-20 pb-10">
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
                                <a href="#" class="report-link" data-toggle="modal" data-target="#popup_report">
                                    <i class='bx bxs-flag-alt'></i>
                                </a>
                            </span>
                        </li>
                    </ul>
                    <span class="place-bid-slider">
                        <!-- start place bid -->
                        <a href="#" class="placebid slider-bid price" data-toggle="modal" data-target="#popup_bid">Bid Now</a>
                    </span><!-- end place bid -->
                </div><!-- end product link -->
            </div><!-- end Single Product -->
            <div class="single_product mt-50 pb-30">
                <!-- Single Product -->
                <div class="jumbotron countdown show" data-Date='2022/09/24 23:59:59' data-endText="Auction ended">
                    <div class="running">
                        <span class="timer">
                            <span class="days"></span>d
                            <span class="hours"></span>h
                            <span class="minutes"></span>m
                            <span class="seconds"></span>s
                        </span>
                    </div>
                </div> <!-- end count down -->
                <div class="profile-rating">
                    <!-- thumbsup rating -->
                    <i class='bx bx-heart'></i>
                    <span class="thumbsup">4.3k</span>
                </div> <!-- end thumbsup rating -->
                <div class="single_product_img">
                    <!-- start single product img -->
                    <a href="product.html" class="theme_preview_link">
                        <img src="<?= base_url('assets/') ?>img/items/7.jpg" alt="" class="responsive-fluid" />
                    </a>
                </div> <!-- End single product img -->
                <div class="nft_product_description">
                    <!-- start product description -->
                    <div class="nft_product_text">
                        <ul class="author-profile-link slider_item_author">
                            <!-- start author-->
                            <li class="nav-item">
                                <a href="author-details.html" class="author_link author-slider">
                                    <img src="<?= base_url('assets/') ?>img/avatar/5.jpg" alt="author" class="responsive-fluid img-1" />
                                    <i class='bx bxs-check-circle'></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="author-details.html" class="author_link author-slider offline">
                                    <img src="<?= base_url('assets/') ?>img/avatar/4.jpg" alt="author" class="responsive-fluid img-1" />
                                    <i class='bx bxs-check-circle'></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="author-details.html" class="author_link author-slider">
                                    <img src="<?= base_url('assets/') ?>img/avatar/2.jpg" alt="author" class="responsive-fluid img-2" />
                                    <i class='bx bxs-check-circle'></i>
                                </a>
                            </li>
                        </ul>
                    </div><!-- end author-->
                    <div class="product_title_link slider_item">
                        <!-- start product title-->
                        <a class="product-title" href="#">
                            <h6 class="product_title_intro">Wave Flaming Art</h6>
                        </a>
                    </div><!-- end product title-->
                </div><!-- end product text -->
                <div class="nft_product_link pt-20 pb-10">
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
                                <a href="#" class="report-link" data-toggle="modal" data-target="#popup_report">
                                    <i class='bx bxs-flag-alt'></i>
                                </a>
                            </span>
                        </li>
                    </ul>
                    <span class="place-bid-slider">
                        <!-- start place bid -->
                        <a href="#" class="placebid slider-bid price" data-toggle="modal" data-target="#popup_bid">Bid Now</a>
                    </span><!-- end place bid -->
                </div><!-- end product link -->
            </div><!-- end Single Product -->
            <div class="single_product mt-50 pb-30">
                <!-- Single Product -->
                <div class="jumbotron countdown show" data-Date='2022/09/24 23:59:59' data-endText="Auction ended">
                    <div class="running">
                        <span class="timer">
                            <span class="days"></span>d
                            <span class="hours"></span>h
                            <span class="minutes"></span>m
                            <span class="seconds"></span>s
                        </span>
                    </div>
                </div> <!-- end count down -->
                <div class="profile-rating">
                    <!-- thumbsup rating -->
                    <i class='bx bx-heart'></i>
                    <span class="thumbsup">1.3k</span>
                </div> <!-- end thumbsup rating -->
                <div class="single_product_img">
                    <!-- start single product img -->
                    <a href="product.html" class="theme_preview_link">
                        <img src="<?= base_url('assets/') ?>img/items/12.jpg" alt="" class="responsive-fluid" />
                    </a>
                </div> <!-- End single product img -->
                <div class="nft_product_description">
                    <!-- start product description -->
                    <div class="nft_product_text">
                        <ul class="author-profile-link slider_item_author">
                            <!-- start author-->
                            <li class="nav-item">
                                <a href="author-details.html" class="author_link author-slider">
                                    <img src="<?= base_url('assets/') ?>img/avatar/2.jpg" alt="author" class="responsive-fluid img-2" />
                                    <i class='bx bxs-check-circle'></i>
                                </a>
                            </li>
                        </ul>
                    </div><!-- end author-->
                    <div class="product_title_link slider_item">
                        <!-- start product title-->
                        <a class="product-title" href="#">
                            <h6 class="product_title_intro">Robotic Body Art</h6>
                        </a>
                    </div><!-- end product title-->
                </div><!-- end product text -->
                <div class="nft_product_link pt-20 pb-10">
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
                                <a href="#" class="report-link" data-toggle="modal" data-target="#popup_report">
                                    <i class='bx bxs-flag-alt'></i>
                                </a>
                            </span>
                        </li>
                    </ul>
                    <span class="place-bid-slider">
                        <!-- start place bid -->
                        <a href="#" class="placebid slider-bid price" data-toggle="modal" data-target="#popup_bid">Bid Now</a>
                    </span><!-- end place bid -->
                </div><!-- end product link -->
            </div><!-- end Single Product -->
            <div class="single_product mt-50 pb-30">
                <!-- Single Product -->
                <div class="jumbotron countdown show" data-Date='2021/12/24 23:59:59' data-endText="Auction ended">
                    <div class="running">
                        <span class="timer">
                            <span class="days"></span>d
                            <span class="hours"></span>h
                            <span class="minutes"></span>m
                            <span class="seconds"></span>s
                        </span>
                    </div>
                </div> <!-- end count down -->
                <div class="profile-rating">
                    <!-- thumbsup rating -->
                    <i class='bx bx-heart'></i>
                    <span class="thumbsup">5.1k</span>
                </div> <!-- end thumbsup rating -->
                <div class="single_product_img">
                    <!-- start single product img -->
                    <a href="product.html" class="theme_preview_link">
                        <img src="<?= base_url('assets/') ?>img/items/6.jpg" alt="" class="responsive-fluid" />
                    </a>
                </div> <!-- End single product img -->
                <div class="nft_product_description">
                    <!-- start product description -->
                    <div class="nft_product_text">
                        <ul class="author-profile-link slider_item_author">
                            <!-- start author-->
                            <li class="nav-item">
                                <a href="author-details.html" class="author_link author-slider">
                                    <img src="<?= base_url('assets/') ?>img/avatar/7.jpg" alt="author" class="responsive-fluid img-1" />
                                    <i class='bx bxs-check-circle'></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="author-details.html" class="author_link author-slider offline">
                                    <img src="<?= base_url('assets/') ?>img/avatar/6.jpg" alt="author" class="responsive-fluid img-2" />
                                    <i class='bx bxs-check-circle'></i>
                                </a>
                            </li>
                        </ul>
                    </div><!-- end author-->
                    <div class="product_title_link slider_item">
                        <!-- start product title-->
                        <a class="product-title" href="#">
                            <h6 class="product_title_intro">Mystetious Robotic Body Art</h6>
                        </a>
                    </div><!-- end product title-->
                </div><!-- end product text -->
                <div class="nft_product_link pt-20 pb-10">
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
                                <a href="#" class="report-link" data-toggle="modal" data-target="#popup_report">
                                    <i class='bx bxs-flag-alt'></i>
                                </a>
                            </span>
                        </li>
                    </ul>
                    <span class="place-bid-slider">
                        <!-- start place bid -->
                        <a href="#" class="placebid slider-bid price" data-toggle="modal" data-target="#popup_bid">Bid Now</a>
                    </span><!-- end place bid -->
                </div><!-- end product link -->
            </div><!-- end Single Product -->
        </div> <!-- End Product Caroseul -->
    </div> <!-- End container -->
</div><!-- End new product slider -->


<script>
    function reportBlock(id) {
        $('.sale_id_inputs').val(id);
    }
</script>