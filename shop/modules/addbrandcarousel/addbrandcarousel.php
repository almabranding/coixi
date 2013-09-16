<?php
if (!defined('_PS_VERSION_'))
    exit;
class AddBrandCarousel extends Module
{
    public function __construct()
    {
        $this->name = 'addbrandcarousel';
        $this->tab = 'front_office_features';
        $this->version = 1.0;
		$this->author = 'Serega Sakun';
        $this->need_instance = 0;
        parent::__construct();
        $this->displayName = $this->l('Add Brand Carousel');
        $this->description = $this->l('Add Brand Carousel on the home page.');
    }
    public function install()
    {
        Configuration::updateValue('BRAND_CAROUSEL_IMAGE_TYPE', '');
		Configuration::updateValue('BRAND_CAROUSEL_DISPLAY_ITEMS', 8);
		Configuration::updateValue('BRAND_CAROUSEL_SCROLL_ITEMS', 8);
		Configuration::updateValue('BRAND_CAROUSEL_PAUSE_TIME', 5000);
		Configuration::updateValue('BRAND_CAROUSEL_CIRCULAR', 1);
		Configuration::updateValue('BRAND_CAROUSEL_INFINITE', 1);
		Configuration::updateValue('BRAND_CAROUSEL_MOUSEOVER_PAUSE', 1);
		Configuration::updateValue('BRAND_CAROUSEL_AUTO_START', 1);
		Configuration::updateValue('BRAND_CAROUSEL_RANDOM', 1);
		Configuration::updateValue('BRAND_CAROUSEL_FX', 'none');
		Configuration::updateValue('BRAND_CAROUSEL_FX_TIME', 500);
		if (parent::install() == false OR !$this->registerHook('header') OR !$this->registerHook('Home'))
            return false;
        return true;
    }
	public function uninstall()
    {
        if (!parent::uninstall() == false ||
		    !Configuration::deleteByName('BRAND_CAROUSEL_IMAGE_TYPE') ||
			!Configuration::deleteByName('BRAND_CAROUSEL_DISPLAY_ITEMS') ||
			!Configuration::deleteByName('BRAND_CAROUSEL_SCROLL_ITEMS') ||
			!Configuration::deleteByName('BRAND_CAROUSEL_PAUSE_TIME') ||
			!Configuration::deleteByName('BRAND_CAROUSEL_CIRCULAR') ||
			!Configuration::deleteByName('BRAND_CAROUSEL_INFINITE') ||
			!Configuration::deleteByName('BRAND_CAROUSEL_MOUSEOVER_PAUSE') ||
			!Configuration::deleteByName('BRAND_CAROUSEL_AUTO_START') ||
			!Configuration::deleteByName('BRAND_CAROUSEL_RANDOM') ||
			!Configuration::deleteByName('BRAND_CAROUSEL_FX') ||
			!Configuration::deleteByName('BRAND_CAROUSEL_FX_TIME')
		)
        parent::uninstall();
    }
	public function getContent()
	{
		if (Tools::isSubmit('brandCarouselFormSubmit'))
		{
		    $brand_carousel_image_type = Tools::getValue('brand_carousel_image_type');
			$brand_carousel_display_items = Tools::getValue('brand_carousel_display_items');
			$brand_carousel_scroll_items = Tools::getValue('brand_carousel_scroll_items');
			$brand_carousel_pause_time = Tools::getValue('brand_carousel_pause_time');
			$brand_carousel_auto_start = Tools::getValue('brand_carousel_auto_start');
			$brand_carousel_random = Tools::getValue('brand_carousel_random');
			$brand_carousel_circular = Tools::getValue('brand_carousel_circular');
			$brand_carousel_infinite = Tools::getValue('brand_carousel_infinite');
			$brand_carousel_mouseover_pause = Tools::getValue('brand_carousel_mouseover_pause');
			$brand_carousel_fx = Tools::getValue('brand_carousel_fx');
			$brand_carousel_fx_time = Tools::getValue('brand_carousel_fx_time');

			Configuration::updateValue('BRAND_CAROUSEL_IMAGE_TYPE', $brand_carousel_image_type);
			Configuration::updateValue('BRAND_CAROUSEL_DISPLAY_ITEMS', $brand_carousel_display_items);
			Configuration::updateValue('BRAND_CAROUSEL_SCROLL_ITEMS', $brand_carousel_scroll_items);
			Configuration::updateValue('BRAND_CAROUSEL_PAUSE_TIME', $brand_carousel_pause_time);
			Configuration::updateValue('BRAND_CAROUSEL_AUTO_START', $brand_carousel_auto_start);
			Configuration::updateValue('BRAND_CAROUSEL_RANDOM', $brand_carousel_random);
			Configuration::updateValue('BRAND_CAROUSEL_CIRCULAR', $brand_carousel_circular);
			Configuration::updateValue('BRAND_CAROUSEL_INFINITE', $brand_carousel_infinite);
			Configuration::updateValue('BRAND_CAROUSEL_MOUSEOVER_PAUSE', $brand_carousel_mouseover_pause);
			Configuration::updateValue('BRAND_CAROUSEL_FX', $brand_carousel_fx);
			Configuration::updateValue('BRAND_CAROUSEL_FX_TIME', $brand_carousel_fx_time);
			$this->_html .= '<div class="conf">'.$this->l('Settings updated').'</div>';
	    }
		$this->_html .= '<h2>'.$this->displayName.'<span style=" float:right;">Support: <br/> <span style="font-size:14px;">Mail - <em style="font-weight:normal;"></em>,  Skype - <em style="font-weight:normal;"></em></span> </span></h2>';	
		$images = ImageType::getImagesTypes('manufacturers');
		$this->_html .= '
		<div class="clearfix"></div>
		<form action="'.Tools::safeOutput($_SERVER['REQUEST_URI']).'" method="post">
			<fieldset>
			<legend>'.$this->l('Settings').'</legend><br/>
			    <label>'.$this->l('Select image type').'</label>
			    <div class="margin-form">
			        <select name="brand_carousel_image_type">';
		        foreach ($images AS $key => $image)
		        {
				    $this->_html .= '<option value="' . $image['name'] . '"'.(Configuration::get('BRAND_CAROUSEL_IMAGE_TYPE') == $image['name'] ? ' selected="selected"' : '').'>' . $image['name'] . ' (' . $image['width'] . 'x' . $image['height'] . ')</option>';
		        }
		        $this->_html .= '
				    </select>
				</div>
								<label>'.$this->l('Transition').'</label>
				<div class="margin-form">
					<select name="brand_carousel_fx" style="width:100px;" />
					    <option value="none"'.(Configuration::get('BRAND_CAROUSEL_FX') == 'none' ? ' selected="selected"' : '').'>'.$this->l('None').'</option>
					    <option value="scroll"'.(Configuration::get('BRAND_CAROUSEL_FX') == 'scroll' ? ' selected="selected"' : '').'>'.$this->l('Scroll').'</option>
						<option value="directscroll"'.(Configuration::get('BRAND_CAROUSEL_FX') == 'directscroll' ? ' selected="selected"' : '').'>'.$this->l('Direct scroll').'</option>
						<option value="fade"'.(Configuration::get('BRAND_CAROUSEL_FX') == 'fade' ? ' selected="selected"' : '').'>'.$this->l('Fade').'</option>
						<option value="crossfade"'.(Configuration::get('BRAND_CAROUSEL_FX') == 'crossfade' ? ' selected="selected"' : '').'>'.$this->l('Crossfade').'</option>
						<option value="cover"'.(Configuration::get('BRAND_CAROUSEL_FX') == 'cover' ? ' selected="selected"' : '').'>'.$this->l('Cover').'</option>
						<option value="cover-fade"'.(Configuration::get('BRAND_CAROUSEL_FX') == 'cover-fade' ? ' selected="selected"' : '').'>'.$this->l('Cover fade').'</option>
						<option value="uncover"'.(Configuration::get('BRAND_CAROUSEL_FX') == 'uncover' ? ' selected="selected"' : '').'>'.$this->l('Uncover').'</option>
						<option value="uncover-fade"'.(Configuration::get('BRAND_CAROUSEL_FX') == 'uncover-fade' ? ' selected="selected"' : '').'>'.$this->l('Uncover fade').'</option>
					</select>
				</div>
			    <label>'.$this->l('Visible items').'</label>
				<div class="margin-form">
				<input type="text" name="brand_carousel_display_items" id="brand_carousel_display_items" size="3" value="'.Tools::getValue('brand_carousel_display_items', Configuration::get('BRAND_CAROUSEL_DISPLAY_ITEMS')).'" />
				</div>
				<label>'.$this->l('Scroll items').'</label>
				<div class="margin-form">
					<input type="text" name="brand_carousel_scroll_items" id="brand_carousel_scroll_items" size="3" value="'.Tools::getValue('brand_carousel_scroll_items', Configuration::get('BRAND_CAROUSEL_SCROLL_ITEMS')).'" />
				</div>
								<label>'.$this->l('Duration').'</label>
				<div class="margin-form">
					<input type="text" name="brand_carousel_fx_time" id="brand_carousel_fx_time" size="3" value="'.Tools::getValue('brand_carousel_fx_time', Configuration::get('BRAND_CAROUSEL_FX_TIME')).'" />
				</div>
				<label>'.$this->l('Pause').'</label>
				<div class="margin-form">
					<input type="text" name="brand_carousel_pause_time" id="brand_carousel_pause_time" size="3" value="'.Tools::getValue('brand_carousel_pause_time', Configuration::get('BRAND_CAROUSEL_PAUSE_TIME')).'" />
				</div>
				<label>'.$this->l('Auto start').'</label>
				<div class="margin-form">
					<input type="radio" name="brand_carousel_auto_start" id="brand_carousel_auto_start_on" value="1" '.(Tools::getValue('brand_carousel_auto_start', Configuration::get('BRAND_CAROUSEL_AUTO_START')) ? 'checked="checked" ' : '').'/>
					<label class="t" for="brand_carousel_auto_start_on"> <img src="../img/admin/enabled.gif" alt="'.$this->l('Enabled').'" title="'.$this->l('Enabled').'" /></label>
					<input type="radio" name="brand_carousel_auto_start" id="brand_carousel_auto_start_off" value="0" '.(!Tools::getValue('brand_carousel_auto_start', Configuration::get('BRAND_CAROUSEL_AUTO_START')) ? 'checked="checked" ' : '').'/>
					<label class="t" for="brand_carousel_auto_start_off"> <img src="../img/admin/disabled.gif" alt="'.$this->l('Disabled').'" title="'.$this->l('Disabled').'" /></label>
				</div>
				<label>'.$this->l('Random').'</label>
				<div class="margin-form">
					<input type="radio" name="brand_carousel_random" id="brand_carousel_random_on" value="1" '.(Tools::getValue('brand_carousel_random', Configuration::get('BRAND_CAROUSEL_RANDOM')) ? 'checked="checked" ' : '').'/>
					<label class="t" for="brand_carousel_random_on"> <img src="../img/admin/enabled.gif" alt="'.$this->l('Enabled').'" title="'.$this->l('Enabled').'" /></label>
					<input type="radio" name="brand_carousel_random" id="brand_carousel_random_off" value="0" '.(!Tools::getValue('brand_carousel_random', Configuration::get('BRAND_CAROUSEL_RANDOM')) ? 'checked="checked" ' : '').'/>
					<label class="t" for="brand_carousel_random_off"> <img src="../img/admin/disabled.gif" alt="'.$this->l('Disabled').'" title="'.$this->l('Disabled').'" /></label>
				</div>
				<label>'.$this->l('Circular').'</label>
				<div class="margin-form">
					<input type="radio" name="brand_carousel_circular" id="brand_carousel_circular_on" value="1" '.(Tools::getValue('brand_carousel_circular', Configuration::get('BRAND_CAROUSEL_CIRCULAR')) ? 'checked="checked" ' : '').'/>
					<label class="t" for="brand_carousel_circular_on"> <img src="../img/admin/enabled.gif" alt="'.$this->l('Enabled').'" title="'.$this->l('Enabled').'" /></label>
					<input type="radio" name="brand_carousel_circular" id="brand_carousel_circular_off" value="0" '.(!Tools::getValue('brand_carousel_circular', Configuration::get('BRAND_CAROUSEL_CIRCULAR')) ? 'checked="checked" ' : '').'/>
					<label class="t" for="brand_carousel_circular_off"> <img src="../img/admin/disabled.gif" alt="'.$this->l('Disabled').'" title="'.$this->l('Disabled').'" /></label>
				</div>
				<label>'.$this->l('Infinite').'</label>
				<div class="margin-form">
					<input type="radio" name="brand_carousel_infinite" id="brand_carousel_infinite_on" value="1" '.(Tools::getValue('brand_carousel_infinite', Configuration::get('BRAND_CAROUSEL_INFINITE')) ? 'checked="checked" ' : '').'/>
					<label class="t" for="brand_carousel_infinite_on"> <img src="../img/admin/enabled.gif" alt="'.$this->l('Enabled').'" title="'.$this->l('Enabled').'" /></label>
					<input type="radio" name="brand_carousel_infinite" id="brand_carousel_infinite_off" value="0" '.(!Tools::getValue('brand_carousel_infinite', Configuration::get('BRAND_CAROUSEL_INFINITE')) ? 'checked="checked" ' : '').'/>
					<label class="t" for="brand_carousel_infinite_off"> <img src="../img/admin/disabled.gif" alt="'.$this->l('Disabled').'" title="'.$this->l('Disabled').'" /></label>
				</div>
				<label>'.$this->l('Mouseover pause').'</label>
				<div class="margin-form">
					<input type="radio" name="brand_carousel_mouseover_pause" id="brand_carousel_mouseover_on" value="1" '.(Tools::getValue('brand_carousel_mouseover_pause', Configuration::get('BRAND_CAROUSEL_MOUSEOVER_PAUSE')) ? 'checked="checked" ' : '').'/>
					<label class="t" for="brand_carousel_mouseover_on"> <img src="../img/admin/enabled.gif" alt="'.$this->l('Enabled').'" title="'.$this->l('Enabled').'" /></label>
					<input type="radio" name="brand_carousel_mouseover_pause" id="brand_carousel_mouseover_off" value="0" '.(!Tools::getValue('brand_carousel_mouseover_pause', Configuration::get('BRAND_CAROUSEL_MOUSEOVER_PAUSE')) ? 'checked="checked" ' : '').'/>
					<label class="t" for="brand_carousel_mouseover_off"> <img src="../img/admin/disabled.gif" alt="'.$this->l('Disabled').'" title="'.$this->l('Disabled').'" /></label>
				</div>
				<div class="margin-form">
				    <input class="button" name="brandCarouselFormSubmit" type="submit" value="'.$this->l('Save').'" />
				</div>
			</fieldset>
		</form>';
		return $this->_html;
	}
		function hookHeader($params)
    {
		$this->context->controller->addCSS($this->_path.'css/addbrandcarousel.css');
    }
		function hookHome($params)
    {
        global  $cookie;
		$brand_carousel_image_type = Configuration::get('BRAND_CAROUSEL_IMAGE_TYPE');
		$id_current_shop_group = Shop::getContextShopGroupID();
		$brandcarousel = Manufacturer::getManufacturers(true, $this->context->language->id, true, false, false, false, $id_current_shop_group);		
	    $this->context->smarty->assign(array(
				'imageSize' => Image::getSize($brand_carousel_image_type),
				'imageName' => $brand_carousel_image_type,
				'brandcarousel' => $brandcarousel
		));
		$brand_carousel_display_items = Configuration::get('BRAND_CAROUSEL_DISPLAY_ITEMS');
		$brand_carousel_scroll_items = Configuration::get('BRAND_CAROUSEL_SCROLL_ITEMS');
		$brand_carousel_pause_time = Configuration::get('BRAND_CAROUSEL_PAUSE_TIME');
		$brand_carousel_auto_start = Configuration::get('BRAND_CAROUSEL_AUTO_START');
		$brand_carousel_random = Configuration::get('BRAND_CAROUSEL_RANDOM');
		$brand_carousel_circular = Configuration::get('BRAND_CAROUSEL_CIRCULAR');
		$brand_carousel_infinite = Configuration::get('BRAND_CAROUSEL_INFINITE');
		$brand_carousel_mouseover_pause = Configuration::get('BRAND_CAROUSEL_MOUSEOVER_PAUSE');
		$brand_carousel_fx = Configuration::get('BRAND_CAROUSEL_FX');
		$brand_carousel_fx_time = Configuration::get('BRAND_CAROUSEL_FX_TIME');
		    if($brand_carousel_circular == 1){
		    	$brand_carousel_cir = 'true';
			}
			elseif($brand_carousel_circular == 0){
			    $brand_carousel_cir = 'false';
			}
			if($brand_carousel_infinite == 1){
		    	$brand_carousel_inf = 'true';
			}
			elseif($brand_carousel_infinite == 0){
			    $brand_carousel_inf = 'false';
			}
			if($brand_carousel_auto_start == 1){
			    $brand_carousel_auto = 'true';
			}
			elseif($brand_carousel_auto_start == 0){
			    $brand_carousel_auto = 'false';
			}
			if($brand_carousel_mouseover_pause == 1){
			    $brand_carousel_mouseover = 'true';
			}
			elseif($brand_carousel_mouseover_pause == 0){
			    $brand_carousel_mouseover = 'false';
			}
			if($brand_carousel_random == 1){
			    $brand_carousel_rand = '"random"';
			}
			else{
			    $brand_carousel_rand = 0;
			}
		    $this->context->smarty->assign(array(
				'brand_carousel_display_items' => $brand_carousel_display_items,
				'brand_carousel_scroll_items' => $brand_carousel_scroll_items,
				'brand_carousel_pause_time' => $brand_carousel_pause_time,
				'brand_carousel_auto' => $brand_carousel_auto,
				'brand_carousel_rand' => $brand_carousel_rand,
				'brand_carousel_cir' => $brand_carousel_cir,
				'brand_carousel_inf' => $brand_carousel_inf,
				'brand_carousel_mouseover' => $brand_carousel_mouseover,
				'brand_carousel_fx' => $brand_carousel_fx,
				'brand_carousel_fx_time' => $brand_carousel_fx_time,
				'this_path' => $this->_path
		    ));
        return $this->display(__FILE__, 'addbrandcarousel.tpl');
    }
}
?>