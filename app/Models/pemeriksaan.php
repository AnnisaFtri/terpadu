<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class pemeriksaan extends Model
{
    use HasFactory;
    protected $table = 'pemeriksaans';
    protected $primaryKey = 'id_pemeriksaans';
    protected $fillable = ['nomor_petugas', 'id_anak', 'id_pemeriksaans', 'id_jenis_surat', 
                    'id_user', 'ringkasan', 'file', 'tanggal_surat'];

    protected $timestamps = false;

    function kader(): BelongsTo
    {
        return $this->belongsTo(kader::class, 'nomor_petugas','nomor_petugas');
    }

    function anak(): BelongsTo
    {
        return $this->belongsTo(anak::class, 'id_anak', 'id_anak');
    }
}
