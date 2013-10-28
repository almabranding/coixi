<body>
    <?php include_once("analyticstracking.php") ?>
    <div id="white_full" class="hide" style="" onclick="$('.hide').hide();"></div>

    <div id="wrapper">
        <?php Session::init(); ?>
        <header class="header">
            <a href="http://elmeucoixi.com">
                <div class="logo"><img src="<?= URL ?>public/images/logoWhite.png"></div>
            </a>
            <ul class="Hmenu clearfix sf-js-enabled sf-shadow">
                <li>
                    <a href="http://shop.elmeucoixi.com/products">All products</a>
                </li>
                <li>
                    <a href="http://elmeucoixi.com/EN/page/lookbook">Lookbook</a>
                </li>
                <li>
                    <a href="<?= URL . LANG ?>/page/telar"><?= $this->lang['telar']; ?></a>
                </li>
                <li>
                    <a href="http://elmeucoixi.com/EN/page/contact">About us</a>
                </li>
            </ul>
            <nav class="menu">
                <ul>
                    <li>
                        <a href="https://www.facebook.com/elmeucoixi" target="_blank"><div class="socialIco" id="fb"></div></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/elmeucoixi" target="_blank"><div class="socialIco" id="tw"></div></a>
                    </li>
                    <li>
                        <a href="mailto: contact@elmeucoixi.com"><div class="socialIco" id="hi"></div></a>
                    </li>
                </ul>
            </nav>
            <nav id="access" class="menu">
                <ul>
                    <li>
                        <a href="http://shop.elmeucoixi.com/gb/">Language</a>
                        <ul>
                            <li>
                                <a href="http://shop.elmeucoixi.com/gb/">English</a>
                            </li>
                            <li>
                                <a href="http://shop.elmeucoixi.com/ca/">Català</a>
                            </li>
                            <li>
                                <a href="http://shop.elmeucoixi.com/es/">Español</a>
                            </li>
                        </ul>

                    </li>

                </ul>
            </nav>
        </header>
        <div id="container">

