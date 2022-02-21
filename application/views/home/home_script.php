<script>
    var base_url = '<?=base_url()?>';
    $(document).ready(function() {
        $("#report_form").submit(function(event) {

            console.log('Here');
            var formData = {
                sale_id: $("#sale_id_report").val(),
                descriptions: $("#decryptions").val(),
                post_type: 'report_nft'
            };

            $.ajax({
                type: "POST",
                // url: "process.php",
                data: formData,
                dataType: "json",
                encode: true,
            }).done(function(data) {
                console.log(data);
                $('#popup_report_success').modal('show');
                $('#popup_report').modal('hide');
            });

            event.preventDefault();
        });
    });


    $("#bid_price_required").change(function() {
        let newVal = +$(this).val();
        if (newVal > 0)
            $('#total_bid_price').html((newVal + (newVal / 100 * 20)).toFixed(10))
    });

    function doRatting(id) {
        var formData = {
            sale_id: id,
            post_type: 'do_ratting'
        };

        $.ajax({
            type: "POST",
            // url: "process.php",
            data: formData,
            dataType: "json",
            encode: true,
        }).done(function(data) {

            console.log(data)
            if (data == 'false' || data == false) {
                toastr.error('You Are Not Authorize to Do Love!!!!');
            } else {
                $('#rat-' + id).text(data);
            }
        });
    }

    function loadBids(id) {
        url = '<?= base_url('sale/biddings/') ?>' + id;
        $.ajax({
            url,
            dataType: "json",
        }).done(function(data) {
            $('#all_actives').html('');
            data.forEach(element => {
                srt = "<?= base_url('assets/') ?>img/avatar/2.jpg";
                if(element.user_image){
                    srt = "<?= base_url('assets/users/')?>".element.user_image;
                }
                let a = `<div class="avatars space-x-10">
                        <div class="media">
                            <a href="" class="btn-avatar">
                                <img src="${srt}" alt="Avatar" class="avatar avatar-md">
                                <span style="color: white;margin: -4px 10px;">${element.user_name}</span>
                            </a>
                        </div>
                        <div class="bid-accepted">
                            <p class="color_black">Bid created
                                <span class="color_brand">${element.total_amount} ETH</span> at <a class="color_black txt_bold" href="Profile.html">
                                <span class="date color_text">${element.created_at} </span>
                                </a>
                            </p>  
                        </div>
                    </div>`;
                $('#all_actives').append(a);
            });
            console.log(data)

        });

        //sale/biddings/(:num)
    }

    function oprSahre(id){
        let url = base_url + '/browse/detail/' + id;
         url = "https://www.google.com";
        $('#face_book_share').attr('href','https://www.facebook.com/sharer/sharer.php?u='+url)
        $('#linked_in_share').attr('href','https://www.linkedin.com/shareArticle?mini=true&url='+url);
        $('#twitter_share').attr('href','http://www.twitter.com/share?url='+url);
        $('#pin_sahre_button').attr('href','http://pinterest.com/pin/create/link/?url='+url);
        $('#google_sahre_button').attr('href','https://plus.google.com/share?url='+url);
    } 
</script>

