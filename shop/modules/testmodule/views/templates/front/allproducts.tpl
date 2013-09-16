
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
{if isset($products)}
    {include file="$tpl_dir./product-list.tpl" products=$products}
    
    <!-- /Products list -->
{/if}