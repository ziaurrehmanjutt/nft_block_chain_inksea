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
                                                        <th>Type</th>
                                                        <th>Price</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                               <tbody>
                                                   <?php $i=1; foreach ($list as $key => $value) { ?>
                                                    <tr>
                                                        <th><?=$i++?></th>
                                                        <th><?=$value['user_name']?></th>
                                                        <th><?=$value['nft_name']?></th>
                                                        <th><?=$value['nft_name']?></th>
                                                        <th> <?= $value['type_id'] == '1' ? 'Image' : 'Video'  ?></th>
                                                        <th><?=$value['nft_price']?> ETH</th>
                                                       
                                                      
                                                       
                                                        <th>
                                                            <form method="POST">
                                                                <button value="<?=$value['rowid']?>" name="approve" class="btn btn-success btn-sm">
                                                                    Approve
                                                                </button>
                                                                <button value="<?=$value['rowid']?>" name="delete_nft" class="btn btn-danger btn-sm">
                                                                    Delete
                                                                </button>
                                                            </form>
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


              