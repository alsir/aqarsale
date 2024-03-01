<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone_number',
        'password',
    ];
    protected $hidden = [
        'password',
    ];
    public function property()
    {
        return $this->hasMany(Property::class );
    }
}
