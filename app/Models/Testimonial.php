<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class testimonial extends Sximo  {
	
	protected $table = 'tb_testimonial';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_testimonial.* FROM tb_testimonial  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_testimonial.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
