<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetProfile extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'type', 'name', 'gender', 'breed', 'pedigree_tested', 'dna_tested', 'vaccinated', 'size', 'age', 'weight', 'photos', 'city'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
