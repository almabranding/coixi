<?php /* Smarty version Smarty-3.1.13, created on 2013-07-03 12:14:19
         compiled from "/usr/home/borndevelopments.com/web/coixi/shop/modules/feeder/feederHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:149674333251d3f97b664cf1-85846996%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '271665c78c2edbb79d56caa20f8777cc4a432bd9' => 
    array (
      0 => '/usr/home/borndevelopments.com/web/coixi/shop/modules/feeder/feederHeader.tpl',
      1 => 1372845037,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149674333251d3f97b664cf1-85846996',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'meta_title' => 0,
    'feedUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d3f97b6873c7_00110412',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d3f97b6873c7_00110412')) {function content_51d3f97b6873c7_00110412($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/usr/home/borndevelopments.com/web/coixi/shop/tools/smarty/plugins/modifier.escape.php';
?>

<link rel="alternate" type="application/rss+xml" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_title']->value, 'html', 'UTF-8');?>
" href="<?php echo $_smarty_tpl->tpl_vars['feedUrl']->value;?>
" /><?php }} ?>