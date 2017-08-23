<?php
/**
 * Created by PhpStorm.
 * User: VCCORP
 * Date: 7/16/2017
 * Time: 8:52 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    public function Supplier(){
        return $this->belongsTo('App\Supplier');
    }
}