<?php /* Smarty version Smarty-3.1.13, created on 2013-07-05 14:21:35
         compiled from "/usr/home/borndevelopments.com/web/coixi/shop/themes/biosanyresp/breadcrumb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:128832702251d6ba4fb57de8-08803788%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d565913d156e163e15e84b1105d9aed5adea54f' => 
    array (
      0 => '/usr/home/borndevelopments.com/web/coixi/shop/themes/biosanyresp/breadcrumb.tpl',
      1 => 1373026803,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '128832702251d6ba4fb57de8-08803788',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_dir' => 0,
    'img_dir' => 0,
    'path' => 0,
    'category' => 0,
    'navigationPipe' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d6ba4fbf9af7_55523947',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d6ba4fbf9af7_55523947')) {function content_51d6ba4fbf9af7_55523947($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/usr/home/borndevelopments.com/web/coixi/shop/tools/smarty/plugins/modifier.escape.php';
?>

<!-- Breadcrumb -->

<?php if (isset(Smarty::$_smarty_vars['capture']['path'])){?><?php $_smarty_tpl->tpl_vars['path'] = new Smarty_variable(Smarty::$_smarty_vars['capture']['path'], null, 0);?><?php }?>

<div class="breadcrumb">	

<a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'return to Home'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
green_icons/home-green-20.png" alt="home" width="20" height="20" onmouseover="this.src='<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
green_icons/home-black-20.png';" onmouseout="this.src='<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
green_icons/home-green-20.png';" /></a>

<?php if (isset($_smarty_tpl->tpl_vars['path']->value)&&$_smarty_tpl->tpl_vars['path']->value){?>		
<span class="navigation-pipe" <?php if (isset($_smarty_tpl->tpl_vars['category']->value)&&$_smarty_tpl->tpl_vars['category']->value->id_category==1){?>style="display:none;"<?php }?>><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['navigationPipe']->value, 'html', 'UTF-8');?>
</span>
		
<?php if (!strpos($_smarty_tpl->tpl_vars['path']->value,'span')){?>			
<span class="navigation_page"><?php echo $_smarty_tpl->tpl_vars['path']->value;?>
</span>	
	
<?php }else{ ?>			
<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
	
	
<?php }?>	
<?php }?>

</div>

<!-- /Breadcrumb --><?php }} ?>