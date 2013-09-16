<?php /* Smarty version Smarty-3.1.13, created on 2013-07-05 14:21:18
         compiled from "/usr/home/borndevelopments.com/web/coixi/shop/themes/biosanyresp/modules/blockuserinfo/blockuserinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29310311851d6ba3e019a99-78661792%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ac2f84e18aa03b9864393dc9bb4e3b5ffd21934' => 
    array (
      0 => '/usr/home/borndevelopments.com/web/coixi/shop/themes/biosanyresp/modules/blockuserinfo/blockuserinfo.tpl',
      1 => 1373026804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29310311851d6ba3e019a99-78661792',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logged' => 0,
    'link' => 0,
    'cookie' => 0,
    'PS_CATALOG_MODE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d6ba3e0a90e3_67438291',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d6ba3e0a90e3_67438291')) {function content_51d6ba3e0a90e3_67438291($_smarty_tpl) {?>

<!-- Block user information module HEADER -->

<div id="header_user"> 

<p class="userinfo">		
<?php echo smartyTranslate(array('s'=>'Welcome','mod'=>'blockuserinfo'),$_smarty_tpl);?>
		
<?php if ($_smarty_tpl->tpl_vars['logged']->value){?>			
<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true);?>
" class="account"><span><?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_lastname;?>
</span></a>			
<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,null,"mylogout");?>
" title="<?php echo smartyTranslate(array('s'=>'Log me out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="logout"><?php echo smartyTranslate(array('s'=>'Log out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a>		
<?php }else{ ?>			
<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true);?>
" class="login"><?php echo smartyTranslate(array('s'=>'Log in','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a>		
<?php }?>	
</p>

<ul>	
	
<?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>		

<li id="shopping_cart">			
<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink(((string)$_smarty_tpl->tpl_vars['order_process']->value),true);?>
" title="<?php echo smartyTranslate(array('s'=>'Your Shopping Cart','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">&nbsp;</a>		
</li>		

<?php }?>			

<li class="your_account">
<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true);?>
" title="<?php echo smartyTranslate(array('s'=>'Your Account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">&nbsp;</a>
</li>

</ul>	



</div>

<!-- /Block user information module HEADER --><?php }} ?>