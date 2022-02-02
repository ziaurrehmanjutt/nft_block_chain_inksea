</div>
<!-- end app-wrap -->
</div>
<!-- end app -->

<!-- plugins -->
<script src="<?= base_url('assets/admin/') ?>assets/js/vendors.js"></script>

<!-- custom app -->
<script src="<?= base_url('assets/admin/') ?>assets/js/app.js"></script>
</body>


<script>
    <?php 
        if(isset($_SESSION['user_status_info']) && $_SESSION['user_status_info']){
            echo "toastr.info('{$_SESSION['user_status_info']}');";
            unset($_SESSION['user_status_info']);
        }
    ?>
   
</script>

</html>