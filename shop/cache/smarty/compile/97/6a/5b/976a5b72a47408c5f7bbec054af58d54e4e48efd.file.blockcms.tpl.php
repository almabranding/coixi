<?php /* Smarty version Smarty-3.1.13, created on 2013-07-05 14:21:18
         compiled from "/usr/home/borndevelopments.com/web/coixi/shop/themes/biosanyresp/modules/blockcms/blockcms.tpl" */ ?>
<?php /*%%SmartyHeaderCode:111896760851d6ba3ee7b7a7-71370795%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '976a5b72a47408c5f7bbec054af58d54e4e48efd' => 
    array (
      0 => '/usr/home/borndevelopments.com/web/coixi/shop/themes/biosanyresp/modules/blockcms/blockcms.tpl',
      1 => 1373026804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111896760851d6ba3ee7b7a7-71370795',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'block' => 0,
    'cms_titles' => 0,
    'cms_key' => 0,
    'cms_title' => 0,
    'cms_page' => 0,
    'link' => 0,
    'PS_CATALOG_MODE' => 0,
    'cmslinks' => 0,
    'cmslink' => 0,
    'footer_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d6ba3f174586_58306466',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d6ba3f174586_58306466')) {function content_51d6ba3f174586_58306466($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/usr/home/borndevelopments.com/web/coixi/shop/tools/smarty/plugins/modifier.escape.php';
?>

<?php if ($_smarty_tpl->tpl_vars['block']->value==1){?>	

<!-- Block CMS module -->	
<?php  $_smarty_tpl->tpl_vars['cms_title'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cms_title']->_loop = false;
 $_smarty_tpl->tpl_vars['cms_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cms_titles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cms_title']->key => $_smarty_tpl->tpl_vars['cms_title']->value){
$_smarty_tpl->tpl_vars['cms_title']->_loop = true;
 $_smarty_tpl->tpl_vars['cms_key']->value = $_smarty_tpl->tpl_vars['cms_title']->key;
?>	
	
<div id="informations_block_left_<?php echo $_smarty_tpl->tpl_vars['cms_key']->value;?>
" class="block informations_block_left">		
	
<h4><a href="<?php echo $_smarty_tpl->tpl_vars['cms_title']->value['category_link'];?>
"><?php if (!empty($_smarty_tpl->tpl_vars['cms_title']->value['name'])){?><?php echo $_smarty_tpl->tpl_vars['cms_title']->value['name'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['cms_title']->value['category_name'];?>
<?php }?></a></h4>			

<ul class="block_content">				
<?php  $_smarty_tpl->tpl_vars['cms_page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cms_page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cms_title']->value['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cms_page']->key => $_smarty_tpl->tpl_vars['cms_page']->value){
$_smarty_tpl->tpl_vars['cms_page']->_loop = true;
?>					
<?php if (isset($_smarty_tpl->tpl_vars['cms_page']->value['link'])){?>
<li class="bullet">
<b style="margin-left:2em;">					
<a href="<?php echo $_smarty_tpl->tpl_vars['cms_page']->value['link'];?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['cms_page']->value['name'], 'html', 'UTF-8');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['cms_page']->value['name'], 'html', 'UTF-8');?>
</a>					
</b>
</li>
<?php }?>				
<?php } ?>				

<?php  $_smarty_tpl->tpl_vars['cms_page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cms_page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cms_title']->value['cms']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cms_page']->key => $_smarty_tpl->tpl_vars['cms_page']->value){
$_smarty_tpl->tpl_vars['cms_page']->_loop = true;
?>					
<?php if (isset($_smarty_tpl->tpl_vars['cms_page']->value['link'])){?>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['cms_page']->value['link'];?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['cms_page']->value['meta_title'], 'html', 'UTF-8');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['cms_page']->value['meta_title'], 'html', 'UTF-8');?>
</a></li>
<?php }?>				
<?php } ?>				

<?php if ($_smarty_tpl->tpl_vars['cms_title']->value['display_store']){?>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('stores');?>
" title="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockcms'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockcms'),$_smarty_tpl);?>
</a></li>
<?php }?>

<li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('manufacturer');?>
" title="<?php echo smartyTranslate(array('s'=>'Our brands','mod'=>'blockcms'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Our brands','mod'=>'blockcms'),$_smarty_tpl);?>
</a></li>

<li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('supplier');?>
" title="<?php echo smartyTranslate(array('s'=>'Our suppliers','mod'=>'blockcms'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Our suppliers','mod'=>'blockcms'),$_smarty_tpl);?>
</a></li>		

</ul>		

</div>	
<?php } ?>	

<!-- /Block CMS module -->	 

<?php }else{ ?>	

<!-- MODULE Block footer -->	

<div class="block_various_links navigation" id="block_various_links_footer">

<div class="toggleSubMenu">			

<span><?php echo smartyTranslate(array('s'=>'Information','mod'=>'blockcms'),$_smarty_tpl);?>
</span>	

<div class="block_content subMenu">

<ul>			

<?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>
<li class="first_item"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('prices-drop');?>
" title="<?php echo smartyTranslate(array('s'=>'Specials','mod'=>'blockcms'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Specials','mod'=>'blockcms'),$_smarty_tpl);?>
</a></li>
<?php }?>			

<li class="<?php if ($_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>first_<?php }?>item"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('new-products');?>
" title="<?php echo smartyTranslate(array('s'=>'New products','mod'=>'blockcms'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'New products','mod'=>'blockcms'),$_smarty_tpl);?>
</a></li>			

<?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>
<li class="item"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('best-sales');?>
" title="<?php echo smartyTranslate(array('s'=>'Top sellers','mod'=>'blockcms'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Top sellers','mod'=>'blockcms'),$_smarty_tpl);?>
</a></li>
<?php }?>

<li class="item"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('manufacturer');?>
" title="<?php echo smartyTranslate(array('s'=>'Our brands','mod'=>'blockcms'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Our brands','mod'=>'blockcms'),$_smarty_tpl);?>
</a></li>

<li class="item"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('supplier');?>
" title="<?php echo smartyTranslate(array('s'=>'Our suppliers','mod'=>'blockcms'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Our suppliers','mod'=>'blockcms'),$_smarty_tpl);?>
</a></li>	

<?php  $_smarty_tpl->tpl_vars['cmslink'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cmslink']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cmslinks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cmslink']->key => $_smarty_tpl->tpl_vars['cmslink']->value){
$_smarty_tpl->tpl_vars['cmslink']->_loop = true;
?>				
<?php if ($_smarty_tpl->tpl_vars['cmslink']->value['meta_title']!=''){?>					
<li class="item"><a href="<?php echo addslashes($_smarty_tpl->tpl_vars['cmslink']->value['link']);?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['cmslink']->value['meta_title'], 'htmlall', 'UTF-8');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['cmslink']->value['meta_title'], 'htmlall', 'UTF-8');?>
</a></li>				
<?php }?>			
<?php } ?>			
	

</ul>	

<?php echo $_smarty_tpl->tpl_vars['footer_text']->value;?>
	
</div>	
</div>
</div>
<!-- /MODULE Block footer -->
<?php }?><?php }} ?>