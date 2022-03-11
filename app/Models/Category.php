<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'tbl_categories';
    public function cat_subcat()
    {
        return $this->hasMany('App\Models\SubCategory');
    }
}
