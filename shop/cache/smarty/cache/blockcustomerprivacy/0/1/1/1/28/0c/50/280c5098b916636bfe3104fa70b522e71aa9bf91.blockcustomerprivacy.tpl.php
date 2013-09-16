<?php /*%%SmartyHeaderCode:199175803951da76b8335756-91890891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '280c5098b916636bfe3104fa70b522e71aa9bf91' => 
    array (
      0 => '/usr/home/borndevelopments.com/web/coixi/shop/modules/blockcustomerprivacy/blockcustomerprivacy.tpl',
      1 => 1372845002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199175803951da76b8335756-91890891',
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51f13c71cb6605_15754328',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51f13c71cb6605_15754328')) {function content_51f13c71cb6605_15754328($_smarty_tpl) {?>
<div class="error_customerprivacy" style="color:red;"></div>
<fieldset class="account_creation customerprivacy">
	<h3>Privacidad de los datos de los clientes</h3>
	<p class="required">
		<input type="checkbox" value="1" id="customer_privacy" name="customer_privacy" style="float:left;margin: 15px;" />				
	</p>
	<label for="customer_privacy">El dato personal que da esta utilizado para responder a sus búsquedas, procesa sus ordenes o autorizase el acceso especifico a la información. Tiene derecho de modificar todas las informaciones personales que tenemos sobre usted en pagina &quot;my account&quot;.</label>		
</fieldset><?php }} ?>