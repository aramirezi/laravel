<?php

use Illuminate\Database\Seeder;
use App\Profession;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Profession::create([
            'name' => 'Probando'
        ]);

        DB::table('profession')->insert([
        	'name' => 'Desarrollador'
        ]);

        DB::table('profession')->insert([
        	'name' => 'Tester'
        ]);

        DB::table('profession')->insert([
             'name' => 'Analista'   
        ]);
    }
}
