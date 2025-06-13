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

        character::create([
            'name' => 'Lumine',
            'game_id' => 1,
            'description' => 'The Traveler from another world',
            'image' => 'img/character/lumine.jpg',
        ]);
        character::create([
            'name' => 'Aether',
            'game_id' => 1,
            'description' => 'The Traveler from another world',
            'image' => 'img/character/aether.jpg',
        ]);
        character::create([
            'name' => 'Paimon',
            'game_id' => 1,
            'description' => 'The Traveler\'s companion',
            'image' => 'img/character/paimon.jpg',
        ]);

        // Characters for Honkai: Star Rail

        character::create([
            'name' => 'March 7th',
            'game_id' => 2,
            'description' => 'A member of the Astral Express crew',
            'image' => 'img/character/march7th.jpg',
        ]);
        character::create([
            'name' => 'Dan Heng',
            'game_id' => 2,
            'description' => 'A member of the Astral Express crew',
            'image' => 'img/character/danheng.jpg',
        ]);
        character::create([
            'name' => 'Herta',
            'game_id' => 2,
            'description' => 'The genius scientist of the Herta Space Station',
            'image' => 'img/character/herta.jpg',
        ]);

        // Characters for Zenless Zone Zero
        character::create([
            'name' => 'Wise',
            'game_id' => 3,
            'description' => 'One of the main characters in Zenless Zone Zero',
            'image' => 'img/character/wise.jpg',
        ]);
        character::create([
            'name' => 'Belle',
            'game_id' => 3,
            'description' => 'one of the main characters in Zenless Zone Zero',
            'image' => 'img/character/belle.jpg',
        ]);

        // Characters for Wuthering Waves
        character::create([
            'name' => 'Sakura',
            'game_id' => 4,
            'description' => 'A warrior from the Wuthering Waves universe',
            'image' => 'img/character/sakura.jpg',
        ]);
        character::create([
            'name' => 'Kaito',
            'game_id' => 4,
            'description' => 'A skilled fighter from the Wuthering Waves universe',
            'image' => 'img/character/kaito.jpg',
        ]);
        character::create([
            'name' => 'Yuki',
            'game_id' => 4,
            'description' => 'A mysterious character from the Wuthering Waves universe',
            'image' => 'img/character/yuki.jpg',
        ]);
    }
}
