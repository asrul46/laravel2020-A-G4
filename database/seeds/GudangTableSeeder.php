<?php

use Illuminate\Database\Seeder;

class GudangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gudang=[
            [
                'nama_barang'=>'Tepung',
                'merk'=>'Rosebrand',
                'jumlah_barang'=>'100',
                'supplier_id'=>1,
                'harga'=>'500000',

            ],
            [
                'nama_barang'=>'Air mineral botol',
                'merk'=>'Aqua',
                'jumlah_barang'=>'100',
                'supplier_id'=> 2,
                'harga'=>'300000',

            ],
            [
                'nama_barang'=>'Beras',
                'merk'=>'Raja lele',
                'jumlah_barang'=>'100',
                'supplier_id'=>3,
                'harga'=>'500000',

            ],
        ];
        DB::table('gudang')->insert($gudang);
    }
}
