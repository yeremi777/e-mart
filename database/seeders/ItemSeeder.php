<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->smartphones();
        $this->laptops();
        $this->voucher_games();
    }

    private function smartphones()
    {
        $smartphones = [
            'Samsung Galaxy A20s',
            'Samsung Galaxy A70',
            'Samsung Galaxy S20 Plus',
            'Samsung Galaxy S20',
            'Samsung Galaxy Z Flip',
            'Samsung Galaxy S20 FE',
            'Iphone 12 RAM 128 GB',
            'Iphone 6S RAM 128 GB',
            'Iphone XS MAX RAM 512 GB',
            'Oppo A31',
            'Oppo A53',
            'Oppo Reno',
        ];

        $smartphone_pictures = [
            'samsung_galaxy_a20s.jpg',
            'samsung_galaxy_a70.jpg',
            'samsung_galaxy_s20plus.jpg',
            'samsung_galaxy_s20.jpg',
            'samsung_galaxy_zflip.jpg',
            'samsung_galaxy_S20_FE.jpg',
            'iphone_12.jpg',
            'iphone_6S.jpg',
            'iphone_XS_MAX.jpg',
            'oppo_A31.jpg',
            'oppo_A53.jpg',
            'oppo_Reno.jpg',
        ];

        $prices = [
            2375000,
            4350000,
            10595000,
            8690000,
            15499000,
            9999000,
            15300000,
            3600000,
            9900000,
            2999000,
            2499000,
            7200000,
        ];

        for ($i = 0; $i < count($smartphones); $i++) {
            Item::create([
                'category_id' => 1,
                'name' => $smartphones[$i],
                'price' => $prices[$i],
                'picture' => $smartphone_pictures[$i]
            ]);
        }
    }

    private function laptops()
    {
        $laptops = [
            'ASUS VivoBook 14 K413',
            'ASUS ZenBook S13 UX392FN',
            'ASUS ExpertBook B9450',
            'HP Pavilion Gaming 15-ec0001ax',
            'HP EliteBook 8440p',
            'HP OMEN 17-an002tx',
            'TOSHIBA Satellite C800-1024',
            'TOSHIBA Portege Z30-A104',
            'ASUS ROG Zephyrus Duo 15',
            'ASUS ROG GX700',
            'Dell Inspiron 14-N4050',
            'Dell Alienware 17',
        ];

        $laptop_pictures = [
            'ASUS_VivoBook_14_K413.jpg',
            'ASUS_Zenbook_S13_UX392FN_L_1.jpg',
            'ASUS_ExpertBook_B9450.jpg',
            'HP_Pavilion_Gaming_15_ec0001ax.jpg',
            'HP_EliteBook_8440p.jpg',
            'HP_OMEN_17-an002tx.jpg',
            'TOSHIBA_Satellite_C800-1024.jpg',
            'TOSHIBA_Portege_Z30-A104.jpg',
            'ASUS_ROG_Zephyrus_Duo_15.jpg',
            'ASUS_ROG_GX700.jpg',
            'Dell_Inspiron_14-N4050.jpg',
            'Dell_Alienware_17.jpg',
        ];

        $prices = [
            9499000,
            1749000,
            34999000,
            8989000,
            2550000,
            38129640,
            6354000,
            6950000,
            64299000,
            79999000,
            4770000,
            12000000,
        ];

        for ($i = 0; $i < count($laptops); $i++) {
            Item::create([
                'category_id' => 2,
                'name' => $laptops[$i],
                'price' => $prices[$i],
                'picture' => $laptop_pictures[$i]
            ]);
        }
    }

    private function voucher_games()
    {
        $voucher_games = [
            'Mobile Legend 1000 Diamond',
            'PUBG Mobile 1000 UC',
            'Fire Fire 1000 Diamond',
            'Wave Game 1000 Coin',
            'VTC Online',
            'Fast Black 1000 coin onlife',
            'Rose Online 100K rose',
            'Playon 100k playon',
            'Lyto 100k coin',
            'Gemscool 100k G-Cash',
            'Cabal 10K Gold',
            'Zynga 100K coin',
        ];

        $voucher_game_pictures = [
            'mobile_legend.jpg',
            'pubg_mobile_.jpg',
            'free_fire.jpg',
            'wave_game.jpg',
            'VTC_Online.jpg',
            'Fast_Black.jpg',
            'rose_online.jpg',
            'playon.png',
            'lyto.jpg',
            'gemscool.jpg',
            'cabal.jpg',
            'zynga.jpg',
        ];

        $prices = [
            300000,
            200000,
            150000,
            250000,
            350000,
            200000,
            225000,
            210000,
            260000,
            275000,
            150000,
            100000,
        ];

        for ($i = 0; $i < count($voucher_games); $i++) {
            Item::create([
                'category_id' => 3,
                'name' => $voucher_games[$i],
                'price' => $prices[$i],
                'picture' => $voucher_game_pictures[$i]
            ]);
        }
    }
}
