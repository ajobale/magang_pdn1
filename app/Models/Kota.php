<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kota extends Model
{
    use HasFactory;

    protected $table = 'kota';

    protected $fillable = ['kota', 'id_provinsi'];

    public function resumer():BelongsTo
    {
        return $this->belongsTo(Provinsi::class);
    }

}
