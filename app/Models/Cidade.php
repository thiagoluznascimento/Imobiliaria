<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    use HasFactory;
    protected $fillable = ['nome']; //eu permito que o campo 'nome' no BD seja preenchido em atribuição em massa.
    
}
