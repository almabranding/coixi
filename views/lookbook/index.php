<div style="margin-top:50px;">
    <ul id="lookbook">
        <?php foreach ($this->gallery as $value) { ?>
            <li>
                <a style="position:relative;">
                   <?php  if(!$value['video']){ ?>
                   <span class="image_media">
                            <span class="google" data-href="https://plus.google.com/share?url=<?php echo IMAGES . $value['page'] . '/' . $value['img']; ?>" target="_blank" rel="nofollow">
                                <i class="icon-google-plus"></i>
                            </span>
                            <span class="twitter" data-href="http://twitter.com/intent/tweet?text=ElMeuCoixi&url=<?php echo IMAGES . $value['page'] . '/' . $value['img']; ?>" target="_blank" rel="nofollow">
                                <i class="icon-twitter"></i>
                            </span>
                            <span class="pinterest" data-href="http://pinterest.com/pin/create/button/?url=<?php echo IMAGES . $value['page'] . '/' . $value['img']; ?>&media=<?php echo IMAGES . $value['page'] . '/' . $value['img']; ?>&description=APRODUCTIONS" target="_blank" rel="nofollow">
                                <i class="icon-pinterest"></i>
                            </span>
                            <span class="facebook" data-href="http://www.facebook.com/sharer/sharer.php?u=<?php echo IMAGES . $value['page'] . '/' . $value['img']; ?>" target="_blank" rel="nofollow">
                                <i class="icon-facebook"></i>
                            </span>
                        </span>
                    <img src="<?php echo IMAGES . $value['page'] . '/' . $value['img']; ?>" alt="<?php echo $value['caption_' . LANG]; ?>">
                    <?php }else{ ?>
                    <?php echo $value['vimeo']; ?>
                    <?php }?>
                </a>
                <?php echo $value['content_' . LANG]; ?>
            </li>
        <?php } ?>
    </ul>
</div>
<div class="clr"></div>