<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'id';

    protected $fillable=[
        'name',
        'address',
        'bedroom',
        'bathroom',
        'size',
        'price_sale',
        'price_rent',
        'price_rental',
        'cover',
        'description',
        
    ];

 

    public function images(){
        return $this->hasMany(Image::class);
    }
}