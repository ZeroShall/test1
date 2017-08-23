<?php
/**
 * Created by PhpStorm.
 * User: VCCORP
 * Date: 7/16/2017
 * Time: 8:52 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Export extends Model
{
    public function Users(){
        return $this->belongsTo('App\Users');
    }
}