<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Factory extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'factory_name',
        'location',
        'email',
        'website',
    ];

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}
