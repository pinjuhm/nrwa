<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\marks;

class students extends Model
{
   protected $table='students';
    protected $fillable =['roll_num','first_name','last_name','phone','admission_date','cet_marks'];

    public function marks(){
        return $this->hasMany(marks::class,'student_roll_num','roll_num');
    }


}




