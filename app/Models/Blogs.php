<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class blogs extends Sximo  {
	
	protected $table = 'tb_blogs';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_blogs.* FROM tb_blogs  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_blogs.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
