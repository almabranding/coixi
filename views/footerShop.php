<footer id="" style="margin-top: 40px;">
    <div id="featured-products-separator" class="sep" style=""></div>
    <div id="footer_court">
        <div id="page_footer"> 
            <div id="footer" class="grid_9 alpha omega clearfix">
                <div id="footerLinks">
                    <ul id="">
                        <li class="order">
                            <a href="http://shop.elmeucoixi.com/mi-cuenta" title="Your Account"><?php echo $this->lang['myOrder'];?></a>
                        </li>
                        <li class="about">
                            <a href="<?=URL.LANG?>/page/contact" title="About us"><?php echo $this->lang['about'];?></a>
                        </li>
                        <li class="contact">
                            <a href="http://shop.elmeucoixi.com/contactenos" title=Contact"><?php echo $this->lang['contactUs'];?></a>
                        </li>		
                    </ul>
                </div>
                <div id="footerSocial">
                    <li class="footerFb">
                        <a target="_blank" href="https://www.facebook.com/elmeucoixi" title="Facebook El Meu Coixi"></a>
                    </li>
                    <li class="footerTw">
                        <a target="_blank" href="https://twitter.com/elmeucoixi" title="Twitter El Meu Coixi"></a>
                    </li>
                </div>
                <div id="footerPaypal">
                    <div id="iconsPaypal">
                    </div>
                </div>
                <div class="clr"></div>
                <!-- Block Newsletter module-->	

                <div id="newsletter_footer" class="navigation" > 

                    <div class="toggleSubMenu" style="text-align: left;">

                        <h4><?php echo $this->lang['newsletter'];?></h4>

                        <div class="block_content subMenu">	

                            <ul> 

                                <p class="msg_news"><?php echo $this->lang['newsletterText'];?></p>

                                <form action="http://shop.elmeucoixi.com" method="post">	

                                    <li>

                                        <input type="text" name="email" size="18" value="<?php echo $this->lang['sumail'];?>" onfocus="javascript:if (this.value == 'su email')
                                                    this.value = '';" onblur="javascript:if (this.value == '')
                                                    this.value = 'su email';" />
                                    </li>	

                                    <li>			
                                        <select name="action">					
                                            <option value="0"><?php echo $this->lang['suscribirse'];?></option>					
                                            <option value="1"><?php echo $this->lang['borrarse'];?></option>				
                                        </select>
                                    </li>

                                    <li>
                                        <input type="submit" value="<?php echo $this->lang['send'];?>" class="button_news" name="submitNewsletter" />	
                                    </li>		

                                </form>



                            </ul>  

                        </div>
                    </div>
                </div>

                <!-- /Block Newsletter module-->
            </div>
            <div id="bottom_footer">

                <ul>  
                    <li class="footer_link_stores"><a href="<?=URL?>shop" title="{l s='Our stores'}"><?php echo $this->lang['allproducts'];?></a></li>
<span></span>
<li class="footer_link_stores"><a href="<?=URL.LANG?>/page/lookbook" title="Lookbook">Lookbook</a></li>
<span></span>
<li class="footer_link_contact"><a href="<?=URL.LANG?>/page/press" title="Press">Press</a></li>	
<span></span>
<li class="footer_link_sitemap"><a href="http://shop.elmeucoixi.com/content/3-conditions" title="payment"><?php echo $this->lang['termsConditions'];?></a></li>
                <span></span>
                <li class="footer_link_sitemap"><a href="http://shop.elmeucoixi.com/content/5-payment" title="conditions"><?php echo $this->lang['payment'];?></a></li>
                    <span></span>



                </ul>
                <div style="height:200px;"></div>
                <div id="featured-products-separator" class="sep" style=""></div>
                <div id="footerCompany">
                    <div id="footerLogo">
                    </div>
                    <br>
                    <p>
                        Carrer dels Sombrerers 15, 08003 BARCELONA<br>
                        T. +34 93 177 14 59, E contact@elmeucoixi.com
                    </p>
                </div>
            </div> 		
        </div> 	

    </div>
</footer>
</div>
</div>
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="<?php echo URL; ?>public/js/custom.js"></script>
<script src="<?php echo URL; ?>public/js/mobile.js"></script>
<script src="<?php echo URL; ?>public/js/cufon-yui.js"></script>
<?php
if (isset($this->js))
    foreach ($this->js as $js)
        echo '<script type="text/javascript" src="' . URL . 'views/' . $js . '"></script>';
?>
</body>
</html>