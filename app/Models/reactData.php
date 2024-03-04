<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reactData extends Model
{
    use HasFactory;
    protected $table ='reactdatas';
    protected  $fillable =['id', 'name', 'email', 'contact', 'city', 'created_at', 'updated_at'] ;
}
