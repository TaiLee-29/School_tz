<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'logo',
        'website'
    ];
    /**
     * @var mixed
     */

    public function employees(){
        return $this->hasMany(\App\Models\Employee::class);
    }

}
