<!-- begin app-main -->
<div class="app-main" id="main">
    <!-- begin container-fluid -->
    <div class="container-fluid">
        <!-- begin row -->
        <div class="row">
            <div class="col-md-12 m-b-30">
                <!-- begin page title -->
                <div class="d-block d-sm-flex flex-nowrap align-items-center">
                    <div class="page-title mb-2 mb-sm-0">
                        <h1>User NFT Sale Detail</h1>
                    </div>
                    <div class="ml-auto d-flex align-items-center">


                    </div>
                </div>
                <!-- end page title -->
            </div>
        </div>
        <!-- end row -->
        <!-- begin row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-statistics">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <label>Name</label>
                            </div>
                            <div class="col-md-3">
                                <p><?= $detail->nft_name ?></p>
                            </div>

                            <div class="col-md-3">
                                <label>User</label>
                            </div>
                            <div class="col-md-3">
                                <p><?= $detail->user_name ?></p>
                            </div>


                            <div class="col-md-3">
                                <label>Price</label>
                            </div>
                            <div class="col-md-3">
                                <p><?= $detail->sale_price ?> ETH</p>
                            </div>

                            <div class="col-md-3">
                                <label>Total likes</label>
                            </div>
                            <div class="col-md-3">
                                <p><?= $detail->total_star ?></p>
                            </div>


                            <div class="col-md-3">
                                <label>File</label>
                            </div>
                            <div class="col-md-3">
                                <p><?= $detail->nft_file ?></p>
                            </div>

                            <div class="col-md-3">
                                <label>Category</label>
                            </div>
                            <div class="col-md-3">
                                <p><?= $detail->cate_name ?></p>
                            </div>

                            <div class="col-md-3">
                                <label>Descriptions</label>
                            </div>
                            <div class="col-md-3">
                                <p><?= $detail->nft_descriptions ?></p>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-sm btn-danger">Disable User</button>
                                <button class="btn btn-sm btn-danger">Delate This Sale</button>
                                <button class="btn btn-sm btn-danger">Delate Entire NFT</button>
                                <button class="btn btn-sm btn-warning">End This Sale Bid</button>
                            </div>
                        </div>
                        <?php

                        // echo "<pre>";
                        // print_r($detail);
                        // echo "</pre>";

                        ?>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">
                <div class="card card-statistics">
                    <div class="card-body">
                        <h2>Sale Details</h2>
                        <div>
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th>User</th>
                                        <th>Time</th>
                                        <th>Amount</th>
                                        <th>Tax</th>
                                        <th>Total</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <?php foreach ($bids  as $key => $value) { ?>
                                    <tr>
                                        <td><?= $value['user_name'] ?></td>
                                        <td><?= $value['created_at'] ?></td>
                                        <td><?= $value['bid_amount'] ?></td>
                                        <td><?= $value['bid_tax'] ?></td>
                                        <td><?= $value['total_amount'] ?></td>
                                        <td>
                                            <button class="btn btn-danger btn-sm">Delete This Bid</button>
                                        </td>
                                    </tr>
                                <?php }  ?>
                            </table>
                        </div>
                        <?php

                        // echo "<pre>";
                        // print_r($detail);
                        // echo "</pre>";

                        ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card card-statistics">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h2>Sale Likes</h2>
                                <div class="table-responsive">
                                    <table class="table table-sm">
                                        <thead>
                                            <tr>
                                                <th>User</th>
                                                <th>Time</th>
                                                <th>Like</th>

                                            </tr>
                                        </thead>
                                        <?php foreach ($rattlings  as $key => $value) { ?>
                                            <tr>
                                                <td><?= $value['user_name'] ?></td>
                                                <td><?= $value['created_at'] ?></td>
                                                <td>
                                                    <?php
                                                    if ($value['ratting_type'] == '1') echo 'Yes';
                                                    else if ($value['ratting_type'] == '0') echo 'No';

                                                    ?>
                                                </td>
                                            </tr>
                                        <?php }  ?>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h2>Sale Complains</h2>
                                <div class="table-responsive">
                                    <table class="table table-sm">
                                        <thead>
                                            <tr>
                                                <th>User</th>
                                                <th>Time</th>
                                                <th>Descriptions</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <?php foreach ($complain  as $key => $value) { ?>
                                            <tr>
                                                <td><?= $value['user_name'] ?></td>
                                                <td><?= $value['created_at'] ?></td>
                                                <td><?= $value['descriptions'] ?></td>
                                                <td>
                                                    <button class="btn btn-danger">Delete</button>
                                                </td>
                                            </tr>
                                        <?php }  ?>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <?php

                        // echo "<pre>";
                        // print_r($detail);
                        // echo "</pre>";

                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- end row -->
    </div>
    <!-- end container-fluid -->
</div>
<!-- end app-main -->