<?php /* Smarty version Smarty-3.1.8, created on 2013-07-03 11:16:43
         compiled from "/usr/home/borndevelopments.com/web/coixi/shop/themes/default/modules/blockstore/blockstore.tpl" */ ?>
<?php /*%%SmartyHeaderCode:136723774551d3ebfb82b889-84314885%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c20151e0271f4f6b8a08c3b2e2bfafbc04adfef5' => 
    array (
      0 => '/usr/home/borndevelopments.com/web/coixi/shop/themes/default/modules/blockstore/blockstore.tpl',
      1 => 1356963556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136723774551d3ebfb82b889-84314885',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'module_dir' => 0,
    'store_img' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51d3ebfb888263_52438097',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d3ebfb888263_52438097')) {function content_51d3ebfb888263_52438097($_smarty_tpl) {?>

<!-- Block stores module -->
<div id="stores_block_left" class="block">
	<p class="title_block"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('stores');?>
" title="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
</a></p>
	<div class="block_content blockstore">
		<p class="store_image"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('stores');?>
" title="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['store_img']->value;?>
" alt="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
" width="174" height="115" /></a></p>
		<p>
			<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('stores');?>
" title="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
">&raquo; <?php echo smartyTranslate(array('s'=>'Discover our stores','mod'=>'blockstore'),$_smarty_tpl);?>
</a>
		</p>
	</div>
</div>
<!-- /Block stores module -->
<?php }} ?>