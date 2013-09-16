{** 2007-2012 PrestaShop** NOTICE OF LICENSE** This source file is subject to the Academic Free License (AFL 3.0)* that is bundled with this package in the file LICENSE.txt.* It is 
also available through the world-wide-web at this URL:* http://opensource.org/licenses/afl-3.0.php* If you did not receive a copy of the license and are unable to* obtain it through 
the world-wide-web, please send an email* to license@prestashop.com so we can send you a copy immediately.** DISCLAIMER** Do not edit or add to this file if you wish to upgrade 
PrestaShop to newer* versions in the future. If you wish to customize PrestaShop for your* needs please refer to http://www.prestashop.com for more information.**  @author PrestaShop 
SA <contact@prestashop.com>*  @copyright  2007-2012 PrestaShop SA*  @version  Release: $Revision: 6594 $*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free 
License (AFL 3.0)*  International Registered Trademark & Property of PrestaShop SA*}		
<div id="featured-products-separator" class="sep" style=""></div>
{if !$content_only}		

</div>

<!-- Right -->				

<div id="right_column" class="column grid_2 omega">					
    {$HOOK_RIGHT_COLUMN}				
</div>			
</div>

</div>

<!-- Footer -->	

<div id="footer_court">
    <div id="page_footer"> 
        <div id="footer" class="grid_9 alpha omega clearfix">
            <div id="footerLinks">
                <ul id="">
                    <li class="order">
                        <a href="{$link->getPageLink('my-account', true)}" title="{l s='Your Account' mod='blockuserinfo'}">My Order</a>
                    </li>
                    <li class="about">
                        <a href="http://elmeucoixi.com/page/contact" title="{l s='about' mod='blockuserinfo'}">About us</a>
                    </li>
                    <li class="contact">
                        <a href="{$link->getPageLink('contact', true)}" title="{l s='contact'}">Contact us</a>
                    </li>		
                </ul>
            </div>
            <div id="footerSocial">
                <li class="footerFb">
                    <a target="_blank"  href="https://www.facebook.com/elmeucoixi" title="Facebook El Meu Coixi"></a>
                </li>
                <li class="footerTw">
                    <a target="_blank"  href="https://twitter.com/elmeucoixi" title="Twitter El Meu Coixi"></a>
                </li>
            </div>
            <div id="footerPaypal">
                <div id="iconsPaypal">
                </div>
            </div>
                    <div class="clr"></div>
            {$HOOK_FOOTER}</div>
        <div id="bottom_footer">

            <ul>  
                <li class="footer_link_stores"><a href="/products" title="{l s='Our stores'}">All Products</a></li>
                <span></span>
                <li class="footer_link_stores"><a href="http://elmeucoixi.com/page/lookbook" title="Lookbook">Lookbook</a></li>
                <span></span>
                <li class="footer_link_contact"><a href="http://elmeucoixi.com/page/press" title="Press">Press</a></li>	
                <span></span>
                <li class="footer_link_sitemap"><a href="/content/3-conditions" title="payment">Terms and Conditions</a></li>
                <span></span>
                <li class="footer_link_sitemap"><a href="/content/5-payment" title="conditions">Payment and shipping</a></li>
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

{/if}	

</body>
</html>