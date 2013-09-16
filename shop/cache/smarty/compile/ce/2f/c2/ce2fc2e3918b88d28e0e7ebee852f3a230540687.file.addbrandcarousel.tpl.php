<?php /* Smarty version Smarty-3.1.13, created on 2013-07-05 14:21:18
         compiled from "/usr/home/borndevelopments.com/web/coixi/shop/modules/addbrandcarousel/addbrandcarousel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12470978551d6ba3ebc8496-14838867%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce2fc2e3918b88d28e0e7ebee852f3a230540687' => 
    array (
      0 => '/usr/home/borndevelopments.com/web/coixi/shop/modules/addbrandcarousel/addbrandcarousel.tpl',
      1 => 1373026826,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12470978551d6ba3ebc8496-14838867',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'brand_carousel_cir' => 0,
    'brand_carousel_inf' => 0,
    'brand_carousel_auto' => 0,
    'brand_carousel_pause_time' => 0,
    'brand_carousel_display_items' => 0,
    'brand_carousel_rand' => 0,
    'imageSize' => 0,
    'brand_carousel_scroll_items' => 0,
    'brand_carousel_fx' => 0,
    'brand_carousel_fx_time' => 0,
    'brand_carousel_mouseover' => 0,
    'this_path' => 0,
    'brandcarousel' => 0,
    'brand' => 0,
    'link' => 0,
    'img_manu_dir' => 0,
    'imageName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51d6ba3ec9c4c2_54348458',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d6ba3ec9c4c2_54348458')) {function content_51d6ba3ec9c4c2_54348458($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/usr/home/borndevelopments.com/web/coixi/shop/tools/smarty/plugins/modifier.escape.php';
?><!-- MODULE Brand Carousel -->
<script type="text/javascript">

function sliderInit() {
	$("#brand_wrapper").carouFredSel({
		debug	: true,
		circular: <?php echo $_smarty_tpl->tpl_vars['brand_carousel_cir']->value;?>
,
	    infinite: <?php echo $_smarty_tpl->tpl_vars['brand_carousel_inf']->value;?>
,
	    align   : "center",
		responsive: true,
		width: '100%',
	    auto	: {
    		play	: <?php echo $_smarty_tpl->tpl_vars['brand_carousel_auto']->value;?>
,
	    	timeoutDuration : <?php echo $_smarty_tpl->tpl_vars['brand_carousel_pause_time']->value;?>

	    },
	    items	: {
			visible: {
					min: 1,
					max: <?php echo $_smarty_tpl->tpl_vars['brand_carousel_display_items']->value;?>

					 },
			start	: <?php echo $_smarty_tpl->tpl_vars['brand_carousel_rand']->value;?>
,
			width   : "<?php echo $_smarty_tpl->tpl_vars['imageSize']->value['width'];?>
",
			height  : "<?php echo $_smarty_tpl->tpl_vars['imageSize']->value['height'];?>
"
			
		},		
		scroll	: {
			items	: <?php echo $_smarty_tpl->tpl_vars['brand_carousel_scroll_items']->value;?>
,
			fx	    : "<?php echo $_smarty_tpl->tpl_vars['brand_carousel_fx']->value;?>
",
			duration: <?php echo $_smarty_tpl->tpl_vars['brand_carousel_fx_time']->value;?>
,
			pauseOnHover: <?php echo $_smarty_tpl->tpl_vars['brand_carousel_mouseover']->value;?>

		},
		prev	: {
			button	: "#brand_prev",
			key		: "left"
		},
		next	: {
			button	: "#brand_next",
			key		: "right"
		},
		swipe: {
					onMouse: true,
					onTouch: true
			   }
	}, 
	{
	    classnames		: {
		    selected		: "selected",
		    hidden			: "hidden",
		    disabled		: "disabled",
		    paused			: "paused",
		    stopped			: "stopped"
	    },

    });
};
$(function(){

    $('.brand_carousel').addClass('loader');
$(window).load(function() {
	 $('.brand_carousel').removeClass('loader'); // remove the loader when window gets loaded.
$('#brand_wrapper').show(400);
sliderInit();

}); 
});

</script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['this_path']->value;?>
js/jquery.carouFredSel-6.1.0.js"></script> 
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['this_path']->value;?>
js/jquery.touchSwipe.min.js"></script> 
<div class="brand_carousel responsive">
	<div id="brand_wrapper">
		<?php  $_smarty_tpl->tpl_vars['brand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['brand']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['brandcarousel']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->key => $_smarty_tpl->tpl_vars['brand']->value){
$_smarty_tpl->tpl_vars['brand']->_loop = true;
?>
		    <a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['brand']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['brand']->value['link_rewrite']), 'htmlall', 'UTF-8');?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['brand']->value['name'], 'htmlall', 'UTF-8');?>
" class="lnk_img">
				<img src="<?php echo $_smarty_tpl->tpl_vars['img_manu_dir']->value;?>
<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['brand']->value['id_manufacturer'], 'htmlall', 'UTF-8');?>
-<?php echo $_smarty_tpl->tpl_vars['imageName']->value;?>
.jpg" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['brand']->value['name'], 'htmlall', 'UTF-8');?>
" width="<?php echo $_smarty_tpl->tpl_vars['imageSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['imageSize']->value['height'];?>
" />
			</a>
		<?php } ?>
	</div>
	<a class="prev" id="brand_prev" href="#"><span><?php echo smartyTranslate(array('s'=>'prev','mod'=>'addbrandcarousel'),$_smarty_tpl);?>
</span></a>
	<a class="next" id="brand_next" href="#"><span><?php echo smartyTranslate(array('s'=>'next','mod'=>'addbrandcarousel'),$_smarty_tpl);?>
</span></a>
</div>
<!-- MODULE Brand Carousel --><?php }} ?>