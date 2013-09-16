{** 2007-2012 PrestaShop** NOTICE OF LICENSE** This source file is subject to the Academic Free License (AFL 3.0)* that is bundled with this package in the file LICENSE.txt.* It is 
also available through the world-wide-web at this URL:* http://opensource.org/licenses/afl-3.0.php* If you did not receive a copy of the license and are unable to* obtain it through 
the world-wide-web, please send an email* to license@prestashop.com so we can send you a copy immediately.** DISCLAIMER** Do not edit or add to this file if you wish to upgrade 
PrestaShop to newer* versions in the future. If you wish to customize PrestaShop for your* needs please refer to http://www.prestashop.com for more information.**  @author PrestaShop 
SA <contact@prestashop.com>*  @copyright  2007-2012 PrestaShop SA*  @version  Release: $Revision: 6594 $*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License 
(AFL 3.0)*  International Registered Trademark & Property of PrestaShop SA*}

<!-- Block user information module HEADER -->

<div id="header_user"> 

<p class="userinfo">		
{l s='Welcome' mod='blockuserinfo'}		
{if $logged}			
<a href="{$link->getPageLink('my-account', true)}" class="account"><span>{$cookie->customer_firstname} {$cookie->customer_lastname}</span></a>			
<a href="{$link->getPageLink('index', true, NULL, "mylogout")}" title="{l s='Log me out' mod='blockuserinfo'}" class="logout">{l s='Log out' mod='blockuserinfo'}</a>		
{else}			
<a href="{$link->getPageLink('my-account', true)}" class="login">{l s='Log in' mod='blockuserinfo'}</a>		
{/if}	
</p>

<ul>	
	
{if !$PS_CATALOG_MODE}		

<li id="shopping_cart">			
<a href="{$link->getPageLink("$order_process", true)}" title="{l s='Your Shopping Cart' mod='blockuserinfo'}">&nbsp;</a>		
</li>		

{/if}			

<li class="your_account">
<a href="{$link->getPageLink('my-account', true)}" title="{l s='Your Account' mod='blockuserinfo'}">My account</a>
</li>

</ul>	



</div>

<!-- /Block user information module HEADER -->