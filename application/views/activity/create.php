<section class="tab-area-white">
    <div class="activity-area pb-100" id="activity">
        <!-- start activity -->

        <style>
            #form_x label {
                color: #03a9f4;
            }

            .nice-select {
                width: 100%;
                padding: 4px 10px 0px 10px;
            }
            .alert p{
                color: #721c24 !important;
                margin-bottom: 2px !important;
            }
        </style>
        <div class="container">
            <div class="row" style="margin-top: 100px;">

            </div>
            <form id="form_x" method="POST" enctype="multipart/form-data">
                <h3>Add New NFT</h3>

                <br>
                <?php if(isset($_SESSION['error_info'])): ?>
                <div class="alert alert-danger" role="alert">
                    <?=$_SESSION['error_info']?>
                </div>
                <?php unset($_SESSION['error_info']); endif;  ?>

                <?php if(validation_errors()): ?>
                <div class="alert alert-danger" role="alert">
                    <?=validation_errors()?>
                </div>
                <?php  endif;  ?>

                
                <div class="row items">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">NFT Name</label>
                            <input name="nft_name" value="<?=set_value('nft_name')?>" type="text" required minlength="3" maxlength="100" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">Name of NFT.</small>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label  for="exampleInputEmail1">NFT Type</label>
                            <select  name="type_id" required class="form-control">
                                <option <?= set_value('nft_price') == '1' ? 'selected' : ''?> value="1">Image</option>
                                <!-- <option <?= set_value('nft_price') == '2' ? 'selected' : ''?> value="2">Video</option> -->
                            </select>
                            <small id="emailHelp" class="form-text text-muted">Currently WE Just Accpet Image.</small>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">NFT Category</label>
                            <select name="nft_category" required class="form-control">
                                <?php foreach ($data as $key => $value) { ?>
                                    <option <?= set_value('nft_category') == $value['rowid'] ? 'selected' : ''?> value="<?= $value['rowid'] ?>"> <?= $value['cate_name'] ?> </option>
                                <?php } ?>
                            </select>

                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">NFT Initial Price (ETH)</label>
                            <input value="<?=set_value('nft_price')?>" name="nft_price" required type="number" min="0.000001" max="20" step="0.000001" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">Please Enter Initial Single Unit Pice.</small>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Detail Description</label>
                            <textarea name="nft_descriptions" required class="form-control"><?=set_value('nft_descriptions')?></textarea>
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Select File</label>
                            <input name="select_file" required type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">Please select JPG/PNG Image file Onlye.</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Number of Units</label>
                            <input type="number" name="total_count" required class="form-control" value="<?=set_value('total_count') ? set_value('total_count') : 1 ?>" />
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                    </div>

                    <div class="col-12">
						<?php  if($_SESSION['login'] && $_SESSION['login']->meta_mask_key):  ?>

							<button name="save_nft" class="btn btn-primary float-right">
                            Create NFT
                        </button>
                        <small id="emailHelp" class="form-text text-muted">After Create and Approve, You can put it on Sale.</small>

						<?php  else:  ?>
							<small id="emailHelp" class="form-text text-muted">Please Connect Wallet Before Upload.</small>
						<?php  endif;  ?>
                       
                    </div>
                </div>
            </form>
        </div> <!-- end row -->
    </div> <!-- end container -->
    </div> <!-- End  Activity -->
</section> <!-- end tab area white -->
