<?php
namespace zacksleo\menu;

use Yii;
use yii\helpers\Json;
use zacksleo\menu\models\Model;

class Menu extends \yii\base\Module {
	public $controllerNamespace = 'zacksleo\menu\controllers';
	public $defaultRoute = 'creator';

public function init(){
		parent::init();	  // custom initialization code goes here
	}
	
public static function NavbarLeft($id){
		$m = Model::findModel($id);
		$m = Json::decode($m->menu);
		return $m['left'];
	}

public static function NavbarRight($id){
		$m = Model::findModel($id);
		$m = Json::decode($m->menu);
		return $m['right'];
	}
}
