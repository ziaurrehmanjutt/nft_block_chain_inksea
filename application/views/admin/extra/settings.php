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
                        <h1>Admin meta Mask</h1>
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
                                <?= $settings->metamask_key ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <label> Update MetMask Wallet Address </label>
                            </div>
                            <div class="col-md-9">
                                <button id="connect_mask" class="btn btn-warning btn-sm">Update Current Wallet Address</button>
                                <small class="text-danger"> <br>
                                    Please use It carefully, All Transaction Goes to This Wallet..
                                </small>
                                <br>
                                <small class="text-danger">
                                    If This Addresses is not Valid, you can't Recover your Transitions
                                </small>
                            </div>
                        </div>

                        <form method="POST">
                        <div class="row">
                            <div class="col-md-3">
                                <label> Update </label>
                            </div>
                            <div class="col-md-3">
                                <input readonly required name="meta_mask_key" id="account_id" type="text" />
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-success">Update</button>
                            </div>

                        </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container-fluid -->
</div>
<!-- end app-main -->

<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>

<script src="<?= base_url('assets/') ?>js/bignumber/bignumber.min.js"></script>

<script>
    var accountsA = [];
    $(document).ready(function() {
        if (typeof window.ethereum !== 'undefined') {
            $('#connect_mask').show();
            console.log('MetaMask is installed!');
        } else {
            console.log('Meta mask Not install!');
            $('#install_mask').show();
        }
    });

    const ethereumButton = document.querySelector('#connect_mask');
    // const showAccount = document.querySelector('.showAccount');

    ethereumButton.addEventListener('click', () => {
        getAccount();
    });

    async function getAccount() {
        const accounts = await ethereum.request({
            method: 'eth_requestAccounts'
        });
        accountsA = accounts;
        const account = accounts[0];

        console.log('ok',account);
        $('#account_id').val(account);
    }

    function upload() {
        $.ajax({
            type: "POST",
            data: {
                wallet: 'Meta',
                walletID: account
            },
            // contentType: "application/json; charset=utf-8",
            dataType: "json",
            success: function(result) {
                // alert(2);
                window.location.reload();
                console.log(result);
            }
        });
    }
    // showAccount.innerHTML = account;
</script>