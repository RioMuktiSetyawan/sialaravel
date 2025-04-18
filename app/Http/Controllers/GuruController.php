<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class GuruController extends Controller
{
    public function __construct() {
        $this->guru = new Guru(); // Perbaiki penamaan variabel menjadi $this->guru
    }

    public function index() {
        $data = [
            'guru' => $this->guru->allData(), // Pastikan method allData() ada di model Guru
        ];
        return view('guru.index', $data);
    }

    public function profil($id){
        $guru = Guru::find($id);
        $data = [
            'guru' => $this->guru->detailData($id), 
        ];
        return view('guru.profil', ['guru' => $guru, 'data' => $data]);
    }
    public function create(){
        return view('guru.create');
    }
    public function insert(Request $request)
    {
        // Validasi data input
        $request->validate([
            'nama'           => 'required|regex:/^[a-zA-Z\s]+$/|min:4',
            'nip'            => 'required|digits_between:7,20',
            'jabatan'        => 'required',
            'pendidikan'     => 'required',
            'tempat_lahir'   => 'required',
            'tanggal_lahir'  => 'required|date',
            'agama'          => 'required',
            'telp'           => 'required|digits_between:11,15',
            'photo'          => 'required|mimes:jpg,jpeg,png|max:512',
        ]);
    
        // Ambil file foto
        $file = $request->file('photo');
        $fileName = $request->nama . '.' . $file->getClientOriginalExtension();
    
        // Pindahkan file ke folder public/images
        $file->move(public_path('images'), $fileName);
    
        // Simpan data ke database (sertakan nama file photo)
        Guru::create([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'jabatan' => $request->jabatan,
            'pendidikan' => $request->pendidikan,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'agama' => $request->agama,
            'telp' => $request->telp,
            'alamat' => $request->alamat,
            'photo' => $fileName,
        ]);
    
        // Redirect ke halaman guru
        return redirect()->route('guru')->with('pesan', 'Data Berhasil Ditambahkan');
    }    
    public function edit($id){
        $guru = Guru::find($id);
        $data = [
            'guru' => $this->guru->detailData($id),
        ];
        return view('guru.edit', ['guru'=> $guru, 'data' => $data]);
    }
    public function update(Request $request, $id)
{
    // Validasi input
    $this->validate($request, [
        'nama'          => 'required|regex:/^[a-zA-Z\s]+$/|min:4',
        'nip'           => 'required|digits_between:7,20',
        'jabatan'       => 'required',
        'pendidikan'    => 'required',
        'tempat_lahir'  => 'required',
        'tanggal_lahir' => 'required|date',
        'agama'         => 'required',
        'telp'          => 'required|digits_between:11,15',
        'alamat'        => 'required',
        'photo'         => 'nullable|mimes:jpg,jpeg,png|max:512',
    ]);

    // Siapkan data awal dari request (tanpa photo dulu)
    $data = [
        'nama'          => $request->nama,
        'nip'           => $request->nip,
        'jabatan'       => $request->jabatan,
        'pendidikan'    => $request->pendidikan,
        'tempat_lahir'  => $request->tempat_lahir,
        'tanggal_lahir' => $request->tanggal_lahir,
        'agama'         => $request->agama,
        'telp'          => $request->telp,
        'alamat'        => $request->alamat,
    ];

    // Cek apakah ada file photo yang di-upload
    if ($request->hasFile('photo')) {
        $file = $request->file('photo');
        $fileName = $request->nama . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('images'), $fileName);
        $data['photo'] = $fileName;
    }

    // Jalankan update lewat model
    $this->guru->updateData($id, $data);

    // Redirect kembali ke halaman guru dengan pesan sukses
    return redirect()->route('guru')->with('pesan', 'Data berhasil diupdate');
}
    public function delete($id){
        $guru = Guru::findOrFail($id);
        if ($guru->photo <> ""){
            unlink(public_path('images'). '/' . $guru->photo);
        }
        $guru->delete();
        return redirect()->route('guru')->with('pesan', 'Data Berhasil Dihapus..!');
    }

}