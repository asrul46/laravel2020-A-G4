<?php

use Illuminate\Database\Seeder;

class SupplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $suppliers=[
            [
                'nama_supplier'=>'Sungai Budi Grup'

            ],
            [
                'nama_supplier'=>'PT.Mekar Jaya'

            ],
            [
                'nama_supplier'=>'Bulog'
            ],
            [
                'nama_supplier'=>'PT. Indofood CBP Sukses Makmur Tbk' 
            ],
            [
                'nama_supplier'=>'PT Indofood Sukses Makmur Tbk dan PT Indofood Agri Resources Ltd' 
            ],
            [
                'nama_supplier'=>'PT Nestle Indonesia' 
            ],
        ];
        DB::table('suppliers')->insert($suppliers);
    }
}
