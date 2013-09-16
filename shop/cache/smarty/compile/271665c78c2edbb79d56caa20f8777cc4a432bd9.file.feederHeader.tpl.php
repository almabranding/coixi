<?php /* Smarty version Smarty-3.1.8, created on 2013-07-03 11:16:42
         compiled from "/usr/home/borndevelopments.com/web/coixi/shop/modules/feeder/feederHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:98329593451d3ebfa100e90-66626551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '271665c78c2edbb79d56caa20f8777cc4a432bd9' => 
    array (
      0 => '/usr/home/borndevelopments.com/web/coixi/shop/modules/feeder/feederHeader.tpl',
      1 => 1356963556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98329593451d3ebfa100e90-66626551',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'meta_title' => 0,
    'feedUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51d3ebfa11f2d4_45069534',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d3ebfa11f2d4_45069534')) {function content_51d3ebfa11f2d4_45069534($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/usr/home/borndevelopments.com/web/coixi/shop/tools/smarty/plugins/modifier.escape.php';
?>

<link rel="alternate" type="application/rss+xml" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_title']->value, 'html', 'UTF-8');?>
" href="<?php echo $_smarty_tpl->tpl_vars['feedUrl']->value;?>
" /><?php }} ?>