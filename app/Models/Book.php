<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table ='books';
    protected $primarykey='id';
    protected $fillable=['book_name','author_name','category_Id','qty','image','publish_year','storage_date'];
}
