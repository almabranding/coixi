<?php /* Smarty version Smarty-3.1.8, created on 2013-07-03 11:16:43
         compiled from "/usr/home/borndevelopments.com/web/coixi/shop/modules/blockreinsurance/blockreinsurance.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116268460651d3ebfbde3f66-05648817%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9b52dccba3fdf1674c96a9db6d5298bef52344d' => 
    array (
      0 => '/usr/home/borndevelopments.com/web/coixi/shop/modules/blockreinsurance/blockreinsurance.tpl',
      1 => 1356963556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116268460651d3ebfbde3f66-05648817',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'infos' => 0,
    'nbblocks' => 0,
    'module_dir' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51d3ebfbe444c1_57424174',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d3ebfbe444c1_57424174')) {function content_51d3ebfbe444c1_57424174($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/usr/home/borndevelopments.com/web/coixi/shop/tools/smarty/plugins/modifier.escape.php';
?>
<?php if (count($_smarty_tpl->tpl_vars['infos']->value)>0){?>
<!-- MODULE Block reinsurance -->
<div id="reinsurance_block" class="clearfix">
	<ul class="width<?php echo $_smarty_tpl->tpl_vars['nbblocks']->value;?>
">	
		<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['infos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
			<li><img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
img/<?php echo $_smarty_tpl->tpl_vars['info']->value['file_name'];?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['text'], 'html', 'UTF-8');?>
" /> <span><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['text'], 'html', 'UTF-8');?>
</span></li>
		<?php } ?>
	</ul>
</div>
<!-- /MODULE Block reinsurance -->
<?php }?><?php }} ?>