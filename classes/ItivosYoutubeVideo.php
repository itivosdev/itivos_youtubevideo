<?php

class ItivosYoutubeVideo extends ObjectModel
{
	public function RelationsProduct($params)
	{	
		$sql 	  = 'SELECT * FROM '._DB_PREFIX_.'itivos_youtubevideo WHERE id_product_ps ='.$params['id_product'].' and id_product_attribute ='.$params['id_product_attribute'].' and id_shop='.$params['id_shop'].'';
		$data     = Db::getInstance()->ExecuteS($sql);
		if ($data==null) {
			$sql 			       =  Db::getInstance()->insert('itivos_youtubevideo', array(
			'id_shop'    	       => pSQL($params['id_shop']),
			'id_product_ps'        => pSQL($params['id_product']),
			'id_product_attribute' => pSQL($params['id_product_attribute']),
			'url'       		   => pSQL($params['url']),
			));
		}
		else {
			$where 	 = 'id_product_ps = '.$params['id_product'].' and id_product_attribute = '.$params['id_product_attribute'].' and id_shop='.$params['id_shop'].'';
			Db::getInstance()->update('itivos_youtubevideo',
				array(
			 		'url' => pSQL($params['url']),
				),
				$where,
				$limit = 0,
				$null_values = false,
				$use_cache = true,
				$add_prefix = true);
		}

		return true;
	}
	public function selectRelationsProduct($params)
	{	
		$sql 	  = 'SELECT * FROM '._DB_PREFIX_.'itivos_youtubevideo WHERE id_product_ps='.$params['id_product'].' and id_shop='.$params['id_shop'].' and id_product_attribute = '.$params['id_product_attribute'].'';
		$data     = Db::getInstance()->ExecuteS($sql);
		if ($data!=null) {
			$data     = $data[0];
		}

		return $data;
	}
}

?>
