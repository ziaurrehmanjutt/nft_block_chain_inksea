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
                            <input  value="<?=$data->nft_name?>" type="text" readonly class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label  for="exampleInputEmail1">Sale Type</label>
                            <select  name="type_id" required class="form-control">
                                <option <?= set_value('type_id') == '0' ? 'selected' : ''?> value="1">Fixed Price</option>
                                <option <?= set_value('type_id') == '1' ? 'selected' : ''?> value="2">Bidding</option>
                            </select>
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Sale/Bidding Ends</label>
                            <input class="form-control" required min="<?=date('Y-m-d H:i:s')?>" name="sale_end" type="datetime-local" />
                           

                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Min Sale/Bid Price (ETH)</label>
                            <input value="<?=set_value('nft_price')?>" name="nft_price" required type="number" min="0.000000001" max="20" step="0.00000001" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                    </div>

                   

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Select Type</label>
                            <select  name="sale_type" required class="form-control">
                                <option <?= set_value('sale_type') == '1' ? 'selected' : ''?> value="1">One Time Sale One Item</option>
                                <option <?= set_value('sale_type') == '2' ? 'selected' : ''?> value="2">Can be Purchased multiple Time</option>
                                <option <?= set_value('sale_type') == '3' ? 'selected' : ''?> value="3">Completely Transfer Ownership</option>
                            </select>
                            <small id="emailHelp" class="form-text text-muted">If you Transfer Ownership, Then you Will not Buyer will be authorized it to resell</small>
                        </div>
                    </div>
                    <div class="col-12">
                        <button name="add_sale" class="btn btn-primary float-right">
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div> <!-- end row -->
    </div> <!-- end container -->
    </div> <!-- End  Activity -->
</section> <!-- end tab area white -->