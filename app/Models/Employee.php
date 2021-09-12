<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'school_id',
    ];

    public function school(){
        return $this->belongsTo(School::class);
    }
    public function allschools(){
        return $schools = School::all();
    }
}
