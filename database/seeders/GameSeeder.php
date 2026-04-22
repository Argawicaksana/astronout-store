<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Service;

class GameSeeder extends Seeder {
    public function run(): void {
        // Nama file gambar ('t') disesuaikan dengan foto folder kamu (.jpg)
        $games = [
            ['n' => 'Mobile Legends', 's' => 'mobile-legends', 't' => 'ml.jpg'],
            ['n' => 'Free Fire', 's' => 'free-fire', 't' => 'FreeFireIndonesia.jpg'],
            ['n' => 'PUBG Mobile', 's' => 'pubg-mobile', 't' => 'pubg.jpg'],
            ['n' => 'Valorant', 's' => 'valorant', 't' => 'valorant.jpg'],
            ['n' => 'Genshin Impact', 's' => 'genshin-impact', 't' => 'gensin.jpg'],
            ['n' => 'Honor of Kings', 's' => 'hok', 't' => 'Honor Of King.jpg'],
            ['n' => 'CODM', 's' => 'codm', 't' => 'callofduty.jpg'],
            ['n' => 'Point Blank', 's' => 'pb', 't' => 'Point Blank.jpg'],
            ['n' => 'Roblox', 's' => 'roblox', 't' => 'roblox.jpg'],
            ['n' => 'Metal Slug', 's' => 'metal-slug', 't' => 'godom.jpg'],
            ['n' => 'Clash of Clans', 's' => 'coc', 't' => 'clashroyal.jpg'],
            ['n' => 'Clash Royale', 's' => 'cr', 't' => 'clashroyal.jpg'],
            ['n' => 'Arena of Valor', 's' => 'aov', 't' => 'arenaofvalor.jpg'],
            ['n' => 'Eggy Party', 's' => 'eggy-party', 't' => 'eggyparty.jpg'],
            ['n' => 'Sausage Man', 's' => 'sausage-man', 't' => 'sausageman.jpg'],
            ['n' => 'Undawn', 's' => 'undawn', 't' => 'Undawn.jpg'],
            ['n' => 'Delta Force', 's' => 'delta-force', 't' => 'deltaforce.jpg'],
            ['n' => 'Teamfight Tactics', 's' => 'tft', 't' => 'teamfight.jpg'],
        ];

        foreach ($games as $g) {
            $cat = Category::create([
                'name' => $g['n'], 
                'slug' => $g['s'], 
                'thumbnail' => $g['t'],
                'code' => 'GAME'
            ]);
            
            Service::create(['category_id' => $cat->id, 'name' => 'Paket Hemat', 'price' => 10000, 'code' => 'HMT']);
            Service::create(['category_id' => $cat->id, 'name' => 'Paket Sultan', 'price' => 100000, 'code' => 'SLT']);
        }
    }
}