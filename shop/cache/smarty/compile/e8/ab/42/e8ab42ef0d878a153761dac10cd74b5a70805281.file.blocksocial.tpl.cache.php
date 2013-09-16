<?php /* Smarty version Smarty-3.1.13, created on 2013-07-05 14:21:19
         compiled from "/usr/home/borndevelopments.com/web/coixi/shop/themes/biosanyresp/modules/blocksocial/blocksocial.tpl" */ ?>
<?php /*%%SmartyHeaderCode:67062868951d6ba3f34d402-95141000%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8ab42ef0d878a153761dac10cd74b5a70805281' => 
    array (
      0 => '/usr/home/borndevelopments.com/web/coixi/shop/themes/biosanyresp/modules/blocksocial/blocksocial.tpl',
      1 => 1373026804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67062868951d6ba3f34d402-95141000',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebook_url' => 0,
    'img_dir' => 0,
    'twitter_url' => 0,
    'rss_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d6ba3f3cd691_84865422',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d6ba3f3cd691_84865422')) {function content_51d6ba3f3cd691_84865422($_smarty_tpl) {?>

<div id="social_block" class="navigation">	
<div class="toggleSubMenu">
	<span><?php echo smartyTranslate(array('s'=>'Follow us','mod'=>'blocksocial'),$_smarty_tpl);?>
</span>
<div class="block_content subMenu">	
	<ul>
		<?php if ($_smarty_tpl->tpl_vars['facebook_url']->value!=''){?><li class="facebook"><a href="<?php echo $_smarty_tpl->tpl_vars['facebook_url']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
biosany/Facebook.png" alt="facebook" width="40" height="40" onmouseover="this.src='<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
biosany/Facebook_2.png';" onmouseout="this.src='<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
biosany/Facebook.png';" /></a></li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['twitter_url']->value!=''){?><li class="twitter"><a href="<?php echo $_smarty_tpl->tpl_vars['twitter_url']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
biosany/Twitter.png" alt="twitter" width="40" height="40" onmouseover="this.src='<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
biosany/Twitter_2.png';" onmouseout="this.src='<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
biosany/Twitter.png';" /></a></li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['rss_url']->value!=''){?><li class="rss"><a href="<?php echo $_smarty_tpl->tpl_vars['rss_url']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
biosany/Feed.png" alt="rss" width="40" height="40" onmouseover="this.src='<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
biosany/Feed_2.png';" onmouseout="this.src='<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
biosany/Feed.png';" /></a></li><?php }?>
	</ul>
</div>	
</div>
</div>
<?php }} ?>