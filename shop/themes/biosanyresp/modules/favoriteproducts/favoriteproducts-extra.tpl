{** 2007-2012 PrestaShop** NOTICE OF LICENSE** This source file is subject to the Academic Free License (AFL 3.0)* that is bundled with this package in the file LICENSE.txt.* It is 
also available through the world-wide-web at this URL:* http://opensource.org/licenses/afl-3.0.php* If you did not receive a copy of the license and are unable to* obtain it through 
the world-wide-web, please send an email* to license@prestashop.com so we can send you a copy immediately.** DISCLAIMER** Do not edit or add to this file if you wish to upgrade 
PrestaShop to newer* versions in the future. If you wish to customize PrestaShop for your* needs please refer to http://www.prestashop.com for more information.**  @author PrestaShop 
SA <contact@prestashop.com>*  @copyright  2007-2012 PrestaShop SA*  @version  Release: $Revision: 15151 $*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free 
License (AFL 3.0)*  International Registered Trademark & Property of PrestaShop SA*}

{if !$isCustomerFavoriteProduct AND $isLogged}

<li id="favoriteproducts_block_extra_add" class="add">	
<img src="{$img_dir}green_icons/favadd-black-35.png" alt="Add" title="{l s='Add this product to my favorites' mod='favoriteproducts'}" width="35" height="35" onmouseover="this.src='{$img_dir}green_icons/favadd-green-35.png';" onmouseout="this.src='{$img_dir}green_icons/favadd-black-35.png';" />
</li>

{/if}

{if $isCustomerFavoriteProduct AND $isLogged}
<li id="favoriteproducts_block_extra_remove">
<img src="{$img_dir}green_icons/favrem-black-35.png" alt="Remove" title="{l s='Remove this product from my favorites' mod='favoriteproducts'}" width="35" height="35" onmouseover="this.src='{$img_dir}green_icons/favrem-green-35.png';" onmouseout="this.src='{$img_dir}green_icons/favrem-black-35.png';" />
</li>
{/if}

<li id="favoriteproducts_block_extra_added">	
<img src="{$img_dir}green_icons/favadd-black-35.png" alt="Add" title="{l s='Add this product to my favorites' mod='favoriteproducts'}" width="35" height="35" onmouseover="this.src='{$img_dir}green_icons/favadd-green-35.png';" onmouseout="this.src='{$img_dir}green_icons/favadd-black-35.png';" />
</li>

<li id="favoriteproducts_block_extra_removed">	
<img src="{$img_dir}green_icons/favrem-black-35.png" alt="Remove" title="{l s='Remove this product from my favorites' mod='favoriteproducts'}" width="35" height="35" onmouseover="this.src='{$img_dir}green_icons/favrem-green-35.png';" onmouseout="this.src='{$img_dir}green_icons/favrem-black-35.png';" />
</li>