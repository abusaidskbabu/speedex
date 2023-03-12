<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class aboutus extends Sximo  {
	
	protected $table = 'tb_about_us';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_about_us.* FROM tb_about_us  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_about_us.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
