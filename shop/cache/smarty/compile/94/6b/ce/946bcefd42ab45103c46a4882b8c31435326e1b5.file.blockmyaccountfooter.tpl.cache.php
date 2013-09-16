<?php /* Smarty version Smarty-3.1.13, created on 2013-07-05 14:21:18
         compiled from "/usr/home/borndevelopments.com/web/coixi/shop/themes/biosanyresp/modules/blockmyaccountfooter/blockmyaccountfooter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:65135206051d6ba3ed7efc4-94880628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '946bcefd42ab45103c46a4882b8c31435326e1b5' => 
    array (
      0 => '/usr/home/borndevelopments.com/web/coixi/shop/themes/biosanyresp/modules/blockmyaccountfooter/blockmyaccountfooter.tpl',
      1 => 1373026804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65135206051d6ba3ed7efc4-94880628',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_BLOCK_MY_ACCOUNT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d6ba3ee2df68_11519875',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d6ba3ee2df68_11519875')) {function content_51d6ba3ee2df68_11519875($_smarty_tpl) {?>

<!-- Block myaccount module -->

<div class="block_myaccount navigation">

<div class="toggleSubMenu">	

<span><?php echo smartyTranslate(array('s'=>'My account','mod'=>'blockmyaccountfooter'),$_smarty_tpl);?>
</span>	

<div class="block_content subMenu">		

<ul>			

<li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('history.php',true);?>
" title=""><?php echo smartyTranslate(array('s'=>'My orders','mod'=>'blockmyaccountfooter'),$_smarty_tpl);?>
</a></li>			
<?php if ($_smarty_tpl->tpl_vars['returnAllowed']->value){?>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order-follow.php',true);?>
" title=""><?php echo smartyTranslate(array('s'=>'My merchandise returns','mod'=>'blockmyaccountfooter'),$_smarty_tpl);?>
</a></li>
<?php }?>			
<li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order-slip.php',true);?>
" title=""><?php echo smartyTranslate(array('s'=>'My credit slips','mod'=>'blockmyaccountfooter'),$_smarty_tpl);?>
</a></li>			
<li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('addresses.php',true);?>
" title=""><?php echo smartyTranslate(array('s'=>'My addresses','mod'=>'blockmyaccountfooter'),$_smarty_tpl);?>
</a></li>			
<li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('identity.php',true);?>
" title=""><?php echo smartyTranslate(array('s'=>'My personal info','mod'=>'blockmyaccountfooter'),$_smarty_tpl);?>
</a></li>			
<?php if ($_smarty_tpl->tpl_vars['voucherAllowed']->value){?>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('discount.php',true);?>
" title=""><?php echo smartyTranslate(array('s'=>'My vouchers','mod'=>'blockmyaccountfooter'),$_smarty_tpl);?>
</a></li>
<?php }?>			

<?php echo $_smarty_tpl->tpl_vars['HOOK_BLOCK_MY_ACCOUNT']->value;?>
		
</ul>		

<p class="logout"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index.php');?>
?mylogout" title="<?php echo smartyTranslate(array('s'=>'Sign out','mod'=>'blockmyaccountfooter'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Sign out','mod'=>'blockmyaccountfooter'),$_smarty_tpl);?>
</a></p>	

</div>
</div>
</div>

<!-- /Block myaccount module --><?php }} ?>