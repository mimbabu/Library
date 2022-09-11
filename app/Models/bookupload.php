<?php

namespace App\Models;

use App\Http\Controllers\Book\BookuploadController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookupload extends Model
{
    use HasFactory;
 protected $table ='bookuploads';
 protected $primarykey='id';
 protected $fillable=['book_name','author_name','category_Id','qty','cover','publish_year','storage_date'];
}
