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
							<div class="col-md-3"></div>
							<div class="col-md-3"></div>
                            <div class="col-md-3">
                                Buyer Transction
                            </div>

							<div class="col-md-3">
							<?= $detail->transaction_id1 ?>
                            </div>

							<div class="col-md-3">
                                <a href='https://etherscan.io/tx/<?= $detail->transaction_id1 ?>' class='btn btn-warning'>Verify Online</a>
                            </div>

							<div class="col-md-3">Please check you metaMak wallet</div>


							<div class="col-md-3">
                                Seller Transction
                            </div>

							<div class="col-md-3">
								<?php if($detail->transaction_id2){ 
									echo $detail->transaction_id2;
								}else{ ?>
									<button id='sendEthButton' type="">Send Transaction</button>

								<?php } ?>
                            </div>

							<div class="col-md-3">
                                <a href='https://etherscan.io/tx/<?= $detail->transaction_id1 ?>' class='btn btn-warning'>Verify Online</a>
                            </div>

							<div class="col-md-3">If you recived from Buyer, You can transgfer to Seller</div>



							<div class="col-md-3">
                                Royality Transction
                            </div>

							<div class="col-md-3">
								<?php if($detail->transaction_id2){ 
									echo $detail->transaction_id2;
								}else{ ?>
									<button id='sendEthButton' type="">Send Transaction</button>

								<?php } ?>
                            </div>

							<div class="col-md-3">
                                <a href='https://etherscan.io/tx/<?= $detail->transaction_id1 ?>' class='btn btn-warning'>Verify Online</a>
                            </div>

							<div class="col-md-3">If you recived from Buyer, You can transgfer to Seller</div>


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



<script src="<?= base_url('assets/') ?>js/bignumber/bignumber.min.js"></script>
<script>
    const sendEthButton = document.querySelector('#sendEthButton');

    let amount = BigNumber(<?=$detail->paid_price?>);  
    let eth = BigNumber('1000000000000000000') * amount;
    let tAms = '0x' + eth.toString(16)
    let mac= '';
   
    //Sending Ethereum to an address
    sendEthButton.addEventListener('click', () => {
        ethereum
            .request({
                method: 'eth_sendTransaction',
                params: [{
                    // from: mac,
                    to: '<?=$detail->meta_mask_key?>',
                    value: tAms,
                    gasPrice: '0x09184e72a000',
                    gas: '0x2710',
                }, ],
            })
            .then((txHash) => {
				console.log(txHash);
				$('#tranasction_id').val(txHash);
				$('#buy_now').submit();

				//tranasction_id
			})
            .catch((error) => {

				$('#tranasction_id').val('78hf7f7f7fhyfhvy7');
				$('#buy_now').submit();

				$('#showError').modal('show');
				$('#popup_sale').modal('hide');
				console.log('error');
				
				//
			 console.error});
    });
</script>
