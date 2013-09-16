<?php /* Smarty version Smarty-3.1.13, created on 2013-07-05 14:21:17
         compiled from "/usr/home/borndevelopments.com/web/coixi/shop/themes/biosanyresp/modules/favoriteproducts/favoriteproducts-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:178170754951d6ba3dbb5e47-51750519%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf11270d0b6976e9685856e28c19d1add780d418' => 
    array (
      0 => '/usr/home/borndevelopments.com/web/coixi/shop/themes/biosanyresp/modules/favoriteproducts/favoriteproducts-header.tpl',
      1 => 1373026804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178170754951d6ba3dbb5e47-51750519',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d6ba3dca40f6_58829472',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d6ba3dca40f6_58829472')) {function content_51d6ba3dca40f6_58829472($_smarty_tpl) {?>

<script type="text/javascript">	var favorite_products_url_add = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','actions',array('process'=>'add'),true);?>
';	
var favorite_products_url_remove = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','actions',array('process'=>'remove'),true);?>
';<?php if (isset($_GET['id_product'])){?>	
var favorite_products_id_product = '<?php echo intval($_GET['id_product']);?>
';<?php }?> </script><?php }} ?>