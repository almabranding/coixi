<?php /* Smarty version Smarty-3.1.13, created on 2013-07-05 14:21:19
         compiled from "/usr/home/borndevelopments.com/web/coixi/shop/modules/blockcurrenciesdown/blockcurrenciesdown.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184336605951d6ba3f82b313-14680867%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4478c4bd57b47037c1409566c109d07202ce660e' => 
    array (
      0 => '/usr/home/borndevelopments.com/web/coixi/shop/modules/blockcurrenciesdown/blockcurrenciesdown.tpl',
      1 => 1373026826,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184336605951d6ba3f82b313-14680867',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request_uri' => 0,
    'currencies' => 0,
    'f_currency' => 0,
    'id_currency_cookie' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d6ba3f865d10_20820224',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d6ba3f865d10_20820224')) {function content_51d6ba3f865d10_20820224($_smarty_tpl) {?>

<!-- Block currencies module -->

<div id="currencies_block_top">	

<form id="setCurrency" action="<?php echo $_smarty_tpl->tpl_vars['request_uri']->value;?>
" method="post">				

<select onchange="setCurrency(this.value);">			
<?php  $_smarty_tpl->tpl_vars['f_currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f_currency']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f_currency']->key => $_smarty_tpl->tpl_vars['f_currency']->value){
$_smarty_tpl->tpl_vars['f_currency']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['f_currency']->key;
?>				
<option  value="<?php echo $_smarty_tpl->tpl_vars['f_currency']->value['id_currency'];?>
"<?php if ($_smarty_tpl->tpl_vars['id_currency_cookie']->value==$_smarty_tpl->tpl_vars['f_currency']->value['id_currency']){?> selected="selected"<?php }?>>					
<?php echo $_smarty_tpl->tpl_vars['f_currency']->value['name'];?>
				
</option>			
<?php } ?>		
</select>		

<p>			
<input type="hidden" name="id_currency" id="id_currency" value=""/>			
<input type="hidden" name="SubmitCurrency" value="" />		
</p>	

</form>
</div>

<!-- /Block currencies module --><?php }} ?>