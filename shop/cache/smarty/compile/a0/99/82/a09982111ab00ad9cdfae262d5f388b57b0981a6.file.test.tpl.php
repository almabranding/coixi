<?php /* Smarty version Smarty-3.1.13, created on 2013-07-03 12:04:51
         compiled from "/usr/home/borndevelopments.com/web/coixi/shop/themes/default/mobile/test.tpl" */ ?>
<?php /*%%SmartyHeaderCode:86953530351d3f7432d96c8-28735954%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a09982111ab00ad9cdfae262d5f388b57b0981a6' => 
    array (
      0 => '/usr/home/borndevelopments.com/web/coixi/shop/themes/default/mobile/test.tpl',
      1 => 1356963556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86953530351d3f7432d96c8-28735954',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d3f7432e0482_78457400',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d3f7432e0482_78457400')) {function content_51d3f7432e0482_78457400($_smarty_tpl) {?>
	<div data-role="content" id="content">
		<div id="slider">
			<img src="img/slider.jpg" width="100%" />
		</div>

		
		<!--<ul data-role="listview" data-inset="true" id="category">
			<li><a href="category.html" data-ajax="false">Category 1</a></li>
			<li><a href="category.html" data-ajax="false">Category 2</a></li>
			<li><a href="category.html" data-ajax="false">Category 3</a></li>
			<li><a href="category.html" data-ajax="false">Category 4</a></li>
		</ul>--><!-- /category -->
	
		<hr width="99%" align="center" size="2" />
		<div id="newsletter">
			<p>Newsletter</p>
			<form action="form.php" method="post">
				<div data-role="fieldcontain">
					<label for="name">Your email:</label>
					<input type="text" name="name" id="name" value="" />
					<div data-theme="a" class="ui-btn ui-btn-corner-all ui-shadow ui-btn-up-a" aria-disabled="false">
						<span aria-hidden="true" class="ui-btn-inner ui-btn-corner-all"><span class="ui-btn-text">OK</span></span>
					</div>
				</div>
			</form>
		</div><!-- /newsletter -->
		
		<hr width="99%" align="center" size="2" />
		<ul data-role="listview" data-inset="true" id="category">
			<li><a href="index.html" data-ajax="false">Accueil</a></li>
			<li><a href="category.html" data-ajax="false">IPod</a></li>
			<li><a href="category.html" data-ajax="false">Accessoires</a></li>
			<li><a href="my-account.html" data-ajax="false">Mon compte</a></li>
			<li><a href="contact.html" data-ajax="false">Contact</a></li>
		</ul>
		
	</div><!-- /content -->
<?php }} ?>