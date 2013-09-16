<?php /* Smarty version Smarty-3.1.13, created on 2013-07-05 14:32:11
         compiled from "/usr/home/borndevelopments.com/web/coixi/shop/modules/minicslider/views/templates/hooks/quick_links.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5695571251d6bccb9510e9-56281194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e236cb9124b52e3040fe589602d54b3295fb4b3' => 
    array (
      0 => '/usr/home/borndevelopments.com/web/coixi/shop/modules/minicslider/views/templates/hooks/quick_links.tpl',
      1 => 1373026826,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5695571251d6bccb9510e9-56281194',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'minicslider' => 0,
    'module_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d6bccba0be75_32867032',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d6bccba0be75_32867032')) {function content_51d6bccba0be75_32867032($_smarty_tpl) {?><li>
  <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=<?php echo $_smarty_tpl->tpl_vars['minicslider']->value;?>
" style="background: url('<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
logo.png') no-repeat center 25px #F8F8F8">
    <h4><?php echo smartyTranslate(array('s'=>'Minic Slider Module','mod'=>'minicslider'),$_smarty_tpl);?>
</h4>
    <p><?php echo smartyTranslate(array('s'=>'Powerfull image slider for advertising','mod'=>'minicslider'),$_smarty_tpl);?>
</p>
  </a>
</li><?php }} ?>