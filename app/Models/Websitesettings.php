<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class websitesettings extends Sximo  {
	
	protected $table = 'tb_website_settings';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_website_settings.* FROM tb_website_settings  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_website_settings.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
