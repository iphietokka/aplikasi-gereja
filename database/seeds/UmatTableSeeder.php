<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UmatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('umats')->insert([


            [
                'nama' => 'Agus Joko Susilo',
                'nik_kk' => 1234,
                'nik' => 21212,
                'ttl' => 'makassar,07/05/1989',
                'usia' => '20',
                'pekerjaan' => 'wiraswasta',
                'status_kawin' => 'kawin',
                'alamat' => 'jalananannanannaa',
                'sektor' => 'sektor 1',
                'unit' => 'unit 1',
            ],


            [
                'nama' => 'Friyadi Simamora',
                'nik_kk' => 123456,
                'nik' => 121212,
                'ttl' => 'makassar,07/05/1989',
                'usia' => '20',
                'pekerjaan' => 'wiraswasta',
                'status_kawin' => 'kawin',
                'alamat' => 'jalananannanannaa',
                'sektor' => 'sektor 1',
                'unit' => 'unit 1',
            ],
        ]);
    }
}
