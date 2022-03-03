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
                        <h1>NFT Waiting Approval</h1>
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
                        <div class="datatable-wrapper table-responsive">
                            <table id="datatable" class="display table-sm compact table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>SR#</th>
                                        <th>User</th>
                                        <th>Name</th>
                                        <th>Categories</th>
                                        <th>Expire</th>
                                        <th>Price</th>
                                        <th>Likes</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($list as $key => $value) { ?>
                                        <tr>
                                            <th><?= $i++ ?></th>
                                            <th><?= $value['user_name'] ?></th>
                                            <th><?= $value['nft_name'] ?></th>
                                            <th><?= $value['cate_name'] ?></th>
                                            <th><?= $value['expire_at'] ?></th>

                                            <th><?= $value['sale_price'] ?> ETH</th>
                                            <th><?= $value['total_star'] ?></th>



                                            <th>
                                                <a class="btn btn-success btn-sm" href="<?= base_url('admin/sale/waiting/') . $value['rowid'] ?>">Detail</a>

                                            </th>
                                        </tr>
                                    <?php }  ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container-fluid -->
</div>
<!-- end app-main -->
