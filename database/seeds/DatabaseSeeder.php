<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('leikstjori')->insert([
            ['nafn' => 'Ragnar P. Ragnarsson', 'tjoderni' => 'Island'],
            ['nafn' => 'James Gatz', 'tjoderni' => 'England'],
            ['nafn' => 'Beggi Helga', 'tjoderni' => 'Island'],
            ['nafn' => 'W.C. Bartek', 'tjoderni' => 'Kanada'],
            ['nafn' => 'Wibe Lund', 'tjoderni' => 'Danmork'],
        ]);
        DB::table('dvd')->insert([
            ['titill' => 'Vindurinn er blautur', 'adalleikari' => 'Petur Selland', 'utgafuar' => 1973, 'verd'=>2500, 'flokkur'=>'Spenna'],
            ['titill' => 'Veididellan er frabaer', 'adalleikari' => 'Gustaf Gustafsson', 'utgafuar' => 1999, 'verd'=>3550, 'flokkur'=>'Sport'],
            ['titill' => 'Into the wild', 'adalleikari' => 'John Johnson', 'utgafuar' => 2003, 'verd'=>3770, 'flokkur'=>'Drama'],
            ['titill' => 'The strider', 'adalleikari' => 'Biff Holmes', 'utgafuar' => 1969, 'verd'=>4520, 'flokkur'=>'Aevintyri']
        ]);
    }
}