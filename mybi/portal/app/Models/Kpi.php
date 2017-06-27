<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class kpi extends Sximo  {
	
	protected $table = 'KPI';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT KPI.* FROM KPI  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE KPI.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
