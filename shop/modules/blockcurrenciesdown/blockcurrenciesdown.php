<?php

if (!defined('_PS_VERSION_'))
	exit;
	
class BlockCurrenciesdown extends Module
{
	public function __construct()
	{
		$this->name = 'blockcurrenciesdown';
		$this->tab = 'tools';
		$this->version = 1.0;
	

		parent::__construct();
		
		$this->displayName = $this->l('Currency block dropdown');
		$this->description = $this->l('Adds a block for selecting a currency');
	}

	public function install()
	{
		return (parent::install() AND $this->registerHook('displayFooter') AND $this->registerHook('displayHeader'));
	}

	/**
	* Returns module content for header
	*
	* @param array $params Parameters
	* @return string Content
	*/
	public function hookDisplayFooter($params)
	{
		if (Configuration::get('PS_CATALOG_MODE'))
			return ;
	
		global $smarty;
		$currencies = Currency::getCurrencies();
		if (!sizeof($currencies))
			return '';
		$smarty->assign('currencies', $currencies);
		return $this->display(__FILE__, 'blockcurrenciesdown.tpl');
	}
	
	public function hookDisplayLeftColumn($params)
	{
		if (Configuration::get('PS_CATALOG_MODE'))
			return ;
	
		global $smarty;
		$currencies = Currency::getCurrencies();
		if (!sizeof($currencies))
			return '';
		$smarty->assign('currencies', $currencies);
		return $this->display(__FILE__, 'blockcurrenciesdown.tpl');
	}
	
	public function hookDisplayRightColumn($params)
	{
		if (Configuration::get('PS_CATALOG_MODE'))
			return ;
	
		global $smarty;
		$currencies = Currency::getCurrencies();
		if (!sizeof($currencies))
			return '';
		$smarty->assign('currencies', $currencies);
		return $this->display(__FILE__, 'blockcurrenciesdown.tpl');
	}
	
	public function hookDisplayHeader($params)
	{
		if (Configuration::get('PS_CATALOG_MODE'))
			return ;
	return $this->display(__FILE__, 'blockcurrencies-header.tpl');
	}
}

?>
