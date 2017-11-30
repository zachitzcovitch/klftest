<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class colorProd extends Model {
    protected $table = 'colorProd';
    protected $primaryKey = 'colprodID';
	protected $fillable = ['colprodDesc'];

    public function product() {
      return $this->belongsTo('App\Product', 'prodColorID');
    }

}
