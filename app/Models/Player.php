<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model {

    use HasFactory;

    protected $fillable = [
        'name',
        'best_date',
        'first_score',
        'best_score',
        'last_score',
    ];

}