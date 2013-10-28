<div id="white_box" class="hide" style="">
<div id="whiteLogo"></div>
<p>
If you are interested in retail sales, please contact us through our email:
<a href="mailto: contact@elmeucoixi.com">contact@elmeucoixi.com</a>
</p>
<p>Or call us at +34687945007 or +34687945004 </p>
<div class="underline"></div>
<div id="footerLogo" style="margin-top: 20px;"></div>
</div>
<style>
    .coixinsHome{
        margin: auto;
    position: relative;
    margin-top: 40px;
    width: 100%;
    }
    #container{
        overflow-x: hidden;
    }
    .coixinsHome .item{
        width: 10%;
    }
    .coixinsHome .item img{
        width: 100%;
    }
    #white_box {
    background-color: #E7E7E7;
    border: 5px solid #FFFFFF;
    border-radius: 6px 6px 6px 6px;
    box-shadow: 1px 1px 5px 2px rgba(0, 0, 0, 0.2);
    color: #6D6E71;
    display: none;
    font-family: 'AvantGardeLight';
    font-size: 14px;
    height: auto;
    left: 50%;
    line-height: 150%;
    margin-left: -263px;
    margin-top: -126px;
    padding: 20px;
    position: fixed;
    text-align: left;
    top: 50%;
    width: 480px;
    z-index: 1000;
}
#white_box h2 {
    color: #4880AB;
    display: block;
    font-size: 26px;
    line-height: 126%;
    margin-left: 4px;
    padding-bottom: 3px;
    text-shadow: 1px 1px #FFFFFF;
}
#white_box .underline {
    border-bottom: 1px solid #FFFFFF;
    border-top: 1px solid #DDDDDD;
    height: 0;
    width: 100%;
}
#white_box p {
    margin-left: 4px;
    width: 85%;
}
#white_box a {
    color: #4880AB;
}
</style>
<div id="masorny" class="coixinsHome">
        <?php foreach ($this->gallery as $value) { ?>
            <div class="item">
                        <img src="<?php echo IMAGES .$value['page'] . '/' . $value['img']; ?>" alt="<?php echo $value['caption_' . LANG]; ?>">
                        <div class="tooltip_wrapper">
                            <div class="tooltip">
                                <div class="content">
                                    <?=$value['content_EN']; ?>
                                </div>
                            </div>
                        </div>
                  
            </div>
        <?php } ?>
</div>
<div class="clr"></div>