<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //memasukkan data ke tabel pegawai
        DB::table('detail_profile')->insert([
            'address' => 'Jember',
            'nomor_tlp' => '082234237959',
            'ttl' => '2001-07-17',
            'foto' => 'picture.png'
        ]);
    }
}
