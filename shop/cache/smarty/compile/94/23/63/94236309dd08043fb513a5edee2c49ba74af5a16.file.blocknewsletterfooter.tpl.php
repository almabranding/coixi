<?php /* Smarty version Smarty-3.1.13, created on 2013-07-05 14:21:19
         compiled from "/usr/home/borndevelopments.com/web/coixi/shop/modules/blocknewsletterfooter/blocknewsletterfooter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1672353451d6ba3f265f79-10298474%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94236309dd08043fb513a5edee2c49ba74af5a16' => 
    array (
      0 => '/usr/home/borndevelopments.com/web/coixi/shop/modules/blocknewsletterfooter/blocknewsletterfooter.tpl',
      1 => 1373026826,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1672353451d6ba3f265f79-10298474',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'value' => 0,
    'action' => 0,
    'msg' => 0,
    'nw_error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d6ba3f330471_76871983',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d6ba3f330471_76871983')) {function content_51d6ba3f330471_76871983($_smarty_tpl) {?>

<!-- Block Newsletter module-->	

<div id="newsletter_footer" class="navigation" > 

<div class="toggleSubMenu">

<span><?php echo smartyTranslate(array('s'=>'Newsletter','mod'=>'blocknewsletterfooter'),$_smarty_tpl);?>
</span>	  

<div class="block_content subMenu">	

<ul> 

<p class="msg_news"><?php echo smartyTranslate(array('s'=>'Preview about benefits and news !','mod'=>'blocknewsletterfooter'),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'Sign up for the newsletter','mod'=>'blocknewsletterfooter'),$_smarty_tpl);?>
</p>

<form action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index.php');?>
" method="post">	
		
<li>

<input type="text" name="email" size="18" value="<?php if (isset($_smarty_tpl->tpl_vars['value']->value)&&$_smarty_tpl->tpl_vars['value']->value){?><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'your e-mail','mod'=>'blocknewsletterfooter'),$_smarty_tpl);?>
<?php }?>" onfocus="javascript:if(this.value=='<?php echo smartyTranslate(array('s'=>'your e-mail','mod'=>'blocknewsletterfooter'),$_smarty_tpl);?>
')this.value='';" onblur="javascript:if(this.value=='')this.value='<?php echo smartyTranslate(array('s'=>'your e-mail','mod'=>'blocknewsletterfooter'),$_smarty_tpl);?>
';" />
</li>	
		
<li>			
<select name="action">					
<option value="0"<?php if (isset($_smarty_tpl->tpl_vars['action']->value)&&$_smarty_tpl->tpl_vars['action']->value==0){?> selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>'Subscribe','mod'=>'blocknewsletterfooter'),$_smarty_tpl);?>
</option>					
<option value="1"<?php if (isset($_smarty_tpl->tpl_vars['action']->value)&&$_smarty_tpl->tpl_vars['action']->value==1){?> selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>'Unsubscribe','mod'=>'blocknewsletterfooter'),$_smarty_tpl);?>
</option>				
</select>
</li>

<li>
<input type="submit" value="<?php echo smartyTranslate(array('s'=>'Submit','mod'=>'blocknewsletterfooter'),$_smarty_tpl);?>
" class="button_news" name="submitNewsletter" />	
</li>		

</form>
	
<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)&&$_smarty_tpl->tpl_vars['msg']->value){?>		
<p class="<?php if ($_smarty_tpl->tpl_vars['nw_error']->value){?>warning_inline<?php }else{ ?>success_inline<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>	
<?php }?>	

</ul>  

</div>
</div>
</div>

<!-- /Block Newsletter module-->
<?php }} ?>