<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class anak extends Model
{
    use HasFactory;
    protected $table = 'anak';
    protected $primarykey = 'id_anak';
    protected $fillable = ['no_kk', 'id_anak', 'nama_anak', 'tanggal_lahir', 'jenis_kelamin', 'nama_orangtua', 'anak_ke', 'alamat'];
    
    protected $timestamp = false;

    function kepala_keluarga(): BelongsTo
    {
        return $this->belongsTo(kepalakeluarga::class, 'no_kk', 'no_kk');
    }
}
