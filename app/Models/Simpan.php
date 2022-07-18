<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Simpan extends Model
{
    use HasFactory;
    protected $table = 'tblsimpan';
    protected $primaryKey = 'no_simpan';
    protected $fillable = ['no_simpan', 'tanggal', 'no_anggota', 'jmlsimpan', 'kodeksr'];
}
