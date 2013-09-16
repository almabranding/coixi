<?php /* Smarty version Smarty-3.1.13, created on 2013-07-25 19:02:09
         compiled from "/usr/home/borndevelopments.com/web/coixi/shop/themes/biosanyresp/manufacturer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17477614651f15a1191b2a9-56459160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79045f7e23b7e34edb26aae115260a45aca473b5' => 
    array (
      0 => '/usr/home/borndevelopments.com/web/coixi/shop/themes/biosanyresp/manufacturer.tpl',
      1 => 1373026804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17477614651f15a1191b2a9-56459160',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'manufacturer' => 0,
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51f15a11b568e0_98361327',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f15a11b568e0_98361327')) {function content_51f15a11b568e0_98361327($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/usr/home/borndevelopments.com/web/coixi/shop/tools/smarty/plugins/modifier.escape.php';
?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php if (!isset($_smarty_tpl->tpl_vars['errors']->value)||!sizeof($_smarty_tpl->tpl_vars['errors']->value)){?>	

<h1><?php echo smartyTranslate(array('s'=>'List of products by manufacturer'),$_smarty_tpl);?>
&nbsp;<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['manufacturer']->value->name, 'htmlall', 'UTF-8');?>
</h1>	

<?php if (!empty($_smarty_tpl->tpl_vars['manufacturer']->value->description)||!empty($_smarty_tpl->tpl_vars['manufacturer']->value->short_description)){?>		

<div class="description_box">
<?php if (!empty($_smarty_tpl->tpl_vars['manufacturer']->value->short_description)){?>				
<p><?php echo $_smarty_tpl->tpl_vars['manufacturer']->value->short_description;?>
</p>
<p class="hide_desc"><?php echo $_smarty_tpl->tpl_vars['manufacturer']->value->description;?>
</p>				
<a href="#" class="lnk_more" onclick="$(this).prev().slideDown('slow'); $(this).hide(); return false;"></a>			
<?php }else{ ?>
<p><?php echo $_smarty_tpl->tpl_vars['manufacturer']->value->description;?>
</p>			
<?php }?>		
</div>	
<?php }?>	

<?php if ($_smarty_tpl->tpl_vars['products']->value){?>		

<div class="sortPagiBar clearfix">			
<?php echo $_smarty_tpl->getSubTemplate ("./product-sort.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
		
</div>		

<?php echo $_smarty_tpl->getSubTemplate ("./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['products']->value), 0);?>
		
<?php echo $_smarty_tpl->getSubTemplate ("./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
	
<?php }else{ ?>		
<p class="warning"><?php echo smartyTranslate(array('s'=>'No products for this manufacturer.'),$_smarty_tpl);?>
</p>	

<?php }?>
<?php }?><?php }} ?>