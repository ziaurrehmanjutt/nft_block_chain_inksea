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
                                        <div class="datatable-wrapper table-responsive">
                                            <table id="datatable" class="display table-sm compact table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>SR#</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Image</th>
                                                        <th>Type</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i = 1;
                                                    $type = array('1' => 'User', '2' => 'Employee');;
                                                    $status = array('1' => 'Active', '2' => 'Suspend');;
                                                    foreach ($list as $key => $value) { ?>
                                                        <tr>
                                                            <th><?= $i++ ?></th>
                                                            <th><?= $value['user_name'] ?></th>
                                                            <th><?= $value['user_email'] ?></th>
                                                            <th>
                                                                <img height="50px" width="50px" src="<?= base_url('uploaded/images/categories/') . $value['user_image'] ?>" / />
                                                            </th>

                                                            <th>
                                                                <?= $type[$value['user_type']] ?>
                                                            </th>

                                                            <td>
                                                                <?php
                                                                if ($value['user_status'] == '1')
                                                                    echo '<span class="mr-2 mb-2 mr-sm-0 mb-sm-0 badge badge-success">Active</span>';
                                                                else if ($value['user_status'] == '2')
                                                                    echo '<span class="mr-2 mb-2 mr-sm-0 mb-sm-0 badge badge-danger">Suspend</span>';


                                                                ?>
                                                            </td>
                                                            <th>
                                                                <form method="POST">
                                                                    <input type="hidden" name="user_id" value="<?=$value['rowid']?>" />
                                                                    <?php
                                                                    if ($value['user_status'] == '1') {
                                                                        echo '<button value="2" name="user_status" class="btn btn-danger btn-sm">Suspend</button>';
                                                                    } else if ($value['user_status'] == '2')
                                                                        echo '<button value="1" name="user_status" class="btn btn-success btn-sm">Active</button>';
                                                                    ?>

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