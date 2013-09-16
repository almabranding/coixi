<?php /* Smarty version Smarty-3.1.13, created on 2013-07-05 14:21:18
         compiled from "/usr/home/borndevelopments.com/web/coixi/shop/themes/biosanyresp/modules/loyalty/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:197396466751d6ba3ed46b96-97567638%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef61baeee4e78e2ce3dbb722329b4efba1e831dd' => 
    array (
      0 => '/usr/home/borndevelopments.com/web/coixi/shop/themes/biosanyresp/modules/loyalty/my-account.tpl',
      1 => 1373026804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197396466751d6ba3ed46b96-97567638',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'img_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d6ba3ed6f993_17093758',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d6ba3ed6f993_17093758')) {function content_51d6ba3ed6f993_17093758($_smarty_tpl) {?>

<!-- MODULE Loyalty -->

<li class="loyalty">
<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('loyalty','default',array('process'=>'summary'));?>
" title="<?php echo smartyTranslate(array('s'=>'My loyalty points','mod'=>'loyalty'),$_smarty_tpl);?>
">
<img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
green_icons/star-black-100.png" class="icon" />
<p><?php echo smartyTranslate(array('s'=>'My loyalty points','mod'=>'loyalty'),$_smarty_tpl);?>
</p>
</a>
</li>

<!-- END : MODULE Loyalty --><?php }} ?>