<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Barang;

class DataBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            data_barang::create([
            'No_resi' => '1234567890',
            'Pengirim' => 'John Doe',
            'Alamat_tujuan' => 'Jl. Merdeka No. 10, Jakarta',
            'Penerima' => 'Jane Smith',
            'Status_pengiriman' => 'Dikirim',
        ]);

            data_barang::create([
            'No_resi' => '0987654321',
            'Pengirim' => 'Alice Johnson',
            'Alamat_tujuan' => 'Jl. Raya No. 15, Bandung',
            'Penerima' => 'Bob Lee',
            'Status_pengiriman' => 'Tunggu Konfirmasi',
        ]);

    }
}
