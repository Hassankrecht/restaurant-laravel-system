<?php

namespace App\Models\Food;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    protected $table = 'foods'; // Specify the table name if it differs from the model name

    protected $fillable = [
        'name',
        'price',
        'description',
        'category',
        'image',
    ];
    public $timestamps = true; // Enable timestamps if your table has created_at and updated_at columns
}