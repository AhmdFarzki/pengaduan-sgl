<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $table = 'pengaduan';

    protected $primaryKey = 'id_pengaduan';

    protected $fillable = [
        'tgl_pengaduan',
        'nik',
        'judul_laporan',
        'isi_laporan',
        'tgl_kejadian',
        'lokasi_kejadian',
        'kategori_id',
        'foto',
        'status',
    ];

    public function user() {
        return $this->hasOne(Masyarakat::class, 'nik', 'nik');
    }

    public function kategori() {
        return $this->hasOne(Kategori::class, 'id_kategori', 'id_kategori');
    }
}
