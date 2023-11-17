<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class logs extends Model
{
    use HasFactory;
    protected $table = 'logs';
    protected $primarykey = 'id_logs';
    protected $fillable = ['table', 'id_logs', 'role', 'tanggal', 'jam', 'aksi', 'record'];
}
