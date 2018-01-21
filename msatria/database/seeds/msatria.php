<?php

use Illuminate\Database\Seeder;

class msatria extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                $a = [
        	['Nama'=>'angga', 'Kelas'=>'XI RPL 2', 'Jurusan'=>'RPL','Wali_Kelas'=>'BaPak'],
        	['Nama'=>'ardiansyah', 'Kelas'=>'XI RPL 2', 'Jurusan'=>'RPL','Wali_Kelas'=>'BaPak'],
        	['Nama'=>'ariz', 'Kelas'=>'XI RPL 2', 'Jurusan'=>'RPL','Wali_Kelas'=>'BaPak'],
        	['Nama'=>'satria', 'Kelas'=>'XI RPL 2', 'Jurusan'=>'RPL','Wali_Kelas'=>'BaPak'],
        	['Nama'=>'rudi', 'Kelas'=>'XI RPL 2', 'Jurusan'=>'RPL','Wali_Kelas'=>'BaPak'],
        	
        	];
        	DB::table('msatria')->insert($a);
    }
}
