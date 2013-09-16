{** 2007-2012 PrestaShop** NOTICE OF LICENSE** This source file is subject to the Academic Free License (AFL 3.0)* that is bundled with this package in the file LICENSE.txt.* It is 
also available through the world-wide-web at this URL:* http://opensource.org/licenses/afl-3.0.php* If you did not receive a copy of the license and are unable to* obtain it through 
the world-wide-web, please send an email* to license@prestashop.com so we can send you a copy immediately.** DISCLAIMER** Do not edit or add to this file if you wish to upgrade 
PrestaShop to newer* versions in the future. If you wish to customize PrestaShop for your* needs please refer to http://www.prestashop.com for more information.**  @author PrestaShop 
SA <contact@prestashop.com>*  @copyright  2007-2012 PrestaShop SA*  @version  Release: $Revision: 7457 $*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free 
License (AFL 3.0)*  International Registered Trademark & Property of PrestaShop SA*}

{if isset($products)}	

<!-- Products list -->	

<div class="block_content">	
{assign var='liHeight' value=340}			
{assign var='nbItemsPerLine' value=3}			
{assign var='nbLi' value=$products|@count}			
{math equation="nbLi/nbItemsPerLine" nbLi=$nbLi nbItemsPerLine=$nbItemsPerLine assign=nbLines}			
{math equation="nbLines*liHeight" nbLines=$nbLines|ceil liHeight=$liHeight assign=ulHeight}		
<ul id="product_list" class="clear" style="height:100%;">
			
{foreach from=$products item=product name=products}				
<li class="ajax_block_product {if ($smarty.foreach.products.iteration-1)%($nbItemsPerLine) == 0}fist_line {/if}{if $smarty.foreach.products.first}first_item{elseif $smarty.foreach.products.last}last_item{/if} {if $smarty.foreach.products.index % 2}alternate_item{else}item{/if} clearfix">				

{if isset($product.on_sale) && $product.on_sale }<span class="on_sale">{l s='Sale'}</span>{/if}
{if isset($product.new) && $product.new == 1}<span class="new">{l s='New'}</span>{/if} 

<a href="{$product.link}" title="{$product.name|escape:html:'UTF-8'}" class="product_image"><img src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'home')}" alt="{$product.name|escape:html:'UTF-8'}" /></a>					
<div> 

<h5><a href="{$product.link}" title="{$product.name|truncate:32:'...'|escape:'htmlall':'UTF-8'}">{$product.name|truncate:22:'...'|escape:'htmlall':'UTF-8'}</a></h5>						

<a class="lnk_more" href="{$product.link}" title="{l s='View' mod='productscategory'}"></a>	

{if $product.show_price AND !isset($restricted_country_mode) AND !$PS_CATALOG_MODE}

<p class="price_container">
<span class="price">{if !$priceDisplay}{convertPrice price=$product.price}{else}{convertPrice price=$product.price_tax_exc}{/if}</span>
</p>
{else}
<div style="height:21px;"></div>
{/if}																
</div>				
</li>
{if $smarty.foreach.products.iteration%$nbItemsPerLine == 0}<div id="featured-products-separator" class="sep" style=""></div>{/if}				
{/foreach}			
</ul>		
</div>
<!-- /Products list -->
{/if}