<?php

use App\Http\controllers\Controllers;
namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    protected $table = 'categories';

  public function categories() {
    return $this->belongToMany('App/Category');
    }
}
