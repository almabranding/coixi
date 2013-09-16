<?php /* Smarty version Smarty-3.1.13, created on 2013-07-05 14:21:19
         compiled from "/usr/home/borndevelopments.com/web/coixi/shop/themes/biosanyresp/modules/blockcontactinfos/blockcontactinfos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16721719151d6ba3f1a1b33-03575152%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ed9bd5847c1e015cdb02c15d238c190764b1a3a' => 
    array (
      0 => '/usr/home/borndevelopments.com/web/coixi/shop/themes/biosanyresp/modules/blockcontactinfos/blockcontactinfos.tpl',
      1 => 1373026804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16721719151d6ba3f1a1b33-03575152',
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
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d6ba3f23c1f3_92772672',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d6ba3f23c1f3_92772672')) {function content_51d6ba3f23c1f3_92772672($_smarty_tpl) {?><?php if (!is_callable('smarty_function_mailto')) include '/usr/home/borndevelopments.com/web/coixi/shop/tools/smarty/plugins/function.mailto.php';
?>

<!-- MODULE Block contact infos -->
<div id="block_contact_infos" class="navigation">	
<div class="toggleSubMenu">	
	<span><?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
</span>	 
<div class="block_content subMenu">
	<ul>
		<?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_company']->value!=''){?><li><strong><?php echo $_smarty_tpl->tpl_vars['blockcontactinfos_company']->value;?>
</strong></li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_address']->value!=''){?><li><pre><?php echo $_smarty_tpl->tpl_vars['blockcontactinfos_address']->value;?>
</pre></li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_phone']->value!=''){?><li><?php echo smartyTranslate(array('s'=>'Tel:'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['blockcontactinfos_phone']->value;?>
</li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_email']->value!=''){?><li><?php echo smartyTranslate(array('s'=>'Email:'),$_smarty_tpl);?>
 <?php echo smarty_function_mailto(array('address'=>$_smarty_tpl->tpl_vars['blockcontactinfos_email']->value,'encode'=>"hex"),$_smarty_tpl);?>
</li><?php }?>
	</ul>
</div>
</div>
</div>
<!-- /MODULE Block contact infos --> 
<?php }} ?>