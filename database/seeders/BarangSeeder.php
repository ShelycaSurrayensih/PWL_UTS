<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barangs')->insert([[

            'Id_Barang'=>'1',
            'Kode_Barang'=>'PRD001',
            'Nama_Barang'=> 'yupi',
            'Kategori_barang'=>'Permen',
            'Harga' => 16500,
            'Qty' => 22
        ],
        [
            'Id_Barang'=>'2',
            'Kode_Barang'=>'PRD002',
            'Nama_Barang'=> 'Aqua',
            'Kategori_barang'=>'Minuman',
            'Harga' => 4000,
            'Qty' => 34
        ],
        [
            'Id_Barang'=>'3',
            'Kode_Barang'=>'PRD003',
            'Nama_Barang'=> 'Kacang Garuda',
            'Kategori_barang'=>'Snack',
            'Harga' => 9500,
            'Qty' => 7
        ],
        [
            'Id_Barang'=>'4',
            'Kode_Barang'=>'PRD004',
            'Nama_Barang'=> 'Buku',
            'Kategori_barang'=>'Alat Tulis',
            'Harga' => 5000,
            'Qty' => 22
        ],
        [
            'Id_Barang'=>'5',
            'Kode_Barang'=>'PRD005',
            'Nama_Barang'=> 'Relaxa',
            'Kategori_barang'=>'Permen',
            'Harga' => 9000,
            'Qty' => 12
        ],
        [
            'Id_Barang'=>'6',
            'Kode_Barang'=>'PRD006',
            'Nama_Barang'=> 'Teh Botol',
            'Kategori_barang'=>'Minuman',
            'Harga' => 3000,
            'Qty' => 27
        ],
        [
            'Id_Barang'=>'7',
            'Kode_Barang'=>'PRD007',
            'Nama_Barang'=> 'Pillow',
            'Kategori_barang'=>'Snack',
            'Harga' => 14000,
            'Qty' => 16
        ],
        [
            'Id_Barang'=>'8',
            'Kode_Barang'=>'PRD008',
            'Nama_Barang'=> 'Pulpen',
            'Kategori_barang'=>'Alat Tulis',
            'Harga' => 4500,
            'Qty' => 22
        ],
        [
            'Id_Barang'=>'9',
            'Kode_Barang'=>'PRD009',
            'Nama_Barang'=> 'Permen Kiss',
            'Kategori_barang'=>'Permen',
            'Harga' => 6000,
            'Qty' => 12
        ],
        [
            'Id_Barang'=>'10',
            'Kode_Barang'=>'PRD010',
            'Nama_Barang'=> 'Big cola',
            'Kategori_barang'=>'Minuman',
            'Harga' => 6500,
            'Qty' => 13
        ],
        [
            'Id_Barang'=>'11',
            'Kode_Barang'=>'PRD011',
            'Nama_Barang'=> 'Qtela',
            'Kategori_barang'=>'Snack',
            'Harga' => 14000,
            'Qty' => 17
        ],
        [
            'Id_Barang'=>'12',
            'Kode_Barang'=>'PRD012',
            'Nama_Barang'=> 'penghapus',
            'Kategori_barang'=>'Alat Tulis',
            'Harga' => 4000,
            'Qty' => 9
        ],
        [
            'Id_Barang'=>'13',
            'Kode_Barang'=>'PRD013',
            'Nama_Barang'=> 'Permen Jahe',
            'Kategori_barang'=>'Permen',
            'Harga' => 6000,
            'Qty' => 24
        ],
        [
            'Id_Barang'=>'14',
            'Kode_Barang'=>'PRD014',
            'Nama_Barang'=> 'Sprite',
            'Kategori_barang'=>'Minuman',
            'Harga' => 4000,
            'Qty' => 28
        ],
        [
            'Id_Barang'=>'15',
            'Kode_Barang'=>'PRD015',
            'Nama_Barang'=> 'Silvequeen',
            'Kategori_barang'=>'Snack',
            'Harga' => 14000,
            'Qty' => 22
        ],
        [
            'Id_Barang'=>'16',
            'Kode_Barang'=>'PRD016',
            'Nama_Barang'=> 'Penggaris',
            'Kategori_barang'=>'Alat Tulis',
            'Harga' =>12000,
            'Qty' => 22
        ],
        [
            'Id_Barang'=>'17',
            'Kode_Barang'=>'PRD017',
            'Nama_Barang'=> 'Mint',
            'Kategori_barang'=>'Permen',
            'Harga' => 14000,
            'Qty' => 12
        ],
        [
            'Id_Barang'=>'18',
            'Kode_Barang'=>'PRD018',
            'Nama_Barang'=> 'pocari sweat',
            'Kategori_barang'=>'Minuman',
            'Harga' => 6500,
            'Qty' => 29
        ],
        [
            'Id_Barang'=>'19',
            'Kode_Barang'=>'PRD019',
            'Nama_Barang'=> 'Potato',
            'Kategori_barang'=>'Snack',
            'Harga' => 7000,
            'Qty' => 21
        ],
        [
            'Id_Barang'=>'20',
            'Kode_Barang'=>'PRD020',
            'Nama_Barang'=> 'Tempat Pensil',
            'Kategori_barang'=>'Alat Tulis',
            'Harga' => 12000,
            'Qty' => 18

        ]]);
        }

    }


