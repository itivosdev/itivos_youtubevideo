<?php

if (!defined('_PS_VERSION_')) {
	exit;
}

require_once(dirname(__FILE__).'/classes/ItivosYoutubeVideo.php');

class Itivos_YoutubeVideo extends Module
{   
	public function __construct()
	{
		$this->name ='itivos_youtubevideo';
		$this->tab ='front_office_features';
		$this->version ='1.0.0';
		$this->author ='Bernardo Fuentes';
		$this->bootstrap= true;
		$this->ps_versions_compliancy = array('min'=>'1.7','max'=> _PS_VERSION_);

		parent::__construct();
		$this->displayName = 'Itivos Youtube Video';
		$this->description = 'Show a responsive video from youtube on the product page.';
	}

	public function install()
	{
		if(!parent::install())
			return false;

	    if(!$this->installDb())
	    return false;

	    if(!$this->registerHook('displayAdminProductsMainStepLeftColumnMiddle') ||
	       !$this->registerHook('actionProductUpdate') ||
	       !$this->registerHook('actionAdminControllerSetMedia') ||
	       !$this->registerHook('actionProductDelete') ||
	       !$this->registerHook('displayFooterProduct') ||
	       !$this->registerHook('header')
    	) 
	    return false;

	     else { 
			return true;
		}
	}	

   public function installDb()
   {
   		$return = true;
        $return &= Db::getInstance()->execute('
                CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'itivos_youtubevideo` (
                `id_youtube_video` INT UNSIGNED NOT NULL AUTO_INCREMENT,
                `id_product_ps` INT UNSIGNED NOT NULL,
                `id_product_attribute` INT(10) UNSIGNED NULL,
                `id_shop` INT UNSIGNED NOT NULL,
                `url` text NOT NULL,
                PRIMARY KEY (`id_youtube_video`)
            ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8 ;'
        );

        return $return;
   }
   public function uninstallDB($drop_table = true)
   {   
    	$ret = true;
    	if ($drop_table) {
     	   $ret &= Db::getInstance()->execute('DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'itivos_youtubevideo`');
	    }
	    return $ret;
   }
   public function uninstall()
   {
    if(!parent::uninstall() ||
			!Configuration::deleteByName('ITIVOS_YOUTUBEVIDEO') ||
      !$this->uninstallDB())   
		{
			return false;
		}
		else 
		{
			return true;
		}
   }
   public function hookHeader($params)
   {
   		$this->context->controller->addCSS($this->_path.'views/css/front.css');
   }

  public function hookActionAdminControllerSetMedia($params) 
  {
    $this->context->controller->addJS($this->_path.'/views/js/js.js');
    $this->context->controller->addCSS($this->_path.'/views/css/css.css');
  }

  public function hookDisplayFooterProduct($params)
  {

  	$id_shop       = (int)$this->context->shop->id;
	$id_product    = $params['product']['id_product'];
	
	$data                    = array();
	$data['id_shop']         = $id_shop;
	$data['id_product']      = $id_product;
	$data['id_product_attribute'] = 0;

	$data_video_product = ItivosYoutubeVideo::selectRelationsProduct($data);

  	$this->smarty->assign('data_video_product', $data_video_product);
  	return $this->display(__FILE__,'DisplayFooterProduct.tpl');
  }
  public function hookDisplayAdminProductsMainStepLeftColumnMiddle($params)
  {	
	$id_shop       = (int)$this->context->shop->id;
	$id_product    = $params['id_product'];
	$product       = $params['product'];
	
	$parametros                    = array();
	$parametros['id_shop']         = $id_shop;
	$parametros['id_product']      = $id_product;
	$parametros['id_product_attribute'] = 0;

	$config_product = ItivosYoutubeVideo::selectRelationsProduct($parametros);

	if ($config_product==null) {
		$config_product = array();
	}
	      
	$this->smarty->assign('config_product',$config_product);

  	return $this->display(__FILE__,'DisplayAdminProductsMainStepLeftColumnMiddle.tpl');
  }
  public function hookActionProductUpdate($params)
  {
	$id_shop       = (int)$this->context->shop->id;
	$id_product    = $params['id_product'];
	$product       = $params['product'];
	
	$data_video_product                    		= array();
	$data_video_product['id_shop']         		= $id_shop;
	$data_video_product['id_product']      		= $id_product;
	$data_video_product['id_product_attribute'] = 0;
	$data_video_product['url']                  = Tools::getValue('url_video');

	ItivosYoutubeVideo::RelationsProduct($data_video_product);

	return true;
  }
}
