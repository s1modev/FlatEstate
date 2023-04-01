<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Page extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'name',
        'slug', 
        'content',
        'status'
    ];

public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
