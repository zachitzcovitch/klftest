<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model {
    protected $table = 'Suppliers';
    protected $primaryKey = 'suppID';
	protected $fillable = ['suppName', 'suppAddr1', 'suppAddr2', 'suppCity', 'suppPostalCode', 'suppCountryID', 'suppContact', 'suppTel', 'suppEmail', 'suppURL', 'suppActive'];

	// belongs to products
	// has one country
    public function country() {
      return $this->hasOne('App\Country', 'CountryID');
    }
    public function product() {
      return $this->belongsTo('App\Product', 'prodIDSupplier');
    }

}
