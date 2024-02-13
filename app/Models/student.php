<?php 
namespace App\Models;
use illuminate\Database\Eloquent\Model;


class Student extends Model {
    protected $table = "student";
    protected $fillable = ['name','grade']; 
}