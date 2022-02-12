<div id="hero-slider-area" class="header-hero-area site-breadcrumb-header fix">
    <!-- start header banner -->

    <!-- Start Breadcrumb
============================================= -->
    <div class="site-breadcrumb pb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center pt-200 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                    <h2 class="breadcrumb-title">Live Auction</h2>
                    <ul class="breadcrumb-menu clearfix">
                        <li>
                            <a href="index.html">Home /</a> <a href="#" class="active">Auction</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End  Breadcrumb -->
</div><!-- End header hero area -->

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
                <div class="creator_item creator_card space-x-10">
                    <!-- start creator item -->
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
                <div class="creator_item creator_card space-x-10">
                    <!-- start creator item -->
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
<?php 

$is_Auction = false;
$is_EndingSoon = false;
$sortBy = 0;
$category = 0;
$searchString = '';

if(isset($_GET['auction']) && $_GET['auction'] == 'on'){
    $is_Auction = true;
}
if(isset($_GET['ending']) && $_GET['ending'] == 'on'){
    $is_EndingSoon = true;
}

if(isset($_GET['category']) && $_GET['category']){
    $category = $_GET['category'];
}
if(isset($_GET['search']) && $_GET['search']){
    $searchString = $_GET['search'];
}
if(isset($_GET['sort']) && $_GET['sort']){
    $sortBy =$_GET['sort'];
}
?>
<section id="nft_product_part" class="nft-product-area pt-50 pb-50">
    <!-- start explore products -->
    <div class="shape-relative">
        <div class="shape-explore1"></div>
        <div class="shape-explore2"></div>
    </div>

    <form id="search_form">
        <div class="container pt-50">
            <!-- start container -->
            <div class="row">
                <!-- start row -->
                <div class="col-md-6 col-sm-12 pb-30">
                    <!-- start col -->
                    <div class="section_intro wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                        <h2 class="section_heading">Live Auction Artworks</h2>
                        <div class="section_description live_auction">
                            <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">Explore on the world's best & largest NFT marketplace with our beautiful NFT products. We want to be a part of your smile. </p>
                        </div>
                    </div>
                </div><!-- end col -->
                <div class="col-md-6 col-sm-12 pb-30">
                    <!-- start col -->
                    <div class="menu_categories_area">
                        <!-- start switch area -->
                        <ul class="menu_categories">
                            <li class="d-flex switch_item">
                                <label class="switch">
                                    <input class="search_input" name="ending" type="checkbox" <?= $is_EndingSoon ? 'checked' : ''?>>
                                    <span class="slider round"></span>
                                </label>
                                <span class="ml-10 switch-text">Ending Soon </span>
                            </li><!-- end li -->
                            <li class="d-flex switch_item">
                                <label class="switch">
                                    <input class="search_input" name="auction" type="checkbox" <?= $is_Auction ? 'checked' : ''?>>
                                    <span class="slider round"></span>
                                </label>
                                <span class="ml-10 switch-text">Auction only</span>
                            </li><!-- end li -->
                        </ul><!-- end ul -->
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
        <div class="container pb-30">
            <!-- Start container -->
            <div class="row">
                <!-- Start row -->
                <div class="pt-15 col-md-3 col-sm-12">
                    <!-- Start col-4 -->
                    <div class="form-group">
                        <!-- Start form -->
                        <select class="wide search_input" name="category">
                            <option value="0">Choose Art</option>
                            <?php foreach ($categories as $key => $value) { ?>
                                <option <?= $category == $value['rowid'] ? 'selected' : ''?> value="<?=$value['rowid']?>"><?=$value['all_categories']?></option>
                                
                            <?php  } ?>
            
                        </select>
                    </div><!-- End form -->
                </div><!-- End col-4 -->
                <div class="col-md-6 col-sm-12 text-center">
                    <!-- Start col-4 -->
                    <div class="search-container">
                        <!-- <form action="#?"> -->
                        <input value="<?=$searchString?>" name="search" type="text" placeholder="Search here..." name="search" class="search-form">
                        <button type="submit" class="search-icon"><i class='bx bx-search-alt'></i></button>
                        <!-- </form> -->
                    </div>
                </div><!-- End col-4 -->
                <div class="pt-15 col-md-3 col-sm-12">
                    <!-- Start col-4 -->
                    <div class="form-group">
                        <!-- Start form -->
                        <select class="wide search_input" name="sort">
                            <option <?= $sortBy == '0' ? 'selected' : ''?> value="0">Recent</option>
                            <option <?= $sortBy == '1' ? 'selected' : ''?> value="1">Popular</option>
                            <option <?= $sortBy == '2' ? 'selected' : ''?> value="2">Older</option>
                            <option <?= $sortBy == '3' ? 'selected' : ''?> value="3">ETH ( low to high )</option>
                            <option <?= $sortBy == '4' ? 'selected' : ''?> value="4">ETH ( high to low )</option>
                        </select>
                    </div><!-- End form -->
                </div><!-- End col-4 -->
            </div><!-- End row -->
        </div><!-- End container -->
    </form>
    <div class="container">
        <!-- start container -->
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
                            <a href="product.html" class="theme_preview_link">

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

    </div> <!-- End Container -->
</section><!-- end explore product -->
