<?php /* Smarty version Smarty-3.1.13, created on 2013-07-05 14:21:19
         compiled from "/usr/home/borndevelopments.com/web/coixi/shop/themes/biosanyresp/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143666758951d6ba3fb3ff99-96327860%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '433e5148f84cae82b2c22306e8801c52835676a9' => 
    array (
      0 => '/usr/home/borndevelopments.com/web/coixi/shop/themes/biosanyresp/footer.tpl',
      1 => 1373026803,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143666758951d6ba3fb3ff99-96327860',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_FOOTER' => 0,
    'link' => 0,
    'come_from' => 0,
    'meta_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d6ba3fbcd3e6_25863405',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d6ba3fbcd3e6_25863405')) {function content_51d6ba3fbcd3e6_25863405($_smarty_tpl) {?>		

<?php if (!$_smarty_tpl->tpl_vars['content_only']->value){?>		

</div>

<!-- Right -->				

<div id="right_column" class="column grid_2 omega">					
<?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>
				
</div>			
</div>

</div>

<!-- Footer -->	
		
<div id="footer_court">
<div id="page_footer"> 
<div id="footer" class="grid_9 alpha omega clearfix"><?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>
</div>
<div id="bottom_footer">

<ul>  

<li class="footer_link_copyright"><?php echo smartyTranslate(array('s'=>'copyright'),$_smarty_tpl);?>
</li> 
<span></span>
<li class="footer_link_stores"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('stores');?>
" title="<?php echo smartyTranslate(array('s'=>'Our stores'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Our stores'),$_smarty_tpl);?>
</a></li>
<span></span>
<li class="footer_link_contact"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true);?>
" title="<?php echo smartyTranslate(array('s'=>'contact'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'contact'),$_smarty_tpl);?>
</a></li>	
<span></span>
<li class="footer_link_sitemap"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('sitemap');?>
" title="<?php echo smartyTranslate(array('s'=>'sitemap'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'sitemap'),$_smarty_tpl);?>
</a></li>
<span></span>	
<li class="footer_link_bookmark">		
<script type="text/javascript">writeBookmarkLink('<?php echo $_smarty_tpl->tpl_vars['come_from']->value;?>
', '<?php echo addslashes(addslashes($_smarty_tpl->tpl_vars['meta_title']->value));?>
', '<?php echo smartyTranslate(array('s'=>'bookmark'),$_smarty_tpl);?>
');</script>	</li> 



</ul>


</div> 		
</div> 	

</div>
	
<?php }?>	

</body>
</html><?php }} ?>