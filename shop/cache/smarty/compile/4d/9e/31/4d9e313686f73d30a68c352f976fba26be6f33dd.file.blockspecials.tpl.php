<?php /* Smarty version Smarty-3.1.13, created on 2013-07-05 14:36:34
         compiled from "/usr/home/borndevelopments.com/web/coixi/shop/themes/biosanyresp/modules/blockspecials/blockspecials.tpl" */ ?>
<?php /*%%SmartyHeaderCode:98247757051d6bdd29e50f0-25728867%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d9e313686f73d30a68c352f976fba26be6f33dd' => 
    array (
      0 => '/usr/home/borndevelopments.com/web/coixi/shop/themes/biosanyresp/modules/blockspecials/blockspecials.tpl',
      1 => 1373026804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98247757051d6bdd29e50f0-25728867',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'special' => 0,
    'PS_CATALOG_MODE' => 0,
    'priceDisplay' => 0,
    'priceWithoutReduction_tax_excl' => 0,
    'specific_prices' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d6bdd2bd02f4_42129046',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d6bdd2bd02f4_42129046')) {function content_51d6bdd2bd02f4_42129046($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/usr/home/borndevelopments.com/web/coixi/shop/tools/smarty/plugins/modifier.escape.php';
if (!is_callable('smarty_modifier_date_format')) include '/usr/home/borndevelopments.com/web/coixi/shop/tools/smarty/plugins/modifier.date_format.php';
?>

<!-- MODULE Block specials -->

<div id="special_block_right" class="block products_block exclusive blockspecials">	

<h4><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('prices-drop');?>
" title="<?php echo smartyTranslate(array('s'=>'Specials','mod'=>'blockspecials'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Specials','mod'=>'blockspecials'),$_smarty_tpl);?>
</a></h4>	

<div class="block_content">

<?php if ($_smarty_tpl->tpl_vars['special']->value){?>		

<ul class="products clearfix">			

<li class="product_image">				
<a href="<?php echo $_smarty_tpl->tpl_vars['special']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['special']->value['link_rewrite'],$_smarty_tpl->tpl_vars['special']->value['id_image'],'list');?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['special']->value['legend'], 'html', 'UTF-8');?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['special']->value['name'], 'html', 'UTF-8');?>
" /></a>			
</li>			

<li>	
			
					

<h5><a href="<?php echo $_smarty_tpl->tpl_vars['special']->value['link'];?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['special']->value['name'], 'html', 'UTF-8');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['special']->value['name'],25,'...'), 'html', 'UTF-8');?>
</a></h5>				
<?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>					
<span class="price-discount"><?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value){?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['special']->value['price_without_reduction']),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['priceWithoutReduction_tax_excl']->value),$_smarty_tpl);?>
<?php }?></span>	
<?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>					
<?php if ($_smarty_tpl->tpl_vars['special']->value['specific_prices']){?>						
<?php $_smarty_tpl->tpl_vars['specific_prices'] = new Smarty_variable($_smarty_tpl->tpl_vars['special']->value['specific_prices'], null, 0);?>						
<?php if ($_smarty_tpl->tpl_vars['specific_prices']->value['reduction_type']=='percentage'&&($_smarty_tpl->tpl_vars['specific_prices']->value['from']==$_smarty_tpl->tpl_vars['specific_prices']->value['to']||(smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S')<=$_smarty_tpl->tpl_vars['specific_prices']->value['to']&&smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S')>=$_smarty_tpl->tpl_vars['specific_prices']->value['from']))){?>							

<span class="reduction"><span>-<?php echo $_smarty_tpl->tpl_vars['specific_prices']->value['reduction']*floatval(100);?>
%</span></span>						
<?php }?>					
<?php }?>				
<?php }?>				
<span class="price"><?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value){?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['special']->value['price']),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['special']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?></span>				
<?php }?> 


			
</li>		

</ul>		

<p>			
<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('prices-drop');?>
" title="<?php echo smartyTranslate(array('s'=>'All specials','mod'=>'blockspecials'),$_smarty_tpl);?>
" class="button_large"><?php echo smartyTranslate(array('s'=>'All specials','mod'=>'blockspecials'),$_smarty_tpl);?>
</a>		
</p>
<?php }else{ ?>		

<p><?php echo smartyTranslate(array('s'=>'No specials at this time','mod'=>'blockspecials'),$_smarty_tpl);?>
</p>
<?php }?>	

</div>
</div>

<!-- /MODULE Block specials --><?php }} ?>