<?php /* Smarty version Smarty-3.1.13, created on 2013-07-03 12:04:51
         compiled from "/usr/home/borndevelopments.com/web/coixi/shop/admin/themes/default/template/controllers/outstanding/_print_pdf_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37156962051d3f7437a8314-63422658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '847ae0beada3cef799ec509c766e38a57a7096ae' => 
    array (
      0 => '/usr/home/borndevelopments.com/web/coixi/shop/admin/themes/default/template/controllers/outstanding/_print_pdf_icon.tpl',
      1 => 1372845673,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37156962051d3f7437a8314-63422658',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'id_invoice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d3f7437c5460_54904037',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d3f7437c5460_54904037')) {function content_51d3f7437c5460_54904037($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/usr/home/borndevelopments.com/web/coixi/shop/tools/smarty/plugins/modifier.escape.php';
?>


<span style="width:20px; margin-right:5px;">
	<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), 'htmlall', 'UTF-8');?>
&submitAction=generateInvoicePDF&id_order_invoice=<?php echo $_smarty_tpl->tpl_vars['id_invoice']->value;?>
"><img src="../img/admin/tab-invoice.gif" alt="invoice" /></a>
</span><?php }} ?>