<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataAnggota extends Model
{
    use HasFactory;
    
    // Specify the table if it's not following Laravel's naming conventions
    protected $table = 'tb01';

    // Optionally specify the primary key if it's not 'id'
    // protected $primaryKey = 'your_primary_key_column';

    // The attributes that are mass assignable
    protected $fillable = [
        'No_CIF',
        'No_Alt',
        'Nama_Anggota',
        'No_HP',
        'Jenis_Pekerjaan',
        'Status_CIF',
        'No_KTP',
        'No_NPWP',
        'Email',
        'Tempat_Lahir',
        'Tgl_Lahir',
        'Agama',
        'Status_Kawin',
        'Pendidikan',
        'Etnis',
        'Nama_Panggilan/Alias',
        'Umur',
        'RT_KTP',
        'RW_KTP',
        'Kelurahan_KTP',
        'Kecamatan_KTP',
        'Kota_KTP',
        'Provinsi_KTP',
        'Alamat_D',
        'Kelurahan_D',
        'Kecamatan_D',
        'Kota_D',
        'Provinsi_D',
        'Kodepos_D',
        'Nama_Ibu',
        'Nama_AW1',
        'Nama_AW2',
        'Nama_AW3',
        'Jenis_Kelamin',
        'Alamat',
        'Jenis_Nasabah',
        'Jenis_Anggota',
        'Upload_Dokumen',
        'Cabang',
        'Tanggal_Pembukaan',
        'Tujuan_Pembukaan',
        'Kategori_Pinjaman',
        'Total_Penghasilan',
        'Officer',
        'foto',      
    ];
}