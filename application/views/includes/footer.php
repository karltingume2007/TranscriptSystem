</div>
<br>
    
    
    <script type="text/javascript" src="<?php echo base_url('resources/js/angular.min.js');?>">
    </script>
    
    <?php
        if(isset($angular_js_view) && !empty($angular_js_view))
        {
            $this->load->view($angular_js_view);
        }
    ?>
    
    <footer>
            <h5>All Rights Reserved, &copy; 2015 - <?php echo date('Y');?></h5>
    </footer>

    <!-- === End of footer ==== -->



    <!-- End of plugin for animation -->
    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
</body>
</html>