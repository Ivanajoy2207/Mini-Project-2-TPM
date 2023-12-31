<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'Name'
    ];

    public function Jewels() {
        return $this->hasMany(Jewel::class);
    }
}
