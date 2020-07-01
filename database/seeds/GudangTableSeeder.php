<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class GudangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      

        $faker = Faker::create('id_ID');
        
        for($i = 1; $i <= 25; $i++){

            DB::table('gudang')->insert([ 

                'nama_barang'=>$faker->randomElement(['Aqua Mineral','Susu Bubuk','Tepung Terigu','Beras','Minyak Goreng']),
                'merk'=>$faker->randomElement(['Adi','Dancow','Rosebrand','Rojo Lele','Bimoli']),
                'jumlah_barang'=>$faker->numberBetween(50,100),
                'supplier_id'=>$faker->randomElement(['1','2','3','4','5','6']),
                'harga'=>$faker->numberBetween(50000,500000),
            ]);
        }
    }
}
