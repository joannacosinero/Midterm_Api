<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['user_id', 'product_name', 'description'];
    public function user() {
        return $this->belongsTo('App\User');
    }

    public function oderitems() {
        return $this->belongsTo('App\OrderItem');
    }
}
