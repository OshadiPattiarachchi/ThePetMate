<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetAd extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'gender', 'age', 'breed', 'pedigree', 'description', 'phone_number', 'price', 'image', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
