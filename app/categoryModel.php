<?php

use App\Http\controllers\Controllers;
namespace App;

use Illuminate\Database\Eloquent\Model;

class categoryModel extends Model
{
   protected $table = 'categories';

  public function products() {
    return $this->belongToMany('App\Product');
  }
}
