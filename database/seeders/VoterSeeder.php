<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Voters;
use Crypt;

class VoterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $voter1 = Voters::create([
            'local_gov_id' => 1,
            'state_id' => 1,
            'user_id' => 1,
            'name' => Crypt::encrypt('admin'),
            'vin' => Crypt::encrypt('123456789012345678'),
            'age' => Crypt::encrypt('25'),
            'dob' => Crypt::encrypt('1995-12-12'),
            'address' => 'No 1, Main Street, Lagos',
            'phone' => Crypt::encrypt('08012345678'),
            'gender' => Crypt::encrypt('M'),
            'voter_code' => Crypt::encrypt('s3cret55'),
            'status' => 0,
        ]);

        $voter2 = Voters::create([
            'local_gov_id' => 1,
            'state_id' => 1,
            'user_id' => 2,
            'name' => Crypt::encrypt('voter1'),
            'vin' => Crypt::encrypt('123456798765432109'),
            'age' => Crypt::encrypt('25'),
            'dob' => Crypt::encrypt('1995-12-12'),
            'address' => 'No 1, Main Street, Lagos',
            'phone' => Crypt::encrypt('08012345678'),
            'gender' => Crypt::encrypt('M'),
            'voter_code' => Crypt::encrypt('1234567890'),
            'status' => 0,
        ]);
    }
}
