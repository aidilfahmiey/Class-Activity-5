<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    protected $fillable = ['matricnum','name','gender','dob','citizenship','status','religion','active','years','ic','email'];
    public $timestamps = false;
}
