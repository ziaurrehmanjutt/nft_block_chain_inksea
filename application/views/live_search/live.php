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
                            <a href="<?= base_url('/') ?>">Home /</a> <a href="#" class="active">Auction</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End  Breadcrumb -->
</div><!-- End header hero area -->


<!-- End Modal Popup -->
<?php

$is_Auction = false;
$is_EndingSoon = false;
$sortBy = 0;
$category = 0;
$searchString = '';
$totalLimit = 12;

if (isset($_GET['auction']) && $_GET['auction'] == 'on') {
    $is_Auction = true;
}
if (isset($_GET['ending']) && $_GET['ending'] == 'on') {
    $is_EndingSoon = true;
}

if (isset($_GET['category']) && $_GET['category']) {
    $category = $_GET['category'];
}
if (isset($_GET['search']) && $_GET['search']) {
    $searchString = $_GET['search'];
}
if (isset($_GET['sort']) && $_GET['sort']) {
    $sortBy = $_GET['sort'];
}
if (isset($_GET['limit']) && $_GET['limit']) {
    $totalLimit = $_GET['limit'];
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
                                    <input class="search_input" name="ending" type="checkbox" <?= $is_EndingSoon ? 'checked' : '' ?>>
                                    <span class="slider round"></span>
                                </label>
                                <span class="ml-10 switch-text">Ending Soon </span>
                            </li><!-- end li -->
                            <li class="d-flex switch_item">
                                <label class="switch">
                                    <input class="search_input" name="auction" type="checkbox" <?= $is_Auction ? 'checked' : '' ?>>
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
                                <option <?= $category == $value['rowid'] ? 'selected' : '' ?> value="<?= $value['rowid'] ?>"><?= $value['cate_name'] ?></option>

                            <?php  } ?>

                        </select>
                    </div><!-- End form -->
                </div><!-- End col-4 -->
                <div class="col-md-5 col-sm-12 text-center">
                    <!-- Start col-4 -->
                    <div class="search-container">
                        <!-- <form action="#?"> -->
                        <input value="<?= $searchString ?>" name="search" type="text" placeholder="Search here..." name="search" class="search-form">
                        <button type="submit" class="search-icon"><i class='bx bx-search-alt'></i></button>
                        <!-- </form> -->
                    </div>
                </div><!-- End col-4 -->
                <div class="pt-15 col-md-3 col-sm-12">
                    <!-- Start col-4 -->
                    <div class="form-group">
                        <!-- Start form -->
                        <select class="wide search_input" name="sort">
                            <option <?= $sortBy == '0' ? 'selected' : '' ?> value="0">Recent</option>
                            <option <?= $sortBy == '1' ? 'selected' : '' ?> value="1">Popular</option>
                            <option <?= $sortBy == '2' ? 'selected' : '' ?> value="2">Older</option>
                            <option <?= $sortBy == '3' ? 'selected' : '' ?> value="3">ETH ( low to high )</option>
                            <option <?= $sortBy == '4' ? 'selected' : '' ?> value="4">ETH ( high to low )</option>
                        </select>
                    </div><!-- End form -->
                </div><!-- End col-4 -->

                <div class="pt-15 col-md-1 col-sm-12">
                    <select class="wide search_input" name="limit">
                        <option <?= $totalLimit == '12' ? 'selected' : '' ?> value="12">12</option>
                        <option <?= $totalLimit == '24' ? 'selected' : '' ?> value="24">24</option>
                        <option <?= $totalLimit == '48' ? 'selected' : '' ?> value="48">48</option>
                        <option <?= $totalLimit == '36' ? 'selected' : '' ?> value="36">36</option>
                        <option <?= $totalLimit == '72' ? 'selected' : '' ?> value="72">72</option>
                    </select>

                </div>
            </div><!-- End row -->
        </div><!-- End container -->
    </form>
    <div class="container">
        <!-- start container -->
        <div class="row">
            <?php foreach ($live as $l) : ?>
                <div class="col-md-3 col-sm-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
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
                                        <a href="" class="author_link">
                                            <?php if ($l['user_image']) : ?>
                                                <img src="<?= base_url('assets/users/') . $l['user_image'] ?>" alt="author" class="responsive-fluid img-1" />
                                            <?php else : ?>
                                                <img src="<?= base_url('assets/') ?>img/avatar/1.jpg" alt="author" class="responsive-fluid img-1" />
                                                <!-- <img style="height:45px;width:45px" src="<?= base_url('assets/') ?>img/avatar/2.jpg" alt="author" class="responsive-fluid img-1" /> -->
                                            <?php endif; ?>

                                            <!-- <i class='bx bxs-check-circle'></i> -->
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
                                    <span class="sale-count product-icon">
                                        <span class="sale-counter"><?= $l['sale_price'] ?> ETH</span>
                                    </span>
                                </li>
                            </ul>
                        </div><!-- end product link -->
                        <!-- <div class="place-bid"> -->
                        <!-- start place bid -->
                        <?php if (isset($_SESSION['login'])) : ?>
                            <a style="padding: 10px 0px;text-align: center;width: 100%;margin-top: 8px;position: absolute;" href="<?= base_url('browse/detail/') . $l['rowid'] ?>" class="placebid price">Detail Page</a>
                        <?php else : ?>
                            <a style="padding: 10px 0px;text-align: center;width: 100%;margin-top: 8px;position: absolute;" href="<?= base_url('login') ?>" class="">Login to Bid</a>
                        <?php endif; ?>
                        <!-- </div> -->
                    </div><!-- end Single Product -->
                </div> <!-- End col-4 -->
            <?php endforeach; ?>
        </div> <!-- End row -->

    </div> <!-- End Container -->
</section><!-- end explore product -->