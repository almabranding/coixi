<div class="coixinsHome">
    <ul>
        <?php foreach ($this->gallery as $value) { ?>
            <li>
                <a href="<?php echo $value['link']; ?>">
                    <div class="coixiHome">
                        <img src="<?php echo IMAGES .$value['page'] . '/' . $value['img']; ?>" alt="<?php echo $value['caption_' . LANG]; ?>">
                        <div class="tooltip_wrapper">
                            <div class="tooltip">
                                <div class="content">
                                    <?php echo $value['content_' . LANG]; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
        <?php } ?>
    </ul>
</div>