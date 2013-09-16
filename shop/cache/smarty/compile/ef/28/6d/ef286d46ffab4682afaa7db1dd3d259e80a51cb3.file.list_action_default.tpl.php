<?php /* Smarty version Smarty-3.1.13, created on 2013-07-19 09:40:44
         compiled from "/usr/home/borndevelopments.com/web/coixi/shop/administrator/themes/default/template/helpers/list/list_action_default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28207251951e8ed7cca79e6-26263847%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef286d46ffab4682afaa7db1dd3d259e80a51cb3' => 
    array (
      0 => '/usr/home/borndevelopments.com/web/coixi/shop/administrator/themes/default/template/helpers/list/list_action_default.tpl',
      1 => 1356963556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28207251951e8ed7cca79e6-26263847',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51e8ed7cd45c41_59509959',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51e8ed7cd45c41_59509959')) {function content_51e8ed7cd45c41_59509959($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="default" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['name']->value)){?>name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"<?php }?>>
	<img src="../img/admin/asterisk.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>