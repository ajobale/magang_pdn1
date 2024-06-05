<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reviewer extends Model
{
    use HasFactory;

    protected $table = 'reviewer';
    protected $fillable = ['nama', 'email', 'judul', 'nama_kategori',  'review', 'foto'];

  
}
