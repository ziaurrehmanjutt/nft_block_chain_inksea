<section class="tab-area-white">
    <div class="activity-area pb-100" id="activity">
        <!-- start activity -->
        <div class="container">
            <div class="row items">
                <div class="col-md-12 col-sm-12 pt-100">
                    <!-- start col-8 -->
                    <div class="macaw-tabs macaw-elegant-tabs">
                        <!-- start macaw tabs -->
                        <div role="tablist" aria-label="Resources">
                            <!-- start tablist -->
                            <button role="tab" aria-selected="true" aria-controls="all-tab" id="all">
                                <span class="label"><i class='bx bx-clipboard'></i>Details</span>
                            </button>
                            <button role="tab" aria-selected="false" aria-controls="purchage-tab" id="purchage" tabindex="-1">
                                <span class="label"><i class='bx bx-shopping-bag'></i> Bids</span>
                            </button>
                           
                            <button role="tab" aria-selected="false" aria-controls="liked-tab" id="liked" tabindex="-1">
                                <span class="label"><i class='bx bxs-heart'></i> Likes</span>
                            </button>
                            <button role="tab" aria-selected="false" aria-controls="bids-tab" id="bids" tabindex="-1">
                                <span class="label"><i class='bx bx-bitcoin'></i> Purchase</span>
                            </button>
                        </div><!-- end tablist -->
                        <div tabindex="0" role="tabpanel" aria-labelledby="all" id="all-tab">
                            <!-- tab item -->
                            <div class="row">
                                <div class="col-md-6">
                                    <table class="table table-sm" style="color: white;">
                                        <tr>
                                            <th>Title</th>
                                            <td><?= $data->nft_name ?></td>
                                        </tr>

                                        <tr>
                                            <th>Category</th>
                                            <td><?= $data->cate_name ?></td>
                                        </tr>

                                        <tr>
                                            <th>Descriptions</th>
                                            <td><?= $data->nft_descriptions ?></td>
                                        </tr>

                                        <tr>
                                            <th>Price</th>
                                            <td><?= $data->sale_price ?></td>
                                        </tr>

                                        <tr>
                                            <th>Likes</th>
                                            <td><?= $data->total_star ?></td>
                                        </tr>

                                        <tr>
                                            <th>Expire</th>
                                            <td><?= $data->expire_at ?></td>
                                        </tr>

                                    </table>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <img src="<?= base_url('assets/nfts/') . $data->nft_file ?>" alt="" class="responsive-fluid" />
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end tab panel -->
                        <div tabindex="0" role="tabpanel" aria-labelledby="purchage" id="purchage-tab" hidden>
                            <?php foreach ($bids as $key => $value) { ?>
                                <div class="tab-puchage">
                                    <!-- tab item -->
                                    <div class="tab-purchage-img">
                                        <a href="">
                                            <?php if ($value['user_image']) : ?>
                                                <img style="height: 7rem;width:7rem" src="<?= base_url('assets/users/') . $value['user_image'] ?>" alt="author" class="responsive-fluid" />
                                            <?php else : ?>
                                                <img src="<?= base_url('assets/') ?>img/avatar/3.jpg" alt="author" class="responsive-fluid" />
                                            <?php endif; ?>


                                        </a>
                                    </div>
                                    <div class="purchage-text-link">
                                        <!-- <a class="puchage-tilte" href="#">Human Machanism Picture<span class="purchage_spanbtn"><i class='bx bx-shopping-bag'></i></span></a> -->
                                        <p class="purchage-value">Total Value : <span class="eth-counter"><?= $value['total_amount'] ?> ETH</span></p>
                                        <p class="purchage-text">
                                            Purchased by
                                            <a href="" class="author-link">@<?= $value['user_name'] ?></a> at <?= $value['created_at'] ?>
                                        </p>
                                    </div>
                                </div> <!-- end tab item -->

                            <?php }  ?>
                        </div> <!-- end tab panel -->
                     
                        <div tabindex="0" role="tabpanel" aria-labelledby="liked" id="liked-tab" hidden>
                            <?php foreach ($likes as $key => $value) { ?>
                                <div class="tab-puchage">
                                    <!-- tab item -->
                                    <div class="tab-purchage-img">
                                        <a href="">
                                        <?php if ($value['user_image']) : ?>
                                                <img style="height: 7rem;width:7rem" src="<?= base_url('assets/users/') . $value['user_image'] ?>" alt="author" class="responsive-fluid" />
                                            <?php else : ?>
                                                <img src="<?= base_url('assets/') ?>img/avatar/3.jpg" alt="author" class="responsive-fluid" />
                                            <?php endif; ?>
                                        </a>
                                    </div>
                                    <div class="purchage-text-link">
                                        <a class="puchage-tilte" href="#"><?=$value['user_name']?> <span class="purchage_spanbtn"><i class='bx bx-heart'></i></span></a>
                                        <p class="purchage-text">
                                            Liked
                                            <a href="" class="author-link"> at </a> <?=$value['created_at']?>
                                        </p>
                                        <!-- <p class="purchage-value">Total Spent : <span class="eth-counter">3.5 ETH</span></p> -->
                                    </div>
                                </div> <!-- end tab item -->
                                
                            <?php  }  ?>
                          
                        </div> <!-- end tab panel -->
                        <div tabindex="0" role="tabpanel" aria-labelledby="bids" id="bids-tab" hidden>
                           
                        </div> <!-- end tab panel -->
                    </div> <!-- end macaw tabs -->
                </div> <!-- end col- -->

            </div> <!-- end row -->
        </div> <!-- end container -->
    </div> <!-- End  Activity -->
</section> <!-- end tab area white -->