<?php /* Smarty version Smarty-3.1.13, created on 2013-07-05 14:21:18
         compiled from "/usr/home/borndevelopments.com/web/coixi/shop/themes/biosanyresp/modules/favoriteproducts/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:202241240151d6ba3ecce048-33896481%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4ebe0a143b737a31303e08b0574a64f2b7780ba' => 
    array (
      0 => '/usr/home/borndevelopments.com/web/coixi/shop/themes/biosanyresp/modules/favoriteproducts/my-account.tpl',
      1 => 1373026804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202241240151d6ba3ecce048-33896481',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'in_footer' => 0,
    'img_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d6ba3ed09db8_89728177',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d6ba3ed09db8_89728177')) {function content_51d6ba3ed09db8_89728177($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/usr/home/borndevelopments.com/web/coixi/shop/tools/smarty/plugins/modifier.escape.php';
?>

<li class="favorite products">	

<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','account'), 'htmlall', 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'My favorite products','mod'=>'favoriteproducts'),$_smarty_tpl);?>
">		
<?php if (!$_smarty_tpl->tpl_vars['in_footer']->value){?>
<img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
green_icons/favorites-black-100.png" class="icon" />
<?php }?>
<p><?php echo smartyTranslate(array('s'=>'My favorite products','mod'=>'favoriteproducts'),$_smarty_tpl);?>
</p>
</a> 

</li><?php }} ?>