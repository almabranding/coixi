<?php

Class testmoduleAllproductsModuleFrontController extends ModuleFrontController
{
    protected $cojines,$mantas,$puffs;
    public function init()
   {
       $this->page_name = 'allproducts'; // page_name and body id
    parent::init();
   
   }
   public function initContent()
{
    parent::initContent();
 
    $products_count = $this->module->countAllProducts();
    $this->pagination($products_count); // needs to be here, so that page number and products per page are assigned to "p" and "n"
     
    $products_partial = Product::getProducts($this->context->language->id, ((int)$this->p - 1) * (int)$this->n, $this->n, 'name', 'asc');
    $products = Product::getProductsProperties($this->context->language->id, $products_partial);
    $this->cojines= new Category(6, $this->context->language->id);
    $this->mantas= new Category(7, $this->context->language->id);
    $this->puffs= new Category(8, $this->context->language->id);

    foreach ($products as $key => $product) {

            $cover = Product::getCover($product['id_product']);

            $products[$key]["id_image"] = $cover["id_image"];
        }

 
    $this->context->smarty->assign(array(
        'products' => $products,
        'homeSize' => Image::getSize('home_default'),
         'coixi' => $this->cojines,
        'mantas' => $this->mantas,
        'puffs' => $this->puffs,
        'coixiN' => $this->cojines->getProducts(null, null, null, $this->orderBy, $this->orderWay, true),
        'mantasN' => $this->mantas->getProducts(null, null, null, $this->orderBy, $this->orderWay, true),
        'puffsN' => $this->puffs->getProducts(null, null, null, $this->orderBy, $this->orderWay, true),
    ));
    $this->setTemplate('allproducts.tpl');
} 
    public function setMedia()
    {
        parent::setMedia();
        $this->addCSS(__PS_BASE_URI__.'modules/'.$this->module->name.'/css/'.$this->module->name.'.css');

    } 
    public function countAllProducts()
    {
        return Db::getInstance()->getValue('SELECT COUNT(*) from ps_product WHERE active = 1');
    }   
}
?>
