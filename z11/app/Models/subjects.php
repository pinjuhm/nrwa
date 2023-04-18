<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subjects extends Model
{
    protected $table = 'subjects';
    protected $primaryKey = 'id';
    protected $fillable =['start_date','end_date','name'];
    
}
