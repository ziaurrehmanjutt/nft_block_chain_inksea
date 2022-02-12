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
                                        <h1>Data Table</h1>
                                    </div>
                                    <div class="ml-auto d-flex align-items-center">
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#defaultModal">Add Category</button>

                                        <!-- Default -->
                                        <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog" aria-labelledby="defaultModal" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Modal title</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form method="POST" enctype="multipart/form-data">
                                                        <div class="modal-body">


                                                            <div class="form-group">
                                                                <label for="modelemail">Category Name</label>
                                                                <input name="cate_gory_name" required type="text" class="form-control" id="modelemail">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="modelpass">Category Descriptions</label>
                                                                <textarea name="decryptions" name="" class="form-control" id=""></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="modelpass">Category Image</label>
                                                                <input id="file_image" required accept="image/*" name="file_image" type="file" class="form-control">
                                                            </div>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                            <button type="submit" name="add_category" class="btn btn-success">Save changes</button>
                                                        </div>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>

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
                                                        <th>Categories</th>
                                                        <th>Image</th>
                                                        <th>Total Associations</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                               <tbody>
                                                   <?php $i=1; foreach ($list as $key => $value) { ?>
                                                    <tr>
                                                        <th><?=$i++?></th>
                                                        <th><?=$value['cate_name']?></th>
                                                        <th><?=$value['category_descriptions']?></th>
                                                        <th> 
                                                            <img height="50px" width="50px" src="<?=base_url('uploaded/images/categories/').$value['cate_image']?>" />    
                                                        </th>
                                                      
                                                        <th>0</th>
                                                        <th>
                                                            <form method="POST">
                                                                <button value="<?=$value['rowid']?>" name="delete_category" class="btn btn-danger btn-sm">
                                                            </form>
                                                                Delete
                                                            </button>
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


              