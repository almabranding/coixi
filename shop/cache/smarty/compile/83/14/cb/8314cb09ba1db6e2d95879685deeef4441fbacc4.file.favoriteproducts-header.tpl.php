<?php /* Smarty version Smarty-3.1.13, created on 2013-07-03 12:14:19
         compiled from "/usr/home/borndevelopments.com/web/coixi/shop/modules/favoriteproducts/views/templates/hook/favoriteproducts-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:110420850751d3f97b51f9e5-73371262%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8314cb09ba1db6e2d95879685deeef4441fbacc4' => 
    array (
      0 => '/usr/home/borndevelopments.com/web/coixi/shop/modules/favoriteproducts/views/templates/hook/favoriteproducts-header.tpl',
      1 => 1372845635,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110420850751d3f97b51f9e5-73371262',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d3f97b6107b4_64282903',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d3f97b6107b4_64282903')) {function content_51d3f97b6107b4_64282903($_smarty_tpl) {?>
<script type="text/javascript">
	var favorite_products_url_add = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','actions',array('process'=>'add'),false);?>
';
	var favorite_products_url_remove = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','actions',array('process'=>'remove'),false);?>
';
<?php if (isset($_GET['id_product'])){?>
	var favorite_products_id_product = '<?php echo intval($_GET['id_product']);?>
';
<?php }?> 
</script>
<?php }} ?>