<?php /* Smarty version Smarty-3.1.13, created on 2013-07-05 14:21:19
         compiled from "/usr/home/borndevelopments.com/web/coixi/shop/modules/blocklangcurr/blocklangcurr.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16459440251d6ba3f61f054-84778125%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6043715bc3e93cd610461e058a721bde1b2c28f7' => 
    array (
      0 => '/usr/home/borndevelopments.com/web/coixi/shop/modules/blocklangcurr/blocklangcurr.tpl',
      1 => 1373026826,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16459440251d6ba3f61f054-84778125',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_dir' => 0,
    'request_uri' => 0,
    'languages' => 0,
    'language' => 0,
    'link' => 0,
    'lang_iso' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d6ba3f667bd1_12492063',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d6ba3f667bd1_12492063')) {function content_51d6ba3f667bd1_12492063($_smarty_tpl) {?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
blocklangcurr.js"></script> 

<!-- Block langcurr module --> 

<div id="currencies_lang_curr">

	



	    <form id="setLanguage" action="<?php echo $_smarty_tpl->tpl_vars['request_uri']->value;?>
" method="post">	
		
	    <select style="width:145px" onchange="document.location = this.options[this.selectedIndex].value">    
		<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['link']->value->getLanguageLink($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['iso_code']==$_smarty_tpl->tpl_vars['lang_iso']->value){?> selected="selected" <?php }?> ><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</option>
		<?php } ?>
        </select>  
		<input type="hidden" name="id_lang" id="id_lang" value=""/>	
		<input type="hidden" name="SubmitLanguage" value="" />
		</form>

 
</div>	


<!-- /Block langcurr module --><?php }} ?>