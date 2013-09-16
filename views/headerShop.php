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
                            <a title="Su carrito de la compra" href="http://shop.elmeucoixi.com/carrito" style="border-radius: 3px 3px 3px 3px;"> </a>
                        </li>
                        <li class="your_account">
                            <a title="Su cuenta" href="http://shop.elmeucoixi.com/mi-cuenta"><?php echo $this->lang['myAccount'];?></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sf-contener clearfix">
                <ul class="sf-menu clearfix sf-js-enabled sf-shadow">
                    <li>
                        <a class="sf-with-ul" href="http://shop.elmeucoixi.com/products">
                           <?php echo $this->lang['allproducts'];?>
                            <span class="sf-sub-indicator"> »</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=URL.LANG?>/page/lookbook">Lookbook</a>
                    </li>
                    <li>
                        <a href="<?=URL.LANG?>/page/press">Press</a>
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