<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $table = 'cards';
     protected $fillable = [
        'person_name',
        'email',
        'short_description',
        'contacts',
        'single_address'
    ];
}
