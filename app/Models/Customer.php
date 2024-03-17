<?php

namespace App\Models;

use App\Models\Property;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Customer as Authenticatable;

class Customer extends Authenticatable 
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'name',
        'phone_number',
        'password',
    ];
    protected $hidden = [
        'password',
    ];
    public function properties()
    {
        return $this->hasMany(Property::class);
    }
    
}
