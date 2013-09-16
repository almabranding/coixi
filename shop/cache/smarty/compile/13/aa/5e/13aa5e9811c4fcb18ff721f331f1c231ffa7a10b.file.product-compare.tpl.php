<?php /* Smarty version Smarty-3.1.13, created on 2013-07-05 14:48:57
         compiled from "/usr/home/borndevelopments.com/web/coixi/shop/themes/biosanyresp/product-compare.tpl" */ ?>
<?php /*%%SmartyHeaderCode:174191869251d6c0b910d514-02447552%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13aa5e9811c4fcb18ff721f331f1c231ffa7a10b' => 
    array (
      0 => '/usr/home/borndevelopments.com/web/coixi/shop/themes/biosanyresp/product-compare.tpl',
      1 => 1373026804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174191869251d6c0b910d514-02447552',
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
  'unifunc' => 'content_51d6c0b9147440_87612364',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d6c0b9147440_87612364')) {function content_51d6c0b9147440_87612364($_smarty_tpl) {?>



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
		

<p style="display: none;float: right">
		
<input type="submit" id="bt_compare" class="button" value="<?php echo smartyTranslate(array('s'=>'Compare'),$_smarty_tpl);?>
" />
		
<input type="hidden" name="compare_product_list" class="compare_product_list" value="" />
		
</p>
	

</form>


<?php }?>

<?php }} ?>