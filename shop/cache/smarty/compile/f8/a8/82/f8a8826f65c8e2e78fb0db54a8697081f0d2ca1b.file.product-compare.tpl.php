<?php /* Smarty version Smarty-3.1.13, created on 2013-07-03 12:05:05
         compiled from "/usr/home/borndevelopments.com/web/coixi/shop/themes/default/product-compare.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2432061351d3f751291fd5-01003460%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8a8826f65c8e2e78fb0db54a8697081f0d2ca1b' => 
    array (
      0 => '/usr/home/borndevelopments.com/web/coixi/shop/themes/default/product-compare.tpl',
      1 => 1372845091,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2432061351d3f751291fd5-01003460',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'comparator_max_item' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d3f7512ca041_52903515',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d3f7512ca041_52903515')) {function content_51d3f7512ca041_52903515($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['comparator_max_item']->value){?>
<script type="text/javascript">
// <![CDATA[
	var min_item = '<?php echo smartyTranslate(array('s'=>'Please select at least one product','js'=>1),$_smarty_tpl);?>
';
	var max_item = "<?php echo smartyTranslate(array('s'=>'You cannot add more than %d product(s) to the product comparison','sprintf'=>$_smarty_tpl->tpl_vars['comparator_max_item']->value,'js'=>1),$_smarty_tpl);?>
";
//]]>
</script>

	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('products-comparison');?>
" onsubmit="true">
		<p>
		<input type="submit" id="bt_compare" class="button" value="<?php echo smartyTranslate(array('s'=>'Compare'),$_smarty_tpl);?>
" />
		<input type="hidden" name="compare_product_list" class="compare_product_list" value="" />
		</p>
	</form>
<?php }?>

<?php }} ?>