<footer>
    <nav class=""></nav>
</footer>
</div>
</div>
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="<?php echo URL;?>public/js/custom.js"></script>
    <script src="<?php echo URL;?>public/js/mobile.js"></script>
    <script src="<?php echo URL;?>public/js/cufon-yui.js"></script>
    <script>
   /* $(document).ready(function() {
        if (screen.width >= 800) {
        $('#white_box').removeClass().addClass('hide');
        $('#white_full').show();
        $('#white_box').fadeIn('slow'); 
        return false;
        }
    });*/
    </script>
<?php
    if (isset($this->js)) 
        foreach ($this->js as $js)
            echo '<script type="text/javascript" src="'.URL.'views/'.$js.'"></script>';
?>
</body>
</html> 