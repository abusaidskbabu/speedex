<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class sliders extends Sximo  {
	
	protected $table = 'tb_home_slider';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_home_slider.* FROM tb_home_slider  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_home_slider.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
