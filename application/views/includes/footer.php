</div>
<br>    
    <?php
        if(isset($angular_js_view) && !empty($angular_js_view))
        {
            $this->load->view($angular_js_view);
        }
    ?>
    <br/><br/><br/><br/><br/><br/><br/>
    <footer>
            <h5>All Rights Reserved, &copy; 2015 - <?php echo date('Y');?></h5>
    </footer>

</body>
</html>