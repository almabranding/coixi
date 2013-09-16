<?php /* Smarty version Smarty-3.1.13, created on 2013-07-03 12:04:47
         compiled from "/usr/home/borndevelopments.com/web/coixi/shop/themes/default/mobile/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93196657951d3f73f100a77-17364997%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3bf759f2d9f01ba0c9c488ff2f96cb1361ca7e10' => 
    array (
      0 => '/usr/home/borndevelopments.com/web/coixi/shop/themes/default/mobile/index.tpl',
      1 => 1372845264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93196657951d3f73f100a77-17364997',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d3f73f1124c9_52723662',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d3f73f1124c9_52723662')) {function content_51d3f73f1124c9_52723662($_smarty_tpl) {?>
	<div data-role="content" id="content">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"DisplayMobileIndex"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->getSubTemplate ('./sitemap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div><!-- /content -->
<?php }} ?>