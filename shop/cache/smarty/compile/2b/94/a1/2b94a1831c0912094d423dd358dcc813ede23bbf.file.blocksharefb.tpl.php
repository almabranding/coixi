<?php /* Smarty version Smarty-3.1.13, created on 2013-07-05 14:21:33
         compiled from "/usr/home/borndevelopments.com/web/coixi/shop/themes/biosanyresp/modules/blocksharefb/blocksharefb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:161977700751d6ba4d85c365-07955009%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b94a1831c0912094d423dd358dcc813ede23bbf' => 
    array (
      0 => '/usr/home/borndevelopments.com/web/coixi/shop/themes/biosanyresp/modules/blocksharefb/blocksharefb.tpl',
      1 => 1373026804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '161977700751d6ba4d85c365-07955009',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_link' => 0,
    'product_title' => 0,
    'img_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d6ba4d886577_40148852',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d6ba4d886577_40148852')) {function content_51d6ba4d886577_40148852($_smarty_tpl) {?>

<li id="left_share_fb">
	<a href="http://www.facebook.com/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['product_link']->value;?>
&amp;t=<?php echo $_smarty_tpl->tpl_vars['product_title']->value;?>
" class="js-new-window"><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
biosany/Facebook_2.png" alt="Remove" title="<?php echo smartyTranslate(array('s'=>'Share on Facebook','mod'=>'blocksharefb'),$_smarty_tpl);?>
" width="35" height="35" onmouseover="this.src='<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
biosany/Facebook.png';" onmouseout="this.src='<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
biosany/Facebook_2.png';" /></a>
</li><?php }} ?>