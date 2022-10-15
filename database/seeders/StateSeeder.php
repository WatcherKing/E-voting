<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use App\Models\State;
use DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert([
            'code' => 'AB',
            'name' => 'Abia',
        ]);

        DB::table('states')->insert([
            'code' => 'AD',
            'name' => 'Adamawa',
        ]);

        DB::table('states')->insert([
            'code' => 'AK',
            'name' => 'Akwa-Ibom',
        ]);

        DB::table('states')->insert([
            'code' => 'AN',
            'name' => 'Anambra',
        ]);

        DB::table('states')->insert([
            'code' => 'BA',
            'name' => 'Bauchi',
        ]);

        DB::table('states')->insert([
            'code' => 'BY',
            'name' => 'Bayelsa',
        ]);

        DB::table('states')->insert([
            'code' => 'BE',
            'name' => 'Benue',
        ]);

        DB::table('states')->insert([
            'code' => 'BO',
            'name' => 'Borno',
        ]);

        DB::table('states')->insert([
            'code' => 'CR',
            'name' => 'Cross-River',
        ]);

        DB::table('states')->insert([
            'code' => 'DE',
            'name' => 'Delta',
        ]);

        DB::table('states')->insert([
            'code' => 'EB',
            'name' => 'Ebonyi',
        ]);

        DB::table('states')->insert([
            'code' => 'ED',
            'name' => 'Edo',
        ]);

        DB::table('states')->insert([
            'code' => 'EK',
            'name' => 'Ekiti',
        ]);

        DB::table('states')->insert([
            'code' => 'EN',
            'name' => 'Enugu',
        ]);

        DB::table('states')->insert([
            'code' => 'GO',
            'name' => 'Gombe',
        ]);

        DB::table('states')->insert([
            'code' => 'IM',
            'name' => 'Imo',
        ]);

        DB::table('states')->insert([
            'code' => 'JI',
            'name' => 'Jigawa',
        ]);

        DB::table('states')->insert([
            'code' => 'KD',
            'name' => 'Kaduna',
        ]);

        DB::table('states')->insert([
            'code' => 'KN',
            'name' => 'Kano',
        ]);

        DB::table('states')->insert([
            'code' => 'KT',
            'name' => 'Katsina',
        ]);

        DB::table('states')->insert([
            'code' => 'KE',
            'name' => 'Kebbi',
        ]);

        DB::table('states')->insert([
            'code' => 'KO',
            'name' => 'Kogi',
        ]);

        DB::table('states')->insert([
            'code' => 'KW',
            'name' => 'Kwara',
        ]);

        DB::table('states')->insert([
            'code' => 'LA',
            'name' => 'Lagos',
        ]);

        DB::table('states')->insert([
            'code' => 'NA',
            'name' => 'Nasarrawa',
        ]);

        DB::table('states')->insert([
            'code' => 'NI',
            'name' => 'Niger',
        ]);

        DB::table('states')->insert([
            'code' => 'OG',
            'name' => 'Ogun',
        ]);

        DB::table('states')->insert([
            'code' => 'ON',
            'name' => 'Ondo',
        ]);

        DB::table('states')->insert([
            'code' => 'OS',
            'name' => 'Osun',
        ]);

        DB::table('states')->insert([
            'code' => 'OY',
            'name' => 'Oyo',
        ]);

        DB::table('states')->insert([
            'code' => 'PL',
            'name' => 'Plateau',
        ]);

        DB::table('states')->insert([
            'code' => 'RI',
            'name' => 'Rivers',
        ]);

        DB::table('states')->insert([
            'code' => 'SO',
            'name' => 'Sokoto',
        ]);

        DB::table('states')->insert([
            'code' => 'TA',
            'name' => 'Taraba',
        ]);

        DB::table('states')->insert([
            'code' => 'YO',
            'name' => 'Yobe',
        ]);

        DB::table('states')->insert([
            'code' => 'ZA',
            'name' => 'Zamfara',
        ]);

        DB::table('states')->insert([
            'code' => 'FC',
            'name' => 'FCT',
        ]);
    }

}
