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
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51e8fe74781582_33972872',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51e8fe74781582_33972872')) {function content_51e8fe74781582_33972872($_smarty_tpl) {?>
<!-- Block myaccount module -->

<div class="block_myaccount navigation">

<div class="toggleSubMenu">	

<span>Mi cuenta</span>	

<div class="block_content subMenu">		

<ul>			

<li><a href="http://borndevelopments.com/coixi/shop/index.php?controller=history" title="">Mis pedidos</a></li>			
			
<li><a href="http://borndevelopments.com/coixi/shop/index.php?controller=order-slip" title="">Mis hojas de crédito</a></li>			
<li><a href="http://borndevelopments.com/coixi/shop/index.php?controller=addresses" title="">Mis direcciones</a></li>			
<li><a href="http://borndevelopments.com/coixi/shop/index.php?controller=identity" title="">Mis datos personales</a></li>			
			


<li class="favorite products">	

<a href="http://borndevelopments.com/coixi/shop/index.php?fc=module&amp;module=favoriteproducts&amp;controller=account&amp;id_lang=1" title="Mis productos favoritos">		
<p>Mis productos favoritos</p>
</a> 

</li>
<!-- MODULE Loyalty -->

<li class="loyalty">
<a href="http://borndevelopments.com/coixi/shop/index.php?process=summary&fc=module&module=loyalty&controller=default&id_lang=1" title="Mis puntos de fidelidad">
<img src="http://borndevelopments.com/coixi/shop/themes/biosanyresp/img/green_icons/star-black-100.png" class="icon" />
<p>Mis puntos de fidelidad</p>
</a>
</li>

<!-- END : MODULE Loyalty -->		
</ul>		

<p class="logout"><a href="http://borndevelopments.com/coixi/shop/index.php?mylogout" title="Salir">Salir</a></p>	

</div>
</div>
</div>

<!-- /Block myaccount module --><?php }} ?>