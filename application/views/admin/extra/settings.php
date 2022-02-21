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
                                        <h1>All Users List</h1>
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
                                                 <label> MetaMask key </label>
                                            </div>
                                            <div class="col-md-3">
                                                <?=$settings->metamask_key?>
                                            </div>
                                       </div>

                                       <div class="row">
                                            <div class="col-md-3">
                                                 <label> Update MetMask Wallet Address </label>
                                            </div>
                                            <div class="col-md-3">
                                                <button class="btn btn-warning btn-sm">Update Current Wallet Address</button>
                                                <small class="text-danger">
                                                    Please use It carefully, All Transaction Goes to This Wallet..
                                                </small>
                                            <br>
                                                <small class="text-danger">
                                                    If This Addresses is not Valid, you can't Recover your Transitions
                                                </small>
                                            </div>
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