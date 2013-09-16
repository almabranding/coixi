<!-- MODULE Brand Carousel -->
<script type="text/javascript">
{literal}
function sliderInit() {
	$("#brand_wrapper").carouFredSel({
		debug	: true,
		circular: {/literal}{$brand_carousel_cir}{literal},
	    infinite: {/literal}{$brand_carousel_inf}{literal},
	    align   : "center",
		responsive: true,
		width: '100%',
	    auto	: {
    		play	: {/literal}{$brand_carousel_auto}{literal},
	    	timeoutDuration : {/literal}{$brand_carousel_pause_time}{literal}
	    },
	    items	: {
			visible: {
					min: 1,
					max: {/literal}{$brand_carousel_display_items}{literal}
					 },
			start	: {/literal}{$brand_carousel_rand}{literal},
			width   : "{/literal}{$imageSize.width}{literal}",
			height  : "{/literal}{$imageSize.height}{literal}"
			
		},		
		scroll	: {
			items	: {/literal}{$brand_carousel_scroll_items}{literal},
			fx	    : "{/literal}{$brand_carousel_fx}{literal}",
			duration: {/literal}{$brand_carousel_fx_time}{literal},
			pauseOnHover: {/literal}{$brand_carousel_mouseover}{literal}
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
{/literal}
</script>
<script type="text/javascript" src="{$this_path}js/jquery.carouFredSel-6.1.0.js"></script> 
<script type="text/javascript" src="{$this_path}js/jquery.touchSwipe.min.js"></script> 
<div class="brand_carousel responsive">
	<div id="brand_wrapper">
		{foreach $brandcarousel as $brand}
		    <a href="{$link->getmanufacturerLink($brand.id_manufacturer, $brand.link_rewrite)|escape:'htmlall':'UTF-8'}" title="{$brand.name|escape:'htmlall':'UTF-8'}" class="lnk_img">
				<img src="{$img_manu_dir}{$brand.id_manufacturer|escape:'htmlall':'UTF-8'}-{$imageName}.jpg" alt="{$brand.name|escape:'htmlall':'UTF-8'}" width="{$imageSize.width}" height="{$imageSize.height}" />
			</a>
		{/foreach}
	</div>
	<a class="prev" id="brand_prev" href="#"><span>{l s='prev' mod='addbrandcarousel'}</span></a>
	<a class="next" id="brand_next" href="#"><span>{l s='next' mod='addbrandcarousel'}</span></a>
</div>
<!-- MODULE Brand Carousel -->