<?php
namespace App\Http\Controllers\DataAnggota;

use Illuminate\Http\Request;
use App\Models\DataAnggota;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\View\View;
use App\Http\Requests\KantorPusatCreateRequest;

class KantorPusatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request): View|ViewFactory
    {
        // Mengambil nilai 'q' dan 'start' dari query string
        $data['q'] = $request->query('q');
        $data['start'] = $request->query('start');

        // Membuat query builder untuk model DataAnggota
        $query = DataAnggota::query();

        // Menentukan logika pencarian berdasarkan parameter 'q' dan 'start'
        if ($data['q'] && $data['start']) {
            // Jika keduanya ada, gunakan keduanya untuk pencarian
            $query->where(function ($query) use ($data) {
                $query->where('No_CIF', 'like', '%' . $data['q'] . '%')
                      ->orWhere('Nama_Anggota', 'like', '%' . $data['q'] . '%')
                      ->orWhere('Panggilan', 'like', '%' . $data['q'] . '%');
            })->whereDate('Tanggal_Pembukaan', '>=', $data['start']);
        } elseif ($data['q']) {
            // Jika hanya 'q' yang ada, gunakan 'q' untuk pencarian
            $query->where('No_CIF', 'like', '%' . $data['q'] . '%')
                  ->orWhere('Nama_Anggota', 'like', '%' . $data['q'] . '%')
                  ->orWhere('Panggilan', 'like', '%' . $data['q'] . '%');
        } elseif ($data['start']) {
            // Jika hanya 'start' yang ada, gunakan 'start' untuk pencarian
            $query->whereDate('Tanggal_Pembukaan', '>=', $data['start']);
        }

        // Memasukkan hasil pencarian ke dalam variabel data['tb01']
        $data['tb01'] = $query->paginate(15)->withQueryString()->fragment('tb01');

        // Mengembalikan tampilan dengan data yang diperlukan
        return view('DataAnggota.KantorPusat', $data);
    }

    public function loadContent($No_CIF)
    {
        // Decode URL-encoded parameter
        $No_CIF = urldecode($No_CIF);

        // Cari member berdasarkan No_CIF
        $detail = DataAnggota::where('No_CIF', $No_CIF)->first();

        if (!$detail) {
            return response()->json(['error' => 'Member not found'], 404);
        }

        // Mengembalikan detail member dalam format JSON
        return response()->json($detail);
    }

    public function show()
    {
        $members = DataAnggota::all();
        return view('DataAnggota.KantorPusat', compact('detail'));
    }

    public function create()
    {
        return view('DataAnggota.store');
    }

    public function store(KantorPusatCreateRequest $request)
    {
        if ($request->hasFile('photo')) {
            // Validasi file untuk memastikan hanya file gambar yang dapat diunggah
            $validatedData = $request->validate([
                'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Ukuran maksimum 2MB
            ]);
        
            // Simpan file ke direktori 'photo' dan dapatkan nama file yang disimpan
            $filePath = $request->file('photo')->store('photo');
    
            // Alihkan kembali dengan pesan sukses
            return redirect()->back()->with('success', 'Data berhasil disimpan.');
        }
        
        // Jika tidak ada file 'photo', buat data anggota tanpa file foto
        $data = DataAnggota::create($request->all());
        
        // Alihkan kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Data berhasil disimpan.');
}}
// if (!empty($_GET)) {
//     // Redirect ke halaman tanpa query parameter
//     header("Location: http://127.0.0.1:8000/dashboard/DataAnggota/KantorPusat");
//     exit();
