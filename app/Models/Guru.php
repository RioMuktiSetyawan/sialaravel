<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Guru extends Model
{
    use HasFactory;

    // Properti untuk menentukan nama tabel
    protected $table = 'guru'; // Perbaiki dari %table menjadi $table

    // Kolom yang dapat diisi massal
    protected $fillable = [
        'nama', 'nip', 'jabatan', 'pendidikan', 'tempat_lahir', // Perbaiki dari 'temoat_lahir' menjadi 'tempat_lahir'
        'tanggal_lahir', 'agama', 'telp', 'alamat', 'photo'
    ];
    public function allData(){
        return DB::table('guru')->get();
    }
    public function detailData($id){
        return DB::table('guru')->where('id','$id')->first();
    }
    public function tambahData($data){
        DB::table('guru')->insert($data);
    }
    public function updateData($id, $data){
        DB::table('guru')->where('id', $id)->update($data);
    }
}
