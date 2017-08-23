<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = "categories";
    public function type(){
       return $this->belongsTo('App\Type','type_id');
    }
    }
