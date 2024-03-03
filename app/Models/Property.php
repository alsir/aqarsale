<?php

namespace App\Models;

use App\Models\Area;
use App\Models\Category;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Property extends Model
{
    use HasFactory;
    protected $fillable = [
        'main_photo',
        'address_ar',
        'address_en',
        'description_ar',
        'description_en',
        'longitude',
        'latitude',
        'squaresmeters',
        'bedrooms_number',
        'bathrooms_number',
        'halls_number',
        'level',
    ];
    public function area()
    {
        return $this->belongsTo(Area::class , 'id','area_id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class , 'id','category_id');
    }
    public function Customer()
    {
        return $this->belongsTo(Customer::class , 'id','customer_id');
    }
    public function image()
    {
        return $this->hasMany(Image::class , 'id','image_id');
    }
}
