<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Packaging extends Model {
    protected $table = 'Packaging';
    protected $primaryKey = 'packID';
	protected $fillable = ['packQty'];

    public function product() {
      return $this->belongsTo('App\Product', 'prodPack');
    }

}
