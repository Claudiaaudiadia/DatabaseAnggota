<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb01', function (Blueprint $table) {
            $table->string('No_CIF');
            $table->string('No_Alt');
            $table->string('Nama_Anggota');
            $table->string('No_HP');
            $table->string('Jenis_Pekerjaan');
            $table->string('Status_CIF');
            $table->string('No_KTP');
            $table->string('No_NPWP');
            $table->string('Email');
            $table->string('Tempat_Lahir');
            $table->string('Tgl_Lahir');
            $table->string('Agama');
            $table->string('Status_Kawin');
            $table->string('Pendidikan');
            $table->string('Etnis');
            $table->string('Nama_Panggilan/Alias');
            $table->string('Umur');
            $table->string('RT_KTP');
            $table->string('RW_KTP');
            $table->string('Kelurahan_KTP');
            $table->string('Kecamatan_KTP');
            $table->string('Kota_KTP');
            $table->string('Provinsi_KTP');
            $table->string('Alamat_D');
            $table->string('Kelurahan_D');
            $table->string('Kecamatan_D');
            $table->string('Kota_D');
            $table->string('Provinsi_D');
            $table->string('Kodepos_D');
            $table->string('Nama_Ibu');
            $table->string('Nama_AW1');
            $table->string('Nama_AW2');
            $table->string('Nama_AW3');
            $table->string('Jenis_Kelamin');
            $table->string('Alamat');
            $table->string('Jenis_Nasabah');
            $table->string('Jenis_Anggota');
            $table->string('Upload_Dokumen');
            $table->string('Cabang');
            $table->string('Tanggal_Pembukaan');
            $table->string('Tujuan_Pembukaan');
            $table->string('Kategori_Pinjaman');
            $table->string('Total_Penghasilan');
            $table->string('Officer');
            $table->string('foto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb01');
    }
};
