<?php /* Smarty version Smarty-3.1.13, created on 2013-07-03 12:14:20
         compiled from "/usr/home/borndevelopments.com/web/coixi/shop/modules/blockadvertising/blockadvertising.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25095927851d3f97c0c43f1-04154302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57f60dc089e5afedc75143b3e8c849a74cdb7033' => 
    array (
      0 => '/usr/home/borndevelopments.com/web/coixi/shop/modules/blockadvertising/blockadvertising.tpl',
      1 => 1372844992,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25095927851d3f97c0c43f1-04154302',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'adv_link' => 0,
    'adv_title' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d3f97c0e4098_34356701',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d3f97c0e4098_34356701')) {function content_51d3f97c0e4098_34356701($_smarty_tpl) {?>

<!-- MODULE Block advertising -->
<div class="advertising_block">
	<a href="<?php echo $_smarty_tpl->tpl_vars['adv_link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" width="155"  height="163" /></a>
</div>
<!-- /MODULE Block advertising -->
<?php }} ?>