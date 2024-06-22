<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KantorPusatCreateRequest extends FormRequest
{
    
    public function authorize()
    {
        // Jika otorisasi diperlukan, ubah menjadi true atau implementasikan logika otorisasi di sini.
        return true;
    }

    public function rules()
    {
        // Mendefinisikan aturan validasi untuk permintaan.
        return [
            'photo' => 'required|file|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }

    // Opsional: Mendefinisikan pesan kesalahan kustom
    public function messages()
    {
        return [
            'nama.required' => 'Nama wajib diisi.',
            'nama.string' => 'Nama harus berupa teks.',
            'nama.max' => 'Nama tidak boleh lebih dari 255 karakter.',
            'photo.required' => 'Foto wajib diunggah.',
            'photo.file' => 'Unggahan harus berupa file.',
            'photo.mimes' => 'Foto harus berformat: jpeg, png, jpg, atau gif.',
            'photo.max' => 'Ukuran foto tidak boleh lebih dari 2MB.',
        ];
    }
}
