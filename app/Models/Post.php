<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Post extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'title',
        'slug',
        'deal',
        'description',
        'country',
        'city',
        'address',
        'lat',
        'lng',
        'bedrooms_number',
        'bathrooms_number',
        'surface',
        'price',
        'garage',
        'security',
        'parking',
        'balcony',
        'swimming_pool',
        'garden',
        'terrace',
        'category',
        'condition',
    ];

    public function images(){
        return $this->hasMany(Image::class, 'post_id');
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}