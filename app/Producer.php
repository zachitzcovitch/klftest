<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producer extends Model {
    protected $table = 'Producers';
    protected $primaryKey = 'prodID';
	protected $fillable = ['prodName', 'prodPriority', 'prodURL'];

}
