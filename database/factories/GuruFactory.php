<?php

namespace Database\Factories;

use App\Models\Guru; // Pastikan Anda mengimpor model Guru
use Illuminate\Database\Eloquent\Factories\Factory;

class GuruFactory extends Factory
{
    protected $model = Guru::class; // Menentukan model yang digunakan

    public function definition()
    {
        return [
            'nama'=> $this->faker->name(),
            'nip' => 1234567,
            'jabatan'=> 'guru mata pelajaran',
            'pendidikan' => 'S1',
            'tempat_lahir'=> $this->faker->city,
            'tanggal_lahir'=> $this->faker->date(),
            'agama'=> 'islam',
            'telp'=> $this->faker->phoneNumber(),
            'alamat'=> $this->faker->address(),
            'photo'=> 'imageuser.jpg',
        ];
    }
}