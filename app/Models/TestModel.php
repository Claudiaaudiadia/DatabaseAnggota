<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestModel extends Model
{
    use HasFactory;
    protected $table = 'anggota';
    protected $primaryKey = '';

    protected $fillable = [
        'id',
        'Nama_lengkap',
        'created_at',
        'updated_at',
    ];
    
}
