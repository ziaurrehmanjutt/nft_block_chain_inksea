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
                            <button role="tab" aria-selected="false" aria-controls="following-tab" id="following" tabindex="-1">
                                <span class="label"><i class='bx bxs-user-check'></i> Complains</span>
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
                                            <td><?=$data->nft_name?></td>
                                        </tr>

                                        <tr>
                                            <th>Category</th>
                                            <td><?=$data->cate_name?></td>
                                        </tr>

                                        <tr>
                                            <th>Descriptions</th>
                                            <td><?=$data->nft_descriptions?></td>
                                        </tr>

                                        <tr>
                                            <th>Price</th>
                                            <td><?=$data->sale_price?></td>
                                        </tr>

                                        <tr>
                                            <th>Likes</th>
                                            <td><?=$data->total_star?></td>
                                        </tr>

                                        <tr>
                                            <th>Expire</th>
                                            <td><?=$data->expire_at?></td>
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
                            <div class="tab-puchage">
                                <!-- tab item -->
                                <div class="tab-purchage-img">
                                    <a href="">
                                        <img src="<?= base_url('assets/') ?>img/avatar/3.jpg" alt="author" class="responsive-fluid" />
                                    </a>
                                </div>
                                <div class="purchage-text-link">
                                    <a class="puchage-tilte" href="#">Human Machanism Picture<span class="purchage_spanbtn"><i class='bx bx-shopping-bag'></i></span></a>
                                    <p class="purchage-value">Total Value : <span class="eth-counter">450 ETH</span></p>
                                    <p class="purchage-text">
                                        Purchased by
                                        <a href="" class="author-link">@Devid Wane</a> for 0.01 ETH 2 hours ago
                                    </p>
                                </div>
                            </div> <!-- end tab item -->
                            <div class="tab-puchage">
                                <!-- tab item -->
                                <div class="tab-purchage-img">
                                    <a href="">
                                        <img src="<?= base_url('assets/') ?>img/avatar/4.jpg" alt="author" class="responsive-fluid" />
                                    </a>
                                </div>
                                <div class="purchage-text-link">
                                    <a class="puchage-tilte" href="#">Robotic 3D Art Collection <span class="purchage_spanbtn"><i class='bx bx-shopping-bag'></i></span> </a>
                                    <p class="purchage-value">Total Value : <span class="eth-counter">42 ETH</span></p>
                                    <p class="purchage-text">
                                        1 part purchased by
                                        <a href="" class="author-link">@William</a> for 0.01 ETH 4 hours ago
                                    </p>
                                </div>
                            </div> <!-- end tab item -->
                            <div class="tab-puchage">
                                <!-- tab item -->
                                <div class="tab-purchage-img">
                                    <a href="">
                                        <img src="<?= base_url('assets/') ?>img/avatar/5.jpg" alt="author" class="responsive-fluid" />
                                    </a>
                                </div>
                                <div class="purchage-text-link">
                                    <a class="puchage-tilte" href="#">Female Art Face <span class="purchage_spanbtn"><i class='bx bx-shopping-bag'></i></span></a>
                                    <p class="purchage-value">Total Value : <span class="eth-counter">49 ETH</span></p>
                                    <p class="purchage-text">
                                        1 part purchased by
                                        <a href="" class="author-link">@Max Doe</a> for 0.01 ETH 7 hours ago
                                    </p>
                                </div>
                            </div> <!-- end tab item -->
                        </div> <!-- end tab panel -->
                        <div tabindex="0" role="tabpanel" aria-labelledby="following" id="following-tab" hidden>
                            <div class="tab-puchage">
                                <!-- tab item -->
                                <div class="tab-purchage-img">
                                    <a href="">
                                        <img src="<?= base_url('assets/') ?>img/avatar/6.jpg" alt="author" class="responsive-fluid" />
                                    </a>
                                </div>
                                <div class="purchage-text-link">
                                    <a class="puchage-tilte" href="#">Wane O brain <span class="purchage_spanbtn"><i class='bx bxs-user-check'></i></span></a>
                                    <p class="purchage-text">
                                        started following
                                        <a href="" class="author-link">@Max Doe</a> 4 hours ago
                                    </p>
                                    <p class="purchage-value">Total Spent : <span class="eth-counter">3.5 ETH</span></p>
                                </div>
                            </div> <!-- end tab item -->
                            <div class="tab-puchage">
                                <!-- tab item -->
                                <div class="tab-purchage-img">
                                    <a href="">
                                        <img src="<?= base_url('assets/') ?>img/avatar/5.jpg" alt="author" class="responsive-fluid" />
                                    </a>
                                </div>
                                <div class="purchage-text-link">
                                    <a class="puchage-tilte" href="#">Devid Koma <span class="purchage_spanbtn"><i class='bx bxs-user-check'></i></span></a>
                                    <p class="purchage-text">
                                        started following
                                        <a href="" class="author-link">@Jonathon Doe</a> 5 hours ago
                                    </p>
                                    <p class="purchage-value">Total Spent : <span class="eth-counter">1.5 ETH</span></p>
                                </div>
                            </div> <!-- end tab item -->
                        </div> <!-- end tab panel -->
                        <div tabindex="0" role="tabpanel" aria-labelledby="liked" id="liked-tab" hidden>
                            <div class="tab-puchage">
                                <!-- tab item -->
                                <div class="tab-purchage-img">
                                    <a href="">
                                        <img src="<?= base_url('assets/') ?>img/avatar/4.jpg" alt="author" class="responsive-fluid" />
                                    </a>
                                </div>
                                <div class="purchage-text-link">
                                    <a class="puchage-tilte" href="#">Wane O brain <span class="purchage_spanbtn"><i class='bx bx-heart'></i></span></a>
                                    <p class="purchage-text">
                                        Liked
                                        <a href="" class="author-link">3D Animation Art</a> 4 hours ago
                                    </p>
                                    <p class="purchage-value">Total Spent : <span class="eth-counter">3.5 ETH</span></p>
                                </div>
                            </div> <!-- end tab item -->
                            <div class="tab-puchage">
                                <!-- tab item -->
                                <div class="tab-purchage-img">
                                    <a href="">
                                        <img src="<?= base_url('assets/') ?>img/avatar/3.jpg" alt="author" class="responsive-fluid" />
                                    </a>
                                </div>
                                <div class="purchage-text-link">
                                    <a class="puchage-tilte" href="#">Devid Koma <span class="purchage_spanbtn"><i class='bx bx-heart'></i></span></a>
                                    <p class="purchage-text">
                                        liked
                                        <a href="" class="author-link">Digtal Art Collection V2</a> 5 hours ago
                                    </p>
                                    <p class="purchage-value">Total Spent : <span class="eth-counter">1.5 ETH</span></p>
                                </div>
                            </div> <!-- end tab item -->
                        </div> <!-- end tab panel -->
                        <div tabindex="0" role="tabpanel" aria-labelledby="bids" id="bids-tab" hidden>
                            <div class="tab-puchage">
                                <!-- tab item -->
                                <div class="tab-purchage-img">
                                    <a href="">
                                        <img src="<?= base_url('assets/') ?>img/avatar/2.jpg" alt="author" class="responsive-fluid" />
                                    </a>
                                </div>
                                <div class="purchage-text-link">
                                    <a class="puchage-tilte" href="#">Wane O brain <span class="purchage_spanbtn"><i class='bx bx-bitcoin'></i></span></a>
                                    <p class="purchage-text">
                                        Bids to
                                        <a href="" class="author-link">Virtual 3D Game Collection</a> 4 hours ago
                                    </p>
                                    <p class="purchage-value">Total Spent : <span class="eth-counter">3.5 ETH</span></p>
                                </div>
                            </div> <!-- end tab item -->
                            <div class="tab-puchage">
                                <!-- tab item -->
                                <div class="tab-purchage-img">
                                    <a href="">
                                        <img src="<?= base_url('assets/') ?>img/avatar/1.jpg" alt="author" class="responsive-fluid" />
                                    </a>
                                </div>
                                <div class="purchage-text-link">
                                    <a class="puchage-tilte" href="#">Devid Koma <span class="purchage_spanbtn"><i class='bx bx-bitcoin'></i></span></a>
                                    <p class="purchage-text">
                                        Bids to
                                        <a href="" class="author-link">Virtual 3D Game Collection</a> 5 hours ago
                                    </p>
                                    <p class="purchage-value">Total Spent : <span class="eth-counter">1.5 ETH</span></p>
                                </div>
                            </div> <!-- end tab item -->
                        </div> <!-- end tab panel -->
                    </div> <!-- end macaw tabs -->
                </div> <!-- end col- -->
               
            </div> <!-- end row -->
        </div> <!-- end container -->
    </div> <!-- End  Activity -->
</section> <!-- end tab area white -->

