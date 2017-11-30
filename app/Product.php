<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    protected $table = 'Products';
    protected $primaryKey = 'prodID';
    public $timestamps = false;
  	protected $fillable = ['prodNum', 'prodName', 'prodColorID', 'prodPack', 'prodRegionID', 'prodNoRequest', 'prodIDSupplier', 'prodDateBuy', 'prodQtyBuy', 'prodFormat', 'prodPriceBuy', 'prodLabelCharge', 'prodBottleCharge', 'prodBottleChargePerson', 'prodSellPrice', 'prodSoldOut', 'prodAvailable', 'prodComment'];

	// has one packaging
	// has one region
	// has one supplier
	// has one color
    // public function packaging() {
    //   return $this->hasOne('App\Packaging', 'packID');
    // }
    public function region() {
      return $this->hasOne('App\Region', 'regionID', 'prodRegionID');
    }
    public function supplier() {
      return $this->hasOne('App\Supplier', 'suppID', 'prodIDSupplier');
    }
    public function color() {
      return $this->hasOne('App\colorProd', 'colprodID', 'prodColorID');
    }


}
