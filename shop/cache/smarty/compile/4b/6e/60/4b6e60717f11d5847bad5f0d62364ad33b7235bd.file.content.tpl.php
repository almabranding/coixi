<?php /* Smarty version Smarty-3.1.13, created on 2013-07-05 14:41:08
         compiled from "/usr/home/borndevelopments.com/web/coixi/shop/administrator/themes/default/template/controllers/cms_content/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:152912709551d6bee4deaa51-18925993%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b6e60717f11d5847bad5f0d62364ad33b7235bd' => 
    array (
      0 => '/usr/home/borndevelopments.com/web/coixi/shop/administrator/themes/default/template/controllers/cms_content/content.tpl',
      1 => 1356963554,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152912709551d6bee4deaa51-18925993',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cms_breadcrumb' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d6bee4ea4d47_26328165',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d6bee4ea4d47_26328165')) {function content_51d6bee4ea4d47_26328165($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['cms_breadcrumb']->value)){?>
	<div class="cat_bar">
		<span style="color: #3C8534;"><?php echo smartyTranslate(array('s'=>'Current category'),$_smarty_tpl);?>
 :</span>&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['cms_breadcrumb']->value;?>

	</div>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }} ?>