<?php /* Smarty version Smarty-3.1.13, created on 2013-07-08 10:22:16
         compiled from "/usr/home/borndevelopments.com/web/coixi/shop/modules/blockcustomerprivacy/blockcustomerprivacy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:199175803951da76b8335756-91890891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '280c5098b916636bfe3104fa70b522e71aa9bf91' => 
    array (
      0 => '/usr/home/borndevelopments.com/web/coixi/shop/modules/blockcustomerprivacy/blockcustomerprivacy.tpl',
      1 => 1372845002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199175803951da76b8335756-91890891',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'privacy_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51da76b8469be7_32067147',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51da76b8469be7_32067147')) {function content_51da76b8469be7_32067147($_smarty_tpl) {?>

<div class="error_customerprivacy" style="color:red;"></div>
<fieldset class="account_creation customerprivacy">
	<h3><?php echo smartyTranslate(array('s'=>'Customer data privacy','mod'=>'blockcustomerprivacy'),$_smarty_tpl);?>
</h3>
	<p class="required">
		<input type="checkbox" value="1" id="customer_privacy" name="customer_privacy" style="float:left;margin: 15px;" />				
	</p>
	<label for="customer_privacy"><?php echo $_smarty_tpl->tpl_vars['privacy_message']->value;?>
</label>		
</fieldset><?php }} ?>