<script>


    $(document).ready(function() {
        $("#report_form").submit(function(event) {

            console.log('Here');
            var formData = {
                sale_id: $("#sale_id_report").val(),
                descriptions: $("#decryptions").val(),
                post_type : 'report_nft'
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


    $("#bid_price_required").change(function(){
        let newVal = +$(this).val();
        if(newVal > 0)
        $('#total_bid_price').html((newVal + (newVal/100 * 20)).toFixed(10))
    });

    function doRatting(id){
        var formData = {
                sale_id:id,
                post_type : 'do_ratting'
            };

            $.ajax({
                type: "POST",
                // url: "process.php",
                data: formData,
                dataType: "json",
                encode: true,
            }).done(function(data) {

                console.log(data)
                if(data == 'false' || data == false){
                    toastr.error('You Are Not Authorize to Do Love!!!!');
                }else{
                    $('#rat-'+id).text(data);
                }
            });
}
</script>
