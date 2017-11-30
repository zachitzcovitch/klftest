<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model {
    protected $table = 'Country';
    protected $primaryKey = 'CountryID';
	protected $fillable = ['CountryName', 'CountryPriority'];


	// belongs to regions
	// belongs to suppliers
    public function region() {
      return $this->belongsTo('App\Region', 'regionCountryID');
    }
    public function supplier() {
      return $this->belongsTo('App\Supplier', 'suppCountryID');
    }

}
