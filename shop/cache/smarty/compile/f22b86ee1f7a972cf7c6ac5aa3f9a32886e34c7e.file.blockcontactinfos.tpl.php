<?php /* Smarty version Smarty-3.1.8, created on 2013-07-03 11:16:44
         compiled from "/usr/home/borndevelopments.com/web/coixi/shop/themes/default/modules/blockcontactinfos/blockcontactinfos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:71612486551d3ebfc257b77-40039527%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f22b86ee1f7a972cf7c6ac5aa3f9a32886e34c7e' => 
    array (
      0 => '/usr/home/borndevelopments.com/web/coixi/shop/themes/default/modules/blockcontactinfos/blockcontactinfos.tpl',
      1 => 1356963556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71612486551d3ebfc257b77-40039527',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blockcontactinfos_company' => 0,
    'blockcontactinfos_address' => 0,
    'blockcontactinfos_phone' => 0,
    'blockcontactinfos_email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51d3ebfc2f2a95_80713019',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d3ebfc2f2a95_80713019')) {function content_51d3ebfc2f2a95_80713019($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/usr/home/borndevelopments.com/web/coixi/shop/tools/smarty/plugins/modifier.escape.php';
if (!is_callable('smarty_function_mailto')) include '/usr/home/borndevelopments.com/web/coixi/shop/tools/smarty/plugins/function.mailto.php';
?>

<!-- MODULE Block contact infos -->
<div id="block_contact_infos">
	<p class="title_block"><?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
</p>
	<ul>
		<?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_company']->value!=''){?><li><strong><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['blockcontactinfos_company']->value, 'htmlall', 'UTF-8');?>
</strong></li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_address']->value!=''){?><li><pre><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['blockcontactinfos_address']->value, 'htmlall', 'UTF-8');?>
</pre></li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_phone']->value!=''){?><li><?php echo smartyTranslate(array('s'=>'Tel:','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
 <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['blockcontactinfos_phone']->value, 'htmlall', 'UTF-8');?>
</li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_email']->value!=''){?><li><?php echo smartyTranslate(array('s'=>'Email:','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
 <?php echo smarty_function_mailto(array('address'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['blockcontactinfos_email']->value, 'htmlall', 'UTF-8'),'encode'=>"hex"),$_smarty_tpl);?>
</li><?php }?>
	</ul>
</div>
<!-- /MODULE Block contact infos -->
<?php }} ?>