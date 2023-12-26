<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jewel extends Model
{
    use HasFactory;

    protected $fillable = [
        'Name',
        'Gram',
        'Color',
        'Image',
        'CategoryId'
    ];

    public function Category() {
        return $this->belongsTo(Category::class);
    }
    
}
