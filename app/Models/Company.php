<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'city',
        'state',
        'manager',
        'usd',
        'eur',
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class)->times;
    }

    public function workers()
    {
        return $this->belongsToMany(Company::class);
    }
    
}
