<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\TbAndalalin as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Nicolaslopezj\Searchable\SearchableTrait;

class TbAndalalin extends Model
{
    use HasFactory, Notifiable, SearchableTrait;

    protected $searchable = [
        'columns' => [
            'full_text_searches.nama_pemohon'  => 10,
            'full_text_searches.alamat_pemohon'   => 10,
            'full_text_searches.no_tlp'   => 10,
            'full_text_searches.jenis_usaha'    => 10,
            'full_text_searches.alamat_usaha'  => 10,
            'full_text_searches.luas_lahan'   => 10,
            'full_text_searches.luas_bangunan'    => 10,
            'full_text_searches.status_lahan'    => 10,
            'full_text_searches.email'    => 10,
            'full_text_searches.surat_pemohon'    => 10,
            'full_text_searches.ktp'    => 10,
            'full_text_searches.sertifikat_tanah'    => 10,
            'full_text_searches.ktr'    => 10,
            'full_text_searches.rencana_tapak'    => 10,
            'full_text_searches.desain_bangunan'    => 10,
            'full_text_searches.company_profile'    => 10,
            'full_text_searches.sertifikat_penyusun'    => 10,
            'full_text_searches.dokumen_andalalin'    => 10,
            'full_text_searches.verifikasi'    => 10,
            'full_text_searches.code'    => 10,

        ]
    ];

    protected $fillable = [
        'nama_pemohon',
        'alamat_pemohon',
        'no_tlp',
        'jenis_usaha',
        'alamat_usaha',
        'luas_lahan',
        'luas_bangunan',
        'status_lahan',
        'email',
        'surat_pemohon',
        'ktp',
        'sertfikat_tanah',
        'ktr',
        'rencana_tapak',
        'desain_bangunan',
        'company_profile',
        'sertifikat_penyusun',
        'dokumen_andalalin',
        'verifikasi',
        'code'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
