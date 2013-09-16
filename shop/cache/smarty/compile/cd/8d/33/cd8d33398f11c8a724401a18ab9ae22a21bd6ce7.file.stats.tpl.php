<?php /* Smarty version Smarty-3.1.13, created on 2013-07-19 10:26:28
         compiled from "/usr/home/borndevelopments.com/web/coixi/shop/administrator/themes/default/template/controllers/stats/stats.tpl" */ ?>
<?php /*%%SmartyHeaderCode:98461749351e8f834e95ee7-32304152%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd8d33398f11c8a724401a18ab9ae22a21bd6ce7' => 
    array (
      0 => '/usr/home/borndevelopments.com/web/coixi/shop/administrator/themes/default/template/controllers/stats/stats.tpl',
      1 => 1356963554,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98461749351e8f834e95ee7-32304152',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_name' => 0,
    'module_instance' => 0,
    'hook' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51e8f834ecb270_49864304',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51e8f834ecb270_49864304')) {function content_51e8f834ecb270_49864304($_smarty_tpl) {?>

<div>
	<?php if ($_smarty_tpl->tpl_vars['module_name']->value){?>
		<?php if ($_smarty_tpl->tpl_vars['module_instance']->value&&$_smarty_tpl->tpl_vars['module_instance']->value->active){?>
			<?php echo $_smarty_tpl->tpl_vars['hook']->value;?>

		<?php }else{ ?>
			<?php echo smartyTranslate(array('s'=>'Module not found'),$_smarty_tpl);?>

		<?php }?>
	<?php }else{ ?>
		<h3 class="space"><?php echo smartyTranslate(array('s'=>'Please select a module in the left column.'),$_smarty_tpl);?>
</h3>
	<?php }?>
</div>
</div>
</div>


<?php }} ?>