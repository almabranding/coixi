<?php
    header("Expires: Tue, 03 Jul 2001 06:00:00 GMT");
    header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
    header("Cache-Control: no-store, no-cache, must-revalidate");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>El meu coixi</title>
    <meta charset="UTF-8"> 
    <meta property="og:title" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description"content=""/>
    <meta property="og:image" content="" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minium-scale=1.0,user-scalable=no"/>
    <link rel="shortcut icon" href="../favicon.png" Content-type="image/x-icon" />
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/style.css" />
   <link rel="stylesheet" href="<?php echo URL; ?>public/css/mobile.css"/>
    <?php
    if (isset($this->css)) 
        foreach ($this->css as $css)
            echo '<link rel="stylesheet" href="'.URL.'views/'.$css.'"/>';
    ?>
    <script>
        if (screen.width <= 699) {
            document.location = "http://shop.elmeucoixi.com";
            }
    </script>
</head>
    
    