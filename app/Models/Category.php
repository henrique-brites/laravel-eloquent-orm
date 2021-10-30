<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name']; //categories

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}

//tabela sing. _ tabela sing.
//
// category_product