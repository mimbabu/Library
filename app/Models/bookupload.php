<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookupload extends Model
{
    use HasFactory;
 protected $table ='students';
 protected $primarykey='id';
 protected $fillable=['book_name','author_name','category_Id','qty','cover','publish_year','storage_date'];
}
