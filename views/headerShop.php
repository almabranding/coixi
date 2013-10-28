<body>
<?php include_once("analyticstracking.php") ?>
<style>
    .header{
        background: #fff;
        padding: 30px 0;
        margin: 0;
    }
</style>		
<link media="all" type="text/css" rel="stylesheet" href="http://shop.elmeucoixi.com/themes/biosanyresp/css/global.css">
<link media="all" type="text/css" rel="stylesheet" href="http://shop.elmeucoixi.com/themes/biosanyresp/css/modules/blockuserinfo/blockuserinfo.css">
<link media="all" type="text/css" rel="stylesheet" href="http://shop.elmeucoixi.com/themes/biosanyresp/css/modules/blocktopmenu/css/superfish-modified.css">

    <div id="white_full" class="hide" style="" onclick="$('.hide').hide();"></div>
    <div id="header_court">
    <div id="page_header">
        <div id="header">
            <div id="header_right">
                <a id="header_logo" title="El meu coixi" href="http://elmeucoixi.com/">
                    <img class="" width="219" height="62" alt="El meu coixi" src="<?=URL?>shop/img/logo-1.jpg">
                </a>
                <div id="header_user">
                    <ul>
                        <li id="shopping_cart">
                            <a  title="Su carrito de la compra" href="http://shop.elmeucoixi.com/carrito" style="border-radius: 3px 3px 3px 3px;"> </a>
                        </li>
                        <li class="your_account">
                            <a style="color:#603813" title="Su cuenta" href="http://shop.elmeucoixi.com/mi-cuenta"><?php echo $this->lang['myAccount'];?><i></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sf-contener clearfix">
                <ul class="langFlags">
                    <li><a class="<?=(strtolower(LANG)=='ca')?'selected':''?>" href="<?= str_replace(LANG, 'CA', $_SERVER['REQUEST_URI'])?>">CA |</a></li>
                    <li><a class="<?=(strtolower(LANG)=='en')?'selected':''?>" href="<?= str_replace(LANG, 'EN', $_SERVER['REQUEST_URI'])?>">EN |</a></li>
                    <li><a class="<?=(strtolower(LANG)=='es')?'selected':''?>" href="<?= str_replace(LANG, 'ES', $_SERVER['REQUEST_URI'])?>">ES</a></li>
                </ul>
                <ul class="sf-menu clearfix sf-js-enabled sf-shadow">
                    <li>
                        <a  class="sf-with-ul" href="http://shop.elmeucoixi.com/products">
                           <?php echo $this->lang['allproducts'];?>
                            <span class="sf-sub-indicator"> »</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=URL.LANG?>/page/lookbook">Lookbook</a>
                    </li>
                    <li>
                        <a href="<?=URL.LANG?>/page/telar"><?= $this->lang['telar'];?></a>
                    </li>
                    <li>
                        <a href="<?=URL.LANG?>/page/contact"><?php echo $this->lang['about'];?></a>
                    </li>
                </ul>
                <div class="sf-right"> </div>
            </div>
        </div>
    </div>
</div>