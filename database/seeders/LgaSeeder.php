<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class LgaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Abia
        DB::table('local_govs')->insert([
            'name' => 'Aba North',
            'state_id' => '1'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Aba South ',
            'state_id' => '1'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Arochukwu',
            'state_id' => '1'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Bende',
            'state_id' => '1'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ikwuano',
            'state_id' => '1'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Isiala-Ngwa North',
            'state_id' => '1'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Isiala-Ngwa South',
            'state_id' => '1'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Isuikwato',
            'state_id' => '1'
        ]);

        DB::table('local_govs')->insert([
            'name' => ' Obi Nwa',
            'state_id' => '1'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ohafia',
            'state_id' => '1'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Osisioma',
            'state_id' => '1'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ugwunagbo',
            'state_id' => '1'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ukwa East',
            'state_id' => '1'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ukwa West',
            'state_id' => '1'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Umuahia North',
            'state_id' => '1'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Umuahia South',
            'state_id' => '1'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Umu-Neochi',
            'state_id' => '1'
        ]);

        //Adamawa

         DB::table('local_govs')->insert([
            'name' => 'Demsa',
            'state_id' => '2'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Fufore',
            'state_id' => '2'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ganaye',
            'state_id' => '2'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Gireri',
            'state_id' => '2'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Gombi',
            'state_id' => '2'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Guyuk',
            'state_id' => '2'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Hong',
            'state_id' => '2'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Jada',
            'state_id' => '2'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Lamurde',
            'state_id' => '2'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Madagali',
            'state_id' => '2'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Maiha',
            'state_id' => '2'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Mayo-Belwa',
            'state_id' => '2'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Michika',
            'state_id' => '2'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Mubi North',
            'state_id' => '2'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Mubi South',
            'state_id' => '2'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Numan',
            'state_id' => '2'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Shelleng',
            'state_id' => '2'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Song',
            'state_id' => '2'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Toungo',
            'state_id' => '2'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Yola North',
            'state_id' => '2'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Yola South',
            'state_id' => '2'
        ]);

        // Akwa-Ibom
        DB::table('local_govs')->insert([
            'name' => 'Abak',
            'state_id' => '3'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Eastern Obolo',
            'state_id' => '3'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Eket',
            'state_id' => '3'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Esit Eket',
            'state_id' => '3'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Essien Udim',
            'state_id' => '3'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Etim Ekpo',
            'state_id' => '3'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Etinan',
            'state_id' => '3'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ibeno',
            'state_id' => '3'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ibesikpo Asutan',
            'state_id' => '3'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ibiono Ibom',
            'state_id' => '3'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ika',
            'state_id' => '3'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ikono',
            'state_id' => '3'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ikot Abasi',
            'state_id' => '3'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ikot Ekpene',
            'state_id' => '3'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ini',
            'state_id' => '3'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Itu',
            'state_id' => '3'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Mbo',
            'state_id' => '3'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Mkpat Enin',
            'state_id' => '3'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Nsit Atai',
            'state_id' => '3'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Nsit Ibom',
            'state_id' => '3'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Nsit Ubium',
            'state_id' => '3'
        ]);
        DB::table('local_govs')->insert([
            'name' => 'Obot Akara',
            'state_id' => '3'
        ]);
        DB::table('local_govs')->insert([
            'name' => 'Okobo',
            'state_id' => '3'
        ]);
        DB::table('local_govs')->insert([
            'name' => 'Onna',
            'state_id' => '3'
        ]);
        DB::table('local_govs')->insert([
            'name' => 'Orok Anam',
            'state_id' => '3'
        ]);
        DB::table('local_govs')->insert([
            'name' => 'Udung Uko',
            'state_id' => '3'
        ]);
        DB::table('local_govs')->insert([
            'name' => 'Ukanafun',
            'state_id' => '3'
        ]);
        DB::table('local_govs')->insert([
            'name' => 'Uruan',
            'state_id' => '3'
        ]);
        DB::table('local_govs')->insert([
            'name' => 'Urue-Offong/Oruko',
            'state_id' => '3'
        ]);
        DB::table('local_govs')->insert([
            'name' => 'Uyo',
            'state_id' => '3'
        ]);


        // Anambra
        DB::table('local_govs')->insert([
            'name' => 'Aguata',
            'state_id' => '4'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Anambra East',
            'state_id' => '4'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Anambra West',
            'state_id' => '4'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Anaocha',
            'state_id' => '4'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Awka North',
            'state_id' => '4'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Awka South',
            'state_id' => '4'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ayamelum',
            'state_id' => '4'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Dunukofia',
            'state_id' => '4'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ekwusigo',
            'state_id' => '4'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Idemili North',
            'state_id' => '4'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Idemili South',
            'state_id' => '4'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'ihiala',
            'state_id' => '4'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Njikoka',
            'state_id' => '4'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Nnewi North',
            'state_id' => '4'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Nnewi South',
            'state_id' => '4'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ogbaru',
            'state_id' => '4'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Onitsha North',
            'state_id' => '4'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Onitsha South',
            'state_id' => '4'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Onumba N',
            'state_id' => '4'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Onumba South',
            'state_id' => '4'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Oyi',
            'state_id' => '4'
        ]);

        //  Bauchi
        DB::table('local_govs')->insert([
            'name' => 'Alkaleri',
            'state_id' => '5'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Bauchi',
            'state_id' => '5'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Bogoro',
            'state_id' => '5'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Damban',
            'state_id' => '5'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Darazo',
            'state_id' => '5'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Dass',
            'state_id' => '5'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ganjuwa',
            'state_id' => '5'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Giade',
            'state_id' => '5'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Itas/Gadau',
            'state_id' => '5'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Jama"are',
            'state_id' => '5'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Katagum',
            'state_id' => '5'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Kirfi',
            'state_id' => '5'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Misau',
            'state_id' => '5'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ningi',
            'state_id' => '5'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Shira',
            'state_id' => '5'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Tafawa-Balewa',
            'state_id' => '5'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Toro',
            'state_id' => '5'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Warji',
            'state_id' => '5'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Zaki',
            'state_id' => '5'
        ]);

        // Bayelsa
        DB::table('local_govs')->insert([
            'name' => 'Brass',
            'state_id' => '6'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ekeremor',
            'state_id' => '6'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Kolokuma/Opokuma',
            'state_id' => '6'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Nembe',
            'state_id' => '6'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ogbia',
            'state_id' => '6'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Sagbama',
            'state_id' => '6'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Southern Jaw',
            'state_id' => '6'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Yenegoa',
            'state_id' => '6'
        ]);

        // Benue
        DB::table('local_govs')->insert([
            'name' => 'Ado',
            'state_id' => '7'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Agatu',
            'state_id' => '7'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Apa',
            'state_id' => '7'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Buruku',
            'state_id' => '7'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Gboko',
            'state_id' => '7'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Guma',
            'state_id' => '7'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Gwer East',
            'state_id' => '7'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Gwer West',
            'state_id' => '7'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Katsina-Ala',
            'state_id' => '7'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Konshisha',
            'state_id' => '7'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Kwande',
            'state_id' => '7'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Logo',
            'state_id' => '7'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Markurdi',
            'state_id' => '7'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Obi',
            'state_id' => '7'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ogbadipo',
            'state_id' => '7'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Oju',
            'state_id' => '7'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Okpokwu',
            'state_id' => '7'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ohimini',
            'state_id' => '7'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Oturkpo',
            'state_id' => '7'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Tarka',
            'state_id' => '7'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ukum',
            'state_id' => '7'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ushongo',
            'state_id' => '7'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Vandeikya',
            'state_id' => '7'
        ]);

        //  Bornu
        DB::table('local_govs')->insert([
            'name' => 'Abadam',
            'state_id' => '8'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Askira/Uba',
            'state_id' => '8'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Bama',
            'state_id' => '8'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Bayo',
            'state_id' => '8'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Biu',
            'state_id' => '8'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Chibok',
            'state_id' => '8'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Damboa',
            'state_id' => '8'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Dikwa',
            'state_id' => '8'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Gubio',
            'state_id' => '8'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Guzamala',
            'state_id' => '8'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Gwoza',
            'state_id' => '8'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Hawul',
            'state_id' => '8'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Jere',
            'state_id' => '8'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Kaga',
            'state_id' => '8'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Kala/Balge',
            'state_id' => '8'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Konduga',
            'state_id' => '8'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Kukawa',
            'state_id' => '8'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Kwaya Kusar',
            'state_id' => '8'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Mafa',
            'state_id' => '8'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Magumeri',
            'state_id' => '8'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Maiduguri',
            'state_id' => '8'
        ]);
		DB::table('local_govs')->insert([
            'name' => 'Marte',
            'state_id' => '8'
        ]);
		DB::table('local_govs')->insert([
            'name' => 'Mobbar',
            'state_id' => '8'
        ]);
		DB::table('local_govs')->insert([
            'name' => 'Monguno',
            'state_id' => '8'
        ]);
		DB::table('local_govs')->insert([
            'name' => 'Ngala',
            'state_id' => '8'
        ]);
		DB::table('local_govs')->insert([
            'name' => 'Nganzai',
            'state_id' => '8'
        ]);
		DB::table('local_govs')->insert([
            'name' => 'Shani',
            'state_id' => '8'
        ]);

        // Cross-River
        DB::table('local_govs')->insert([
            'name' => 'Akpabuyo',
            'state_id' => '9'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Odukpani',
            'state_id' => '9'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Akamkpa',
            'state_id' => '9'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Biase',
            'state_id' => '9'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Abi',
            'state_id' => '9'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ikom',
            'state_id' => '9'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Yarkur',
            'state_id' => '9'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Odubra',
            'state_id' => '9'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Boki',
            'state_id' => '9'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ogoja',
            'state_id' => '9'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Yala',
            'state_id' => '9'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Obanliku',
            'state_id' => '9'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Obudu',
            'state_id' => '9'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Calabar South',
            'state_id' => '9'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Etung',
            'state_id' => '9'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Bekwara',
            'state_id' => '9'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Bakasi',
            'state_id' => '9'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Calabar Municipality',
            'state_id' => '9'
        ]);

         // Delta
        DB::table('local_govs')->insert([
            'name' => 'Oshimili',
            'state_id' => '10'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Aniocha',
            'state_id' => '10'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Aniocha-South',
            'state_id' => '10'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ika South',
            'state_id' => '10'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ika North-East',
            'state_id' => '10'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ndokwa West',
            'state_id' => '10'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ndokwa East',
            'state_id' => '10'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Isoko South',
            'state_id' => '10'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Isoko North',
            'state_id' => '10'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Bomadi',
            'state_id' => '10'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Burutu',
            'state_id' => '10'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ughelli South',
            'state_id' => '10'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ughelli North',
            'state_id' => '10'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ethiope West',
            'state_id' => '10'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ethiope East',
            'state_id' => '10'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Sapele',
            'state_id' => '10'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Okpe',
            'state_id' => '10'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Warri North',
            'state_id' => '10'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Warri South',
            'state_id' => '10'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Uvwie',
            'state_id' => '10'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Udu',
            'state_id' => '10'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Warri Central',
            'state_id' => '10'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ukwani',
            'state_id' => '10'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Oshimili North',
            'state_id' => '10'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Patani',
            'state_id' => '10'
        ]);

        // Ebonyi
        DB::table('local_govs')->insert([
            'name' => 'Afikpo South',
            'state_id' => '11'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Afikpo North',
            'state_id' => '11'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Onicha',
            'state_id' => '11'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ohaozara',
            'state_id' => '11'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Abakaliki',
            'state_id' => '11'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ishielu',
            'state_id' => '11'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'lkwo',
            'state_id' => '11'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ezza',
            'state_id' => '11'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ezza South',
            'state_id' => '11'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ohaukwu',
            'state_id' => '11'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ebonyi',
            'state_id' => '11'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ivo',
            'state_id' => '11'
        ]);

        // Edo
        DB::table('local_govs')->insert([
            'name' => 'Esan North-East',
            'state_id' => '12'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Esan Central',
            'state_id' => '12'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Esan West',
            'state_id' => '12'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Egor',
            'state_id' => '12'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ukpoba',
            'state_id' => '12'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Central',
            'state_id' => '12'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Etsako Central',
            'state_id' => '12'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Igueben',
            'state_id' => '12'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Oredo',
            'state_id' => '12'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ovia SouthWest',
            'state_id' => '12'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ovia South-East',
            'state_id' => '12'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Orhionwon',
            'state_id' => '12'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Uhunmwonde',
            'state_id' => '12'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Etsako East',
            'state_id' => '12'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Esan South-East',
            'state_id' => '12'
        ]);

        // Ekiti
        DB::table('local_govs')->insert([
            'name' => 'Ado',
            'state_id' => '13'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ekiti-East',
            'state_id' => '13'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ekiti-West',
            'state_id' => '13'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Emure/Ise/Orun',
            'state_id' => '13'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ekiti South-West',
            'state_id' => '13'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ikare',
            'state_id' => '13'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Irepodun',
            'state_id' => '13'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ijero',
            'state_id' => '13'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ido/Osi',
            'state_id' => '13'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Oye',
            'state_id' => '13'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ikole',
            'state_id' => '13'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Moba',
            'state_id' => '13'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Gbonyin',
            'state_id' => '13'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Efon',
            'state_id' => '13'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ise/Orun',
            'state_id' => '13'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ilejemeje',
            'state_id' => '13'
        ]);

        // Enugu
        DB::table('local_govs')->insert([
            'name' => 'Enugu South',
            'state_id' => '14'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Igbo-Eze South',
            'state_id' => '14'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Enugu North',
            'state_id' => '14'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Nkanu',
            'state_id' => '14'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Udi Agwu',
            'state_id' => '14'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Oji-River',
            'state_id' => '14'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ezeagu',
            'state_id' => '14'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'IgboEze North',
            'state_id' => '14'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Isi-Uzo',
            'state_id' => '14'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Nsukka',
            'state_id' => '14'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Igbo-Ekiti',
            'state_id' => '14'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Uzo-Uwani',
            'state_id' => '14'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Enugu East',
            'state_id' => '14'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Aninri',
            'state_id' => '14'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Nkanu South',
            'state_id' => '14'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Udenu',
            'state_id' => '14'
        ]);

        // Gombe
        DB::table('local_govs')->insert([
            'name' => 'Akko',
            'state_id' => '15'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Balanga',
            'state_id' => '15'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Billiri',
            'state_id' => '15'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Dukku',
            'state_id' => '15'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Kaltungo',
            'state_id' => '15'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Kwami',
            'state_id' => '15'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Shomgom',
            'state_id' => '15'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Funakaye',
            'state_id' => '15'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Gombe',
            'state_id' => '15'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Nafada/Bajoga',
            'state_id' => '15'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Yamaltu/Delta',
            'state_id' => '15'
        ]);

        // Imo
        DB::table('local_govs')->insert([
            'name' => 'Aboh-Mbaise',
            'state_id' => '16'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ahiazu-Mbaise',
            'state_id' => '16'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ehime-Mbano',
            'state_id' => '16'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ezinihitte',
            'state_id' => '16'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ideato North',
            'state_id' => '16'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ideato South',
            'state_id' => '16'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ihitte/Uboma',
            'state_id' => '16'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ikeduru',
            'state_id' => '16'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Isiala Mbano',
            'state_id' => '16'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Isu',
            'state_id' => '16'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Mbaitoli',
            'state_id' => '16'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ngor-Okpala',
            'state_id' => '16'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Njaba',
            'state_id' => '16'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Nwangele',
            'state_id' => '16'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Nkwerre',
            'state_id' => '16'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Obowo',
            'state_id' => '16'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Oguta',
            'state_id' => '16'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ohaji/Egbeme',
            'state_id' => '16'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Okigwe',
            'state_id' => '16'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Orlu',
            'state_id' => '16'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Orsu',
            'state_id' => '16'
        ]);
        DB::table('local_govs')->insert([
            'name' => 'Oru East',
            'state_id' => '16'
        ]);
        DB::table('local_govs')->insert([
            'name' => 'Oru West',
            'state_id' => '16'
        ]);
        DB::table('local_govs')->insert([
            'name' => 'Owerri-Municipal',
            'state_id' => '16'
        ]);
        DB::table('local_govs')->insert([
            'name' => 'Owerri North',
            'state_id' => '16'
        ]);
        DB::table('local_govs')->insert([
            'name' => 'Owerri West',
            'state_id' => '16'
        ]);

        // Jigawa
       DB::table('local_govs')->insert([
            'name' =>  'Auyo',
            'state_id' => '17'
        ]);

         DB::table('local_govs')->insert([
            'name' =>  'Babura',
            'state_id' => '17'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Birni kudu',
            'state_id' => '17'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Birniwa',
            'state_id' => '17'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Buji',
            'state_id' => '17'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Dutse',
            'state_id' => '17'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Gagarawa',
            'state_id' => '17'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Garki',
            'state_id' => '17'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Gumel',
            'state_id' => '17'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Guri',
            'state_id' => '17'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Gwaram',
            'state_id' => '17'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Gwiwa',
            'state_id' => '17'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Hadejia',
            'state_id' => '17'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Jahun',
            'state_id' => '17'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Kafin Hausa',
            'state_id' => '17'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Kaugama Kazaure',
            'state_id' => '17'
        ]);


        DB::table('local_govs')->insert([
            'name' => 'kiri kasamma',
            'state_id' => '17'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'kiyawa',
            'state_id' => '17'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Maigatari',
            'state_id' => '17'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Malam Madori',
            'state_id' => '17'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Miga',
            'state_id' => '17'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ringim',
            'state_id' => '17'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Roni',
            'state_id' => '17'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Sule-Tankarkar',
            'state_id' => '17'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Taura',
            'state_id' => '17'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Yankwashi',
            'state_id' => '17'
        ]);

        // Kaduna
         DB::table('local_govs')->insert([
            'name' => 'Chikun',
            'state_id' => '18'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Giwa',
            'state_id' => '18'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Igabi',
            'state_id' => '18'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ikara',
            'state_id' => '18'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'jaba',
            'state_id' => '18'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Jema"a',
            'state_id' => '18'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'kachia',
            'state_id' => '18'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Kaduna North',
            'state_id' => '18'
        ]);


        DB::table('local_govs')->insert([
            'name' => 'Kaduna South',
            'state_id' => '18'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'kagarko',
            'state_id' => '18'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'kajuru',
            'state_id' => '18'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'kaura',
            'state_id' => '18'
        ]);

         DB::table('local_govs')->insert([
            'name' =>  'kauru',
            'state_id' => '18'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'kubua',
            'state_id' => '18'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'kudan',
            'state_id' => '18'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'lere',
            'state_id' => '18'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Makarfi',
            'state_id' => '18'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'sabon-gari',
            'state_id' => '18'
        ]);

          DB::table('local_govs')->insert([
            'name' => 'sanga',
            'state_id' => '18'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'soba',
            'state_id' => '18'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'zango-kataf',
            'state_id' => '18'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'zaria',
            'state_id' => '18'
        ]);
        // Kano
         DB::table('local_govs')->insert([
            'name' => 'Ajingi',
            'state_id' => '19'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Albasu',
            'state_id' => '19'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Bagwai',
            'state_id' => '19'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'bebeji',
            'state_id' => '19'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'bichi',
            'state_id' => '19'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'bunkure',
            'state_id' => '19'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'dala',
            'state_id' => '19'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'dambatta',
            'state_id' => '19'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Dawakin kudu',
            'state_id' => '19'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Dawakin tofa',
            'state_id' => '19'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'doguwa',
            'state_id' => '19'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'fagge',
            'state_id' => '19'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'gabasawa',
            'state_id' => '19'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'garko',
            'state_id' => '19'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'garum',
            'state_id' => '19'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'mallam',
            'state_id' => '19'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'gaya',
            'state_id' => '19'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'gezawa',
            'state_id' => '19'
        ]);

          DB::table('local_govs')->insert([
            'name' => 'gwale',
            'state_id' => '19'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'gwarzo',
            'state_id' => '19'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'kabo',
            'state_id' => '19'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'kano municipal',
            'state_id' => '19'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'karaye',
            'state_id' => '19'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'kibiya',
            'state_id' => '19'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'kiru',
            'state_id' => '19'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'kumbutso',
            'state_id' => '19'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'kunchi',
            'state_id' => '19'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'kura',
            'state_id' => '19'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'madobi',
            'state_id' => '19'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'makoda',
            'state_id' => '19'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'minjibir',
            'state_id' => '19'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'nasarawa',
            'state_id' => '19'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'rano',
            'state_id' => '19'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'rimin',
            'state_id' => '19'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'rogo',
            'state_id' => '19'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'shano',
            'state_id' => '19'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'sumaila',
            'state_id' => '19'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'takali',
            'state_id' => '19'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'tarauni',
            'state_id' => '19'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'tofa',
            'state_id' => '19'
        ]);

          DB::table('local_govs')->insert([
            'name' => 'tsanyawa',
            'state_id' => '19'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'gwarzo',
            'state_id' => '19'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'tudun wada',
            'state_id' => '19'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'ungogo',
            'state_id' => '19'
        ]);

          DB::table('local_govs')->insert([
            'name' => 'warawa',
            'state_id' => '19'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'wudil',
            'state_id' => '19'
        ]);

        // Katsina
        DB::table('local_govs')->insert([
            'name' => 'Bakori',
            'state_id' => '20'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Batagarawa',
            'state_id' => '20'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Batsari',
            'state_id' => '20'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Baure',
            'state_id' => '20'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Bindawa',
            'state_id' => '20'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Charanchi',
            'state_id' => '20'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Dandume',
            'state_id' => '20'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Danja',
            'state_id' => '20'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Dan Musa',
            'state_id' => '20'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Daura',
            'state_id' => '20'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Dutsi',
            'state_id' => '20'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Dutsin-Ma',
            'state_id' => '20'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Faskari',
            'state_id' => '20'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Funtua',
            'state_id' => '20'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ingawa',
            'state_id' => '20'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Jibia',
            'state_id' => '20'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Kafur',
            'state_id' => '20'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Kaita',
            'state_id' => '20'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Kankara',
            'state_id' => '20'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Kankia',
            'state_id' => '20'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Katsina',
            'state_id' => '20'
        ]);

		DB::table('local_govs')->insert([
            'name' => 'Kurfi',
            'state_id' => '20'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Kusada',
            'state_id' => '20'
        ]);

		DB::table('local_govs')->insert([
            'name' => 'Mai Adua',
            'state_id' => '20'
        ]);

		DB::table('local_govs')->insert([
            'name' => 'Malumfashi',
            'state_id' => '20'
        ]);

		DB::table('local_govs')->insert([
            'name' => 'Mani',
            'state_id' => '20'
        ]);

		DB::table('local_govs')->insert([
            'name' => 'Mashi',
            'state_id' => '20'
        ]);

		DB::table('local_govs')->insert([
            'name' => 'Matazuu',
            'state_id' => '20'
        ]);
		DB::table('local_govs')->insert([
            'name' => 'Musawa',
            'state_id' => '20'
        ]);
		DB::table('local_govs')->insert([
            'name' => 'Rimi',
            'state_id' => '20'
        ]);
		DB::table('local_govs')->insert([
            'name' => 'Sabuwa',
            'state_id' => '20'
        ]);
		DB::table('local_govs')->insert([
            'name' => 'Safana',
            'state_id' => '20'
        ]);
		DB::table('local_govs')->insert([
            'name' => 'Sandamu',
            'state_id' => '20'
        ]);
		DB::table('local_govs')->insert([
            'name' => 'Zango',
            'state_id' => '20'
        ]);

        // Kebbi
        DB::table('local_govs')->insert([
            'name' => 'Aleiro',
            'state_id' => '21'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Arewa-Dandi',
            'state_id' => '21'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Argungu',
            'state_id' => '21'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Augie',
            'state_id' => '21'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Bagudo',
            'state_id' => '21'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Birnin Kebbi',
            'state_id' => '21'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Bunza',
            'state_id' => '21'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Dandi',
            'state_id' => '21'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Fakai',
            'state_id' => '21'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Gwandu',
            'state_id' => '21'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Jega',
            'state_id' => '21'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Kalgo',
            'state_id' => '21'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Koko/Besse',
            'state_id' => '21'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Maiyama',
            'state_id' => '21'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ngaski',
            'state_id' => '21'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Sakaba',
            'state_id' => '21'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Shanga',
            'state_id' => '21'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Suru',
            'state_id' => '21'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Wasagu/Danko',
            'state_id' => '21'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Yauri',
            'state_id' => '21'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Zuru',
            'state_id' => '21'
        ]);

        // Kogi
        DB::table('local_govs')->insert([
            'name' => 'Adavi',
            'state_id' => '22'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ajaokuta',
            'state_id' => '22'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ankpa',
            'state_id' => '22'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Bassa',
            'state_id' => '22'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Dekina',
            'state_id' => '22'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ibaji',
            'state_id' => '22'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Idah',
            'state_id' => '22'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Igalamela-Odolu',
            'state_id' => '22'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ijumu',
            'state_id' => '22'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Kabba/Bunu',
            'state_id' => '22'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Kogi',
            'state_id' => '22'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Lokoja',
            'state_id' => '22'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Mopa-Muro',
            'state_id' => '22'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ofu',
            'state_id' => '22'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ogori/Mangongo',
            'state_id' => '22'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Okehi',
            'state_id' => '22'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Okene',
            'state_id' => '22'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Olamabolo',
            'state_id' => '22'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Omala',
            'state_id' => '22'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Yagba East',
            'state_id' => '22'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Yagba West',
            'state_id' => '22'
        ]);

        // Kwara
        DB::table('local_govs')->insert([
            'name' => 'Asa',
            'state_id' => '23'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Baruten',
            'state_id' => '23'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Edu',
            'state_id' => '23'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ekiti',
            'state_id' => '23'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ifelodun',
            'state_id' => '23'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ilorin East',
            'state_id' => '23'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ilorin West',
            'state_id' => '23'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Irepodun',
            'state_id' => '23'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Isin',
            'state_id' => '23'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Kaiama',
            'state_id' => '23'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Moro',
            'state_id' => '23'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Offa',
            'state_id' => '23'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Oke-Ero',
            'state_id' => '23'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Oyun',
            'state_id' => '23'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Pategi',
            'state_id' => '23'
        ]);

        // Lagos
        DB::table('local_govs')->insert([
            'name' => 'Agege',
            'state_id' => '24'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ajeromi-Ifelodun',
            'state_id' => '24'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Alimosho',
            'state_id' => '24'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Amuwo-Odofin',
            'state_id' => '24'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Apapa',
            'state_id' => '24'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Badagry',
            'state_id' => '24'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Epe',
            'state_id' => '24'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Eti-Osa',
            'state_id' => '24'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ibeju/Lekki',
            'state_id' => '24'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ifako-Ijaye',
            'state_id' => '24'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ikeja',
            'state_id' => '24'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ikorodu',
            'state_id' => '24'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Kosofe',
            'state_id' => '24'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Lagos Island',
            'state_id' => '24'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Lagos Mainland',
            'state_id' => '24'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Mushin',
            'state_id' => '24'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ojo',
            'state_id' => '24'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Oshodi-Isolo',
            'state_id' => '24'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Shomolu',
            'state_id' => '24'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Surulere',
            'state_id' => '24'
        ]);

        // Nasarawa
        DB::table('local_govs')->insert([
            'name' => 'Akwanga',
            'state_id' => '25'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Awe',
            'state_id' => '25'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Doma',
            'state_id' => '25'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Karu',
            'state_id' => '25'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Keana',
            'state_id' => '25'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Keffi',
            'state_id' => '25'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Kokona',
            'state_id' => '25'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Lafia',
            'state_id' => '25'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Nasarawa',
            'state_id' => '25'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Nasarawa-Eggon',
            'state_id' => '25'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Obi',
            'state_id' => '25'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Toto',
            'state_id' => '25'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Wamba',
            'state_id' => '25'
        ]);

        // Niger
        DB::table('local_govs')->insert([
            'name' => 'Agaie',
            'state_id' => '26'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Agwara ',
            'state_id' => '26'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Bida',
            'state_id' => '26'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Borgu',
            'state_id' => '26'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Bosso',
            'state_id' => '26'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Chanchaga',
            'state_id' => '26'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Edati',
            'state_id' => '26'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Gbako',
            'state_id' => '26'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Gurara ',
            'state_id' => '26'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Katcha',
            'state_id' => '26'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Kontagora',
            'state_id' => '26'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Lapai',
            'state_id' => '26'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Lavun',
            'state_id' => '26'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Magama',
            'state_id' => '26'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Mariga',
            'state_id' => '26'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Mashegu',
            'state_id' => '26'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Mokwa',
            'state_id' => '26'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Muya',
            'state_id' => '26'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Pailoro',
            'state_id' => '26'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Rafi',
            'state_id' => '26'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Rijau ',
            'state_id' => '26'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Shiroro',
            'state_id' => '26'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Suleja ',
            'state_id' => '26'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Tafa',
            'state_id' => '26'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Wushishi',
            'state_id' => '26'
        ]);

        //Ogun
        DB::table('local_govs')->insert([
            'name' => 'Abeokuta North',
            'state_id' => '27'
        ]);

		DB::table('local_govs')->insert([
            'name' => 'Abeokuta South',
            'state_id' => '27'
        ]);

		DB::table('local_govs')->insert([
            'name' => 'Ado-Odo/Ota',
            'state_id' => '27'
        ]);

		DB::table('local_govs')->insert([
            'name' => 'Egbado North',
            'state_id' => '27'
        ]);

		DB::table('local_govs')->insert([
            'name' => 'Egbado South',
            'state_id' => '27'
        ]);

		DB::table('local_govs')->insert([
            'name' => 'Ewekoro',
            'state_id' => '27'
        ]);

		DB::table('local_govs')->insert([
            'name' => 'Ifo',
            'state_id' => '27'
        ]);

		DB::table('local_govs')->insert([
            'name' => 'Ijebu East',
            'state_id' => '27'
        ]);

		DB::table('local_govs')->insert([
            'name' => 'Ijebu North',
            'state_id' => '27'
        ]);

		DB::table('local_govs')->insert([
            'name' => 'Ijebu North East',
            'state_id' => '27'
        ]);

		DB::table('local_govs')->insert([
            'name' => 'Ijebu Ode',
            'state_id' => '27'
        ]);

		DB::table('local_govs')->insert([
            'name' => 'Ikenne',
            'state_id' => '27'
        ]);

		DB::table('local_govs')->insert([
            'name' => 'Imeko-Afon',
            'state_id' => '27'
        ]);

		DB::table('local_govs')->insert([
            'name' => 'Ipokia',
            'state_id' => '27'
        ]);

		DB::table('local_govs')->insert([
            'name' => 'Obafemi-Owode',
            'state_id' => '27'
        ]);

		DB::table('local_govs')->insert([
            'name' => 'Ogun Watrside',
            'state_id' => '27'
        ]);

		DB::table('local_govs')->insert([
            'name' => 'Odeda',
            'state_id' => '27'
        ]);

		DB::table('local_govs')->insert([
            'name' => 'Odogbolu',
            'state_id' => '27'
        ]);

		DB::table('local_govs')->insert([
            'name' => 'Remo North',
            'state_id' => '27'
        ]);

		DB::table('local_govs')->insert([
            'name' => 'Shagamu',
            'state_id' => '27'
        ]);


        // Ondo
        DB::table('local_govs')->insert([
            'name' => 'Akoko North East',
            'state_id' => '28'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Akoko North West ',
            'state_id' => '28'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Akoko South Akure East',
            'state_id' => '28'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Akoko South West',
            'state_id' => '28'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Akure North ',
            'state_id' => '28'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Akure South',
            'state_id' => '28'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ese-Odo ',
            'state_id' => '28'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Idanre',
            'state_id' => '28'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ifedore ',
            'state_id' => '28'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ilaje ',
            'state_id' => '28'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ile-Oluji ',
            'state_id' => '28'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Okeigbo ',
            'state_id' => '28'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Irele ',
            'state_id' => '28'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Odigbo ',
            'state_id' => '28'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Okitipupa ',
            'state_id' => '28'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ondo East  ',
            'state_id' => '28'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ondo West',
            'state_id' => '28'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ose',
            'state_id' => '28'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Owo',
            'state_id' => '28'
        ]);
        //osun
        DB::table('local_govs')->insert([
            'name' => 'Aiyedade',
            'state_id' => '29'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Aiyedire',
            'state_id' => '29'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Atakumosa East',
            'state_id' => '29'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Atakumosa West',
            'state_id' => '29'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Boluwaduro',
            'state_id' => '29'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Boripe',
            'state_id' => '29'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ede North',
            'state_id' => '29'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ede South',
            'state_id' => '29'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Egbedore',
            'state_id' => '29'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ejigbo',
            'state_id' => '29'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ife Central',
            'state_id' => '29'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ife East',
            'state_id' => '29'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ife North',
            'state_id' => '29'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ife South',
            'state_id' => '29'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ifedayo',
            'state_id' => '29'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ifelodun',
            'state_id' => '29'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ila',
            'state_id' => '29'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ilesha East',
            'state_id' => '29'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ilesha West',
            'state_id' => '29'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Irepodun',
            'state_id' => '29'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Irewole',
            'state_id' => '29'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Isokan',
            'state_id' => '29'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Iwo',
            'state_id' => '29'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Obokun',
            'state_id' => '29'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Odo-Otin',
            'state_id' => '29'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ola-Oluwa',
            'state_id' => '29'
        ]);


        DB::table('local_govs')->insert([
            'name' => 'Olorunda',
            'state_id' => '29'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Oriade',
            'state_id' => '29'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Oriade',
            'state_id' => '29'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Oriade',
            'state_id' => '29'
        ]);

        //Oyo
        DB::table('local_govs')->insert([
            'name' => 'Afijio',
            'state_id' => '30'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Akinyele',
            'state_id' => '30'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Atiba',
            'state_id' => '30'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Atigbo',
            'state_id' => '30'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Egbeda',
            'state_id' => '30'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ibadan Central',
            'state_id' => '30'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ibadan North',
            'state_id' => '30'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ibadan North West',
            'state_id' => '30'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ibadan South East',
            'state_id' => '30'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ibadan South West',
            'state_id' => '30'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ibarapa Central ',
            'state_id' => '30'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ibarapa East',
            'state_id' => '30'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ibarapa North',
            'state_id' => '30'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ido',
            'state_id' => '30'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Irepo',
            'state_id' => '30'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Iseyin',
            'state_id' => '30'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Itesiwaju',
            'state_id' => '30'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Iwajowa',
            'state_id' => '30'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Kajola',
            'state_id' => '30'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Lagelu Ogbomosho North',
            'state_id' => '30'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ogbmosho South',
            'state_id' => '30'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ogo Oluwa',
            'state_id' => '30'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Olorunsogo',
            'state_id' => '30'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Oluyole',
            'state_id' => '30'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ona-Ara',
            'state_id' => '30'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Orelope',
            'state_id' => '30'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ori Ire',
            'state_id' => '30'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Oyo East',
            'state_id' => '30'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Oyo West',
            'state_id' => '30'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Saki East',
            'state_id' => '30'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Saki West',
            'state_id' => '30'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Surulere',
            'state_id' => '30'
        ]);


        //Plateau
         DB::table('local_govs')->insert([
            'name' => 'Barikin Ladi',
            'state_id' => '31'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Bassa',
            'state_id' => '31'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Bokkos',
            'state_id' => '31'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Jos East',
            'state_id' => '2'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Jos North',
            'state_id' => '31'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Jos South',
            'state_id' => '31'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Kanam',
            'state_id' => '31'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Kanke',
            'state_id' => '31'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Langtang North',
            'state_id' => '31'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Langtang South',
            'state_id' => '31'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Mangu',
            'state_id' => '31'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Mikang',
            'state_id' => '31'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Pankshin',
            'state_id' => '31'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Qua an Pan',
            'state_id' => '31'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Riyom',
            'state_id' => '31'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Shendam',
            'state_id' => '31'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Wase',
            'state_id' => '31'
        ]);

        // Rivers
        DB::table('local_govs')->insert([
            'name' => 'Abua/Odual',
            'state_id' => '32'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ahoada East',
            'state_id' => '32'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ahoada West',
            'state_id' => '32'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Akuku Toru',
            'state_id' => '32'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Adoni',
            'state_id' => '32'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Asari-Toru',
            'state_id' => '32'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Bonny',
            'state_id' => '32'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Degema',
            'state_id' => '32'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Emohua',
            'state_id' => '32'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Eleme',
            'state_id' => '32'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Etche',
            'state_id' => '32'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Gokana',
            'state_id' => '32'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ikwerre',
            'state_id' => '32'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Khana',
            'state_id' => '32'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Mubi South',
            'state_id' => '32'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Obia/Akpor',
            'state_id' => '32'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ogba/Egbema/Ndoni',
            'state_id' => '32'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Ogu/Bolo',
            'state_id' => '32'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Okrika',
            'state_id' => '32'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Omumma',
            'state_id' => '32'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Opobo/Nkoro',
            'state_id' => '32'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Oyigbo',
            'state_id' => '32'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Port-Harcourt',
            'state_id' => '32'
        ]);
          DB::table('local_govs')->insert([
            'name' => 'Tai',
            'state_id' => '32'
        ]);

        // Sokoto
        DB::table('local_govs')->insert([
            'name' => 'Binji',
            'state_id' => '33'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Bodinga',
            'state_id' => '33'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Dange-shnsi',
            'state_id' => '33'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Gada',
            'state_id' => '33'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Goronyo',
            'state_id' => '33'
        ]);

		DB::table('local_govs')->insert([
            'name' => 'Gudu',
            'state_id' => '33'
        ]);

		DB::table('local_govs')->insert([
            'name' => 'Gawabawa',
            'state_id' => '33'
        ]);

		DB::table('local_govs')->insert([
            'name' => 'Illela',
            'state_id' => '33'
        ]);

		DB::table('local_govs')->insert([
            'name' => 'Isa',
            'state_id' => '33'
        ]);

		DB::table('local_govs')->insert([
            'name' => 'Kware',
            'state_id' => '33'
        ]);

		DB::table('local_govs')->insert([
            'name' => 'Kebba',
            'state_id' => '33'
        ]);

		DB::table('local_govs')->insert([
            'name' => 'Rabah',
            'state_id' => '33'
        ]);

		DB::table('local_govs')->insert([
            'name' => 'Sabon birni',
            'state_id' => '33'
        ]);

		DB::table('local_govs')->insert([
            'name' => 'Shagari',
            'state_id' => '33'
        ]);

		DB::table('local_govs')->insert([
            'name' => 'Silame',
            'state_id' => '33'
        ]);

		DB::table('local_govs')->insert([
            'name' => 'Sokoto North',
            'state_id' => '33'
        ]);

		DB::table('local_govs')->insert([
            'name' => 'Sokoto South',
            'state_id' => '33'
        ]);

		DB::table('local_govs')->insert([
            'name' => 'Tambuwal',
            'state_id' => '33'
        ]);

		DB::table('local_govs')->insert([
            'name' => 'Tqngaza',
            'state_id' => '33'
        ]);

		DB::table('local_govs')->insert([
            'name' => 'Tureta',
            'state_id' => '33'
        ]);

		DB::table('local_govs')->insert([
            'name' => 'Wamako',
            'state_id' => '33'
        ]);

		DB::table('local_govs')->insert([
            'name' => 'Wurno',
            'state_id' => '33'
        ]);

		DB::table('local_govs')->insert([
            'name' => 'Yabo',
            'state_id' => '33'
        ]);

        // Taraba
        DB::table('local_govs')->insert([
            'name' => 'Ardo-kola',
            'state_id' => '34'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Bali',
            'state_id' => '34'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Donga',
            'state_id' => '34'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Gashaka',
            'state_id' => '34'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Cassol',
            'state_id' => '34'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Ibi',
            'state_id' => '34'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Jalingo',
            'state_id' => '34'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Karin-Lamido',
            'state_id' => '34'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Kurmi',
            'state_id' => '34'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Lau',
            'state_id' => '34'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Sardauna',
            'state_id' => '34'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Takum',
            'state_id' => '34'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'ussa',
            'state_id' => '34'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Wukari',
            'state_id' => '34'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Yorro',
            'state_id' => '34'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'zing',
            'state_id' => '34'
        ]);

        // Yobe
        DB::table('local_govs')->insert([
            'name' => 'Bade',
            'state_id' => '35'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Bursari',
            'state_id' => '35'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Damaturu',
            'state_id' => '35'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Fika',
            'state_id' => '35'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Fune',
            'state_id' => '35'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Geidam',
            'state_id' => '35'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Gujba',
            'state_id' => '35'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Gulani',
            'state_id' => '35'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Jakusko',
            'state_id' => '35'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Karasuwa',
            'state_id' => '35'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Karawa',
            'state_id' => '35'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Machina',
            'state_id' => '35'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Nangere',
            'state_id' => '35'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Nguru Potiskum',
            'state_id' => '35'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Tarmua',
            'state_id' => '35'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Yunusari ',
            'state_id' => '35'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Yusufari',
            'state_id' => '35'
        ]);

        //Zamfara
        DB::table('local_govs')->insert([
            'name' => 'Anka',
            'state_id' => '36'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Bakura',
            'state_id' => '36'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Birnin Magaji',
            'state_id' => '36'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Bukkuyum',
            'state_id' => '36'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Bungudu',
            'state_id' => '36'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Gummi',
            'state_id' => '36'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Gusau',
            'state_id' => '36'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Kaura',
            'state_id' => '36'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Namoda',
            'state_id' => '36'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Maradun',
            'state_id' => '36'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Maru',
            'state_id' => '36'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Shinkafi',
            'state_id' => '36'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Talata Mafara',
            'state_id' => '36'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Tsafe',
            'state_id' => '36'
        ]);

        DB::table('local_govs')->insert([
            'name' => 'Zurmi',
            'state_id' => '36'
        ]);

        //FCT
        DB::table('local_govs')->insert([
            'name' => 'Gwagwalada ',
            'state_id' => '37'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Kuje',
            'state_id' => '37'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Abaji',
            'state_id' => '37'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Abuja Municipal',
            'state_id' => '37'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Bwari',
            'state_id' => '37'
        ]);

         DB::table('local_govs')->insert([
            'name' => 'Kwali',
            'state_id' => '37'
        ]);
    }
}
