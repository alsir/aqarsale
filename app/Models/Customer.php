<?php

namespace App\Models;

use App\Models\Property;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;


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
    public function properties()
    {
        return $this->hasMany(Property::class);
    }
    
}
