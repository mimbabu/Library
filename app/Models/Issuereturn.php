<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issuereturn extends Model
{
    use HasFactory;

 protected $table ='issuereturns';

 protected $fillable=['user_id','book_name','issue_date','return_date','status'];
}
