<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class HuisdierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('huisdier')->insert([
            "baasje_id" => "1",
            "huisdiernaam" => "Eriri",
            "soort" => "hond",
            "image" =>"/img/hond_2.jpg",
            "oppasDatum" => "15-04-2021",
            "uurtarief" => "10",
            "duurOppas" => "5 dagen",
            "huisdierInformatie" => "Eriri is een lieve shiba die graag samen met je op de bank komt liggen. Ook houdt ze ervan om lekker buiten te wandelen. Verder heeft ze geen speciale behoeften."

        ]);

        DB::table('huisdier')->insert([
            "baasje_id" => "2",
            "huisdiernaam" => "Betty",
            "soort" => "hond",
            "image" =>"/img/hond_3.jpg",
            "oppasDatum" => "02-05-2021",
            "uurtarief" => "11,50",
            "duurOppas" => "11 dagen",
            "huisdierInformatie" => "Betty is een speelse hond, ze vind het erg leuk om achter gegooide ballen aan te rennne en is daarom ook graag buiten. Ze wordt meestal ongeveer 5 keer uitgelaten per dag. Verder kan ze sommige soorten voer niet goed verteren, wij zullen het voer daarom meegeven."
        ]);

        DB::table('huisdier')->insert([
            "baasje_id" => "3",
            "huisdiernaam" => "Utako",
            "soort" => "kat",
            "image" =>"/img/kat_1.jpg",
            "oppasDatum" => "12-04-2021",
            "uurtarief" => "9",
            "duurOppas" => "7 dagen",
            "huisdierInformatie" => "Utako is een rustige kat, ze komt vaak op schoot liggen en wilt dan graag dat je haar aait. Ze bijt niet en krabt je ook niet. Wij verschonen de kattenbak meestal om de 2 dagen. Wij regelen haar voer."
        ]);

        DB::table('huisdier')->insert([
            "baasje_id" => "4",
            "huisdiernaam" => "Utaha",
            "soort" => "kat",
            "image" =>"/img/kat_2.jpg",
            "oppasDatum" => "20-04-2021",
            "uurtarief" => "12",
            "duurOppas" => "8 dagen",
            "huisdierInformatie" => "Utaha is een speelse kat, ze speelt graag met de vele speeltjes die ze heeft liggen. Ook vind ze het erg leuk als jij samen met haar speelt. Verder mag ze maar 1 soort voer omdat ze anders last krijgt van haar darmen, wij zorgen dat er genoeg van dit voer is."
        ]);

        DB::table('huisdier')->insert([
            "baasje_id" => "5",
            "huisdiernaam" => "Megumi",
            "soort" => "hond",
            "image" =>"/img/hond_1.jpg",
            "oppasDatum" => "10-05-2021",
            "uurtarief" => "10,50",
            "duurOppas" => "9 dagen",
            "huisdierInformatie" => "Megumi is een lieve en speelse hond, ze is nog wel jong dus moet soms nog wat dingen leren. Ze komt graag bij je op schoot liggen en is ook graag buiten. Ze heeft verder geen speciale behoeften."
        ]);

        DB::table('huisdier')->insert([
            "baasje_id" => "6",
            "huisdiernaam" => "Sully",
            "soort" => "kat",
            "image" =>"/img/kat_3.jpg",
            "oppasDatum" => "01-06-2021",
            "uurtarief" => "11",
            "duurOppas" => "12 dagen",
            "huisdierInformatie" => "Sully is een lieve grappige kat, hij kan af en toe wat onhandig zijn. Hij wilt vaak graag dat je bij hem komt staan als hij aan het eten is."
        ]);
    }
}
