<div id="hero-slider-area" class="header-hero-area site-breadcrumb-header fix">
    <!-- start header banner -->

    <!-- Start Breadcrumb
    ============================================= -->
    <div class="site-breadcrumb pb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center pt-200 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                    <h2 class="breadcrumb-title"><?= $data->nft_name ?></h2>
                    <ul class="breadcrumb-menu clearfix">
                        <li>
                            <a href="<?= base_url('/') ?>">Home /</a> <a href="<?= base_url('search') ?>">Explore /</a> <a href="#" class="active">Deatla</a>
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
                            <a href="#" target="_blank" id="face_book_share" class="share-icon1"><i class='bx bxl-facebook'></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" target="_blank" id="linked_in_share" class="share-icon2"><i class='bx bxl-linkedin'></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" target="_blank" id="twitter_share" class="share-icon3"><i class='bx bxl-twitter'></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" id="pin_sahre_button" target="_blank" class="share-icon4"><i class='bx bxl-pinterest-alt'></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" id="google_sahre_button" target="_blank" class="share-icon5"><i class='bx bxl-google-plus'></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" id="wahtsapp_sahre_button" style="background: #4caf50;" target="_blank" class="share-icon6"><i class='bx bxl-whatsapp'></i></a>
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


<div class="modal fade popup" id="popup_sale" tabindex="-1" role="dialog" aria-hidden="true">
    <!-- start bid input popup -->
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <form method="POST">
                <div class="modal-body space-y-20 p-40">
                    <h3>Buy Now</h3>
                   
                    <input type="hidden" name="sale_id" class="sale_id_inputs" />
                    <div class="input-field-form">
                        <input type="number" name="bid_amount" readonly value="<?=$data->sale_price?>" min="0" step="0.000001" required class="form-control" placeholder=" 5.00 ETH / UNIT">

                        <!-- <p class="enter-quantity">Unit Quantity. <span class="offline-color">26 available</span></p> -->
                    </div>
                    <div class="hr"></div>
                    <div class="d-flex justify-content-between">
                        <p> Gas fee & tax : </p>
                        <p class="text-right color_black txt _bold"> 2% </p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p> No Of units : </p>
                        <p class="text-right color_black txt _bold"> <?=$data->total_units?> </p>
                    </div>


                    <?php 
                        $initial = $data->total_units * $data->sale_price;
                        $tax = ($initial / 100) * 2;
                        $totalAmount =  $initial + $tax;

                    
                    
                    ?>
                    <div class="d-flex justify-content-between">
                        <p> Total bid amount : </p>
                        <p class="text-right color_black txt _bold"> <span id="total_bid_price"><?=$totalAmount?></span> ETH </p>
                    </div>
                    <div class="place-bid-btn">
                        <!-- start place btn -->
                        <button type="button" id="sendEthButton" name="place_a_bid" class="btn btn-primary w-full popup-bid-btn"> Buy Now </button>
                        <!-- <a href="" class="btn btn-primary w-full popup-bid-btn" data-toggle="modal" data-target="#popup_bid_success" data-dismiss="modal" aria-label="Close"> Place bid
                    </a> -->
                    </div><!-- end place btn -->

                    <div>
                        Transfer <?=$totalAmount?> from 
                        <?php  if (isset($_SESSION['login']) && $_SESSION['login']->rowid != $data->owner_id):?>
                        <?php endif  ?>
                    </div>
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

<section class="product_slider_area item-details-area live_product_bg">
    <!-- start product slider area -->
    <div class="container">
        <!-- start container -->
        <div class="single_slide pt-100">
            <!-- start single slide -->
            <div class="row">
                <!-- start row -->
                <div class="col-md-5 col-sm-12 pb-50">
                    <!-- start col -->
                    <div class="slider_text_area single_product single_item_details wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="nft_product_text slide-auction">
                            <ul class="author-profile-link text-center">
                                <!-- start author-->
                                <li class="nav-item">
                                    <a href="author-details.html" class="author_link author-slider-c offline">

                                        <?php if ($data->user_image) : ?>
                                            <img src="<?= base_url('assets/users/') . $data->user_image ?>" alt="author" class="responsive-fluid img-1" />
                                        <?php else : ?>
                                            <img src="<?= base_url('assets/') ?>img/avatar/7.jpg" alt="author" class="responsive-fluid img-1" />
                                        <?php endif; ?>


                                        <!-- <i class='bx bxs-check-circle'></i> -->
                                    </a>
                                    <span class="hover_author_link">
                                        <a href="author-details.html" class="author_link_text">@<?= $data->user_name ?></a>
                                    </span>
                                </li>

                            </ul>
                        </div><!-- end author-->
                        <div class="slide-header item-details-header text-left">
                            <h2 class="explore_title section_heading"><?= $data->nft_name ?></h2>
                            <p class="item-details-text mt-10"><?= $data->nft_descriptions ?></p>
                        </div><!-- end slide header -->
                        <div class="slide_auction_bid text-left">
                            <p class="auction_bid_text">Maximum Prise : <span class="item_size"><?= $data->sale_price ?> ETH </span></p>
                            <!-- <p class="auction_bid_text">Item Size : <span class="item_size">250 MB </span></p>
                        <p class="auction_bid_text">Width & Height : <span class="item_size">2500 px * 3600 px</span></p>
                        <p class="auction_bid_text">Unit : <span class="item_size">4 out of 4</span></p> -->
                        </div>
                        <div class="nft_product_link slide_auction_bottom pt-20 pb-10">
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
                                        <a href="#" onclick="oprSahre(<?= $data->rowid ?>)" class="report-link" data-toggle="modal" data-target="#popup_share">
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
                            <span class="place-bid-slider btn-item-details">
                                <!-- start place bid -->
                                <?php if ($data->bidding_sale == '1') : ?>
                                    <a href="#" class="placebid slider-bid price" data-toggle="modal" data-target="#popup_bid">Bid Now</a>
                                <?php else : ?>
                                    <a href="#" class="placebid slider-bid price" data-toggle="modal" data-target="#popup_sale">Buy Now</a>
                                <?php endif ?>
                            </span><!-- end place bid -->
                        </div><!-- end product link -->
                    </div><!-- end slide text area -->
                </div><!-- end col -->
                <div class="col-md-7 col-sm-12">
                    <!-- start col -->
                    <div class="slider_img_area item-details-area wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="jumbotron countdown slide-countdown show" data-Date='<?= $data->expire_at ?>' data-endText="Auction ended">
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

                <div class="col-md-12">
                    <stye>

                    </stye>
                    <div class="table-responsive">
                        <p>Bidding Activity</p>
                        <table class="table table-sm table-light">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>User</th>
                                    <th>Amount</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($bids as $key => $value) { ?>
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td><?= $value['user_name'] ?></td>
                                        <td><?= $value['bid_amount'] ?></td>
                                        <td><?= $value['created_at'] ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end single slide -->
    </div><!-- end container -->
</section><!-- end product slider area -->

<div id="how-works" class="how-work-area pt-100 pb-80">
    <!-- start how work -->
    <div class="container">
        <!-- start container -->
        <div class="row">
            <!-- start row -->
            <div class="col-md-3 col-sm-6 mb-20">
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
            <div class="col-md-3 col-sm-6 mb-20">
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
            <div class="col-md-3 col-sm-6 mb-20">
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
            <div class="col-md-3 col-sm-6 mb-20">
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

<script src="<?= base_url('assets/') ?>js/bignumber/bignumber.min.js"></script>
<script>
    const sendEthButton = document.querySelector('#sendEthButton');

    let amount = BigNumber(<?=$totalAmount?>);
    let eth = BigNumber('1000000000000000000') * amount;
    let tAms = '0x' + eth.toString(16)
    let mac= '';
    <?php if (isset($_SESSION['login'])){
        $ac = $_SESSION['login']->meta_mask_key;
        echo "mac = '$ac';";
    } ?>
    //Sending Ethereum to an address
    sendEthButton.addEventListener('click', () => {
        ethereum
            .request({
                method: 'eth_sendTransaction',
                params: [{
                    from: mac,
                    to: '<?=$admin_ket?>',
                    value: tAms,
                    gasPrice: '0x09184e72a000',
                    gas: '0x2710',
                }, ],
            })
            .then((txHash) => console.log(txHash))
            .catch((error) => console.error);
    });
</script>