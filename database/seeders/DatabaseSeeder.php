<?php

namespace Database\Seeders;
use App\Models\character;
use App\Models\game;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        game::create([
            'name' => 'Genshin Impact',
            'category' => 'Action RPG',
            'description' => 'An open-world action-adventure game set in teyvat',
            'image' => 'img/genshin.jpg',
        ]);
        game::create([
            'name' => 'Honkai: Star Rail',
            'category' => 'Turn-based RPG',
            'description' => 'A turn-based RPG set in the Honkai universe',
            'image' => 'img/honkai.jpg',
        ]);
        game::create([
            'name' => 'Zenless Zone Zero',
            'category' => 'Action RPG',
            'description' => 'An action RPG set in a post-apocalyptic world',
            'image' => 'img/zenless.jpg',
        ]);
        game::create([
            'name' => 'Wuthering Waves',
            'category' => 'Action RPG',
            'description' => 'An action RPG set in a fantasy world',
            'image' => 'img/wuthering_waves.jpg',
        ]);

        // Characters for Genshin Impact
        $genshin = ['Aether', 'Lumine', 'Paimon', 'Diluc', 'Zhongli', 'Raiden Shogun', 'Klee', 'Xiao', 'Ganyu', 'Albedo'];
        foreach ($genshin as $characterName) {
            character::create([
                'name' => $characterName,
                'game_id' => 1,
                'image' => 'img/character/genshin/' . strtolower(str_replace(' ', '', $characterName)) . '.jpg',
            ]);
        }

        // Characters for Honkai: Star Rail
        $honkai = ['March 7th', 'Dan Heng', 'Herta'];
        foreach ($honkai as $characterName) {
            character::create([
                'name' => $characterName,
                'game_id' => 2,
                'image' => 'img/character/honkai/' . strtolower(str_replace([' ', ':'], '', $characterName)) . '.jpg',
            ]);
        }

        // Characters for Zenless Zone Zero
        $zenless = ['Wise', 'Belle'];
        foreach ($zenless as $characterName) {
            character::create([
                'name' => $characterName,
                'game_id' => 3,
                'image' => 'img/character/zenless/' . strtolower(str_replace(' ', '', $characterName)) . '.jpg',
            ]);
        }

        // Characters for Wuthering Waves
        $wuthering = ['Sakura', 'Kaito', 'Yuki'];
        foreach ($wuthering as $characterName) {
            character::create([
                'name' => $characterName,
                'game_id' => 4,
                'image' => 'img/character/wuthering_waves/' . strtolower(str_replace(' ', '', $characterName)) . '.jpg',
            ]);
        }
    }
}
