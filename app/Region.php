<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model {
    protected $table = 'Regions';
    protected $primaryKey = 'regionID';
	protected $fillable = ['regionName', 'regionCountryID'];

	// has one country
	// belongs to products
    public function country() {
      return $this->hasOne('App\Country', 'CountryID', 'regionCountryID');
    }
    public function product() {
      return $this->belongsTo('App\Product', 'prodRegionID');
    }

}
