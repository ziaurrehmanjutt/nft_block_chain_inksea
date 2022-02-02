<script src="<?= base_url('assets/') ?>js/bignumber/bignumber.min.js"></script>
<script src="https://rawgit.com/ethereum/web3.js/develop/dist/web3.js"></script>

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

        let x = new BigNumber(50000000000000000);
        console.log(x);
        console.log(x.toString(16));

        console.log('eth', window.ethereum)

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

        const balance = await ethereum.request({
            method: 'eth_getBalance',
            params: [
                account,
                'latest'
            ]
        });
        let etbb = parseInt(balance, 16);
        console.log('ok', balance/50000000000000000);
        //
        // web3.eth.getBalance(account, (err, balance) => {
        //     console.log('ok', balance);
        // });

        // web3.eth.getBalance(account)
        //     .then(x => {
        //         console.log('ok', x);
        //     });

        console.log(accounts);
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
        // showAccount.innerHTML = account;
    }
</script>

<script>
    const sendEthButton = document.querySelector('#sendEthButton');


    let amount = BigNumber(0.03);
    let eth = BigNumber('1000000000000000000') * amount;
    let tAms = '0x' + eth.toString(16)

    //Sending Ethereum to an address
    sendEthButton.addEventListener('click', () => {
        ethereum
            .request({
                method: 'eth_sendTransaction',
                params: [{
                    from: accountsA[0],
                    to: '0x2f318C334780961FB129D2a6c30D0763d9a5C970',
                    value: tAms,
                    gasPrice: '0x09184e72a000',
                    gas: '0x2710',
                }, ],
            })
            .then((txHash) => console.log(txHash))
            .catch((error) => console.error);
    });
</script>