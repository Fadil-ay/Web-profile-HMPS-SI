<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataCa extends Model
{
    use HasFactory;

    protected $table = 'data_ca';

    protected $primaryKey = 'id_ca';
    public $incrementing = true;

    protected $keyType = 'int';
    public $timestamps = false;

    protected $fillable = [
        'nama',
        'nim',
        'alamat',
        'tgl_lahir',
        'jenis_kelamin',
        'asal_sekolah',
        'agama',
        'hobi',
        'keahlian',
        'alasan_bergabung',
        'foto'
    ];
}
