<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model
{
    use HasFactory;
    protected $table = 'tblpinjam';
    protected $primaryKey = 'no_pinjam';
    protected $fillable = ['no_pinjam', 'tanggal', 'no_anggota', 'jmlpinjam', 'kodeksr'];
}
