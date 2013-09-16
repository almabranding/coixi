{** 2007-2012 PrestaShop** NOTICE OF LICENSE** This source file is subject to the Academic Free License (AFL 3.0)* that is bundled with this package in the file LICENSE.txt.* It is 
also available through the world-wide-web at this URL:* http://opensource.org/licenses/afl-3.0.php* If you did not receive a copy of the license and are unable to* obtain it through 
the world-wide-web, please send an email* to license@prestashop.com so we can send you a copy immediately.** DISCLAIMER** Do not edit or add to this file if you wish to upgrade 
PrestaShop to newer* versions in the future. If you wish to customize PrestaShop for your* needs please refer to http://www.prestashop.com for more information.**  @author PrestaShop 
SA <contact@prestashop.com>*  @copyright  2007-2012 PrestaShop SA*  @version  Release: $Revision: 14008 $*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free 
License (AFL 3.0)*  International Registered Trademark & Property of PrestaShop SA*}


{include file="$tpl_dir./errors.tpl"}
{if isset($category)}	
{if $category->id AND $category->active}	
{if $scenes}			
<!-- Scenes -->			
{include file="$tpl_dir./scenes.tpl" scenes=$scenes}		
{else}			

<!-- Category image -->		
<ul class="categoryList">
    <li class="{if $category->id==$coixi->id}visited{/if}">
        <a href="{Context::getContext()->link->getCategoryLink($coixi->id)}"><div class="categoryIco coixiIco">
        </div>
        <div class="categoryNumber">
            {$coixiN} {$coixi->name}
        </div>
        </a>
    </li>
     <li class="{if $category->id==$mantas->id}visited{/if}">
        <a href="{Context::getContext()->link->getCategoryLink($mantas->id)}"><div class="categoryIco mantasIco ">
        </div>
        <div class="categoryNumber">
            {$mantasN} {$mantas->name}
        </div>
        </a>
    </li>
     <li class="{if $category->id==$puffs->id}visited{/if}">
        <a href="{Context::getContext()->link->getCategoryLink($puffs->id)}"><div class="categoryIco puffsIco ">
        </div>
        <div class="categoryNumber">
            {$puffsN} {$puffs->name}
        </div>
        </a>
    </li>
</ul>		
{/if}		
{if $category->description}			
<div class="cat_desc">{$category->description}</div>		
{/if}		
{if isset($subcategories)}		

<!-- Subcategories -->		

<div id="subcategories">			
<h3>{l s='Subcategories'}</h3>			
<ul class="inline_list">			
{foreach from=$subcategories item=subcategory}				
<li>					
<a href="{$link->getCategoryLink($subcategory.id_category, $subcategory.link_rewrite)|escape:'htmlall':'UTF-8'}" title="{$subcategory.name|escape:'htmlall':'UTF-8'}">						
{if $subcategory.id_image}							
<img src="{$link->getCatImageLink($subcategory.link_rewrite, $subcategory.id_image, 'medium')}" alt="" width="{$mediumSize.width}" height="{$mediumSize.height}" />						
{else}							
<img src="{$img_cat_dir}default-medium.jpg" alt="" width="{$mediumSize.width}" height="{$mediumSize.height}" />						
{/if}					
</a>
				
<a href="{$link->getCategoryLink($subcategory.id_category, $subcategory.link_rewrite)|escape:'htmlall':'UTF-8'}">{$subcategory.name|escape:'htmlall':'UTF-8'}</a>				
</li>			
{/foreach}			
</ul>			
<br class="clear"/>		
</div>		

{/if}		
{if $products}				
{include file="$tpl_dir./product-compare.tpl"}				
{include file="$tpl_dir./product-sort.tpl"}				
{include file="$tpl_dir./product-list.tpl" products=$products}				
{include file="$tpl_dir./product-compare.tpl"}				
{include file="$tpl_dir./pagination.tpl"}			
{elseif !isset($subcategories)}				
<p class="warning">{l s='There are no products in this category.'}</p>			
{/if}	
{elseif $category->id}		
<p class="warning">{l s='This category is currently unavailable.'}</p>	
{/if}{/if}