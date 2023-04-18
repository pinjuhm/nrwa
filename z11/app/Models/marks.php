<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\students;

class marks extends Model
{
    
    
    protected $fillable =['id','subject_id','marks','subject_id'];
    public function students(){
        return $this->belongsTo(students::class);
    }
}
