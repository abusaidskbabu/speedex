<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class partners extends Sximo  {
	
	protected $table = 'tb_partners';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_partners.* FROM tb_partners  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_partners.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
