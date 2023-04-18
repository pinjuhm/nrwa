<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    public $table = 'students';
    public $timestamps=false;
    protected $primarykey='roll_num';

    public $fillable = [ 'first_name', 'last_name','department_id','phone','admission_date','cet_marks'];
}
