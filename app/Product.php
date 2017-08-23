<?php

/**
 * Created by PhpStorm.
 * User: VCCORP
 * Date: 7/16/2017
 * Time: 8:52 PM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function supplier(){
        return $this->belongsTo('App\Supplier');
    }
}
