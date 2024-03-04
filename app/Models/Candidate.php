<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;
    // protected $table = 'candidates';
    protected $fillable =['name','email','contact','password','post','slogan','logo'] ;
    // id`, `name`, `email`, `contact`, `password`, `post`, `created_at`, `updated_at`, `slogan`, `logo`)
}
