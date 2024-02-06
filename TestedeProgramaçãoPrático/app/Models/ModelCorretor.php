<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelCorretor extends Model
{
    protected $table = 'corretor';
    protected $fillable = ['cpf', 'creci', 'nome'];

    use HasFactory;
}
