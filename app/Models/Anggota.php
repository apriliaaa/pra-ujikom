<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $table = 'tblanggota';
    protected $primaryKey = 'no_anggota';
    protected $fillable = ['no_anggota', 'nama', 'pokok', 'wajib', 'saldo'];
}
