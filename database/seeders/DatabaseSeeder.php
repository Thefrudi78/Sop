<?php

namespace Database\Seeders;
use App\Models\character;
use App\Models\game;
use App\Models\answer;
use App\Models\question;

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
        $genshin = [
            "Aether",
            "Lumine",
            "Paimon",
            "Albedo",
            "Alhaitham",
            "Aloy",
            "Amber",
            "Barbara",
            "Beidou",
            "Bennett",
            "Candace",
            "Charlotte",
            "Chasca",
            "Chevreuse",
            "Chiori",
            "Chongyun",
            "Citlali",
            "Clorinde",
            "Collei",
            "Cyno",
            "Dahlia",
            "Dehya",
            "Diluc",
            "Diona",
            "Dori",
            "Emilie",
            "Escoffier",
            "Eula",
            "Faruzan",
            "Fischl",
            "Freminet",
            "Furina",
            "Ganyu",
            "Gorou",
            "Hu Tao",
            "Iansan",
            "Ifa",
            "Jean",
            "Kachina",
            "Kaedehara Kazuha",
            "Kaeya",
            "Kamisato Ayaka",
            "Kamisato Ayato",
            "Kaveh",
            "Keqing",
            "Kinich",
            "Kirara",
            "Klee",
            "Kujou Sara",
            "Kuki Shinobu",
            "Lan Yan",
            "Layla",
            "Lisa",
            "Lynette",
            "Lyney",
            "Mavuika",
            "Mika",
            "Mona",
            "Mualani",
            "Nahida",
            "Navia",
            "Neuvillette",
            "Nilou",
            "Ningguang",
            "Noelle",
            "Ororon",
            "Qiqi",
            "Raiden Shogun",
            "Razor",
            "Rosaria",
            "Sangonomiya Kokomi",
            "Sayu",
            "Sethos",
            "Shenhe",
            "Shikanoin Heizou",
            "Sigewinne",
            "Skirk",
            "Sucrose",
            "Tartaglia",
            "Thoma",
            "Tighnari",
            "Varesa",
            "Venti",
            "Wanderer",
            "Wriothesley",
            "Xiangling",
            "Xianyun",
            "Xiao",
            "Xilonen",
            "Xingqiu",
            "Xinyan",
            "Yae Miko",
            "Yanfei",
            "Yaoyao",
            "Yelan",
            "Yoimiya",
            "Yumemizuki Mizuki",
            "Yun Jin",
            "Zhongli",
            "Dainsleif"
        ];

        foreach ($genshin as $characterName) {
            character::create([
                'name' => $characterName,
                'game_id' => 1,
                'image' => 'img/character/genshin/' . strtolower(str_replace(' ', '', $characterName)) . '.jpg',
            ]);
        }

        // Characters for Honkai: Star Rail
        $honkai = [
            "Stelle",
            "Caelus",
            "Acheron",
            "Aglaea",
            "Anaxa",
            "Argenti",
            "Arlan",
            "Asta",
            "Aventurine",
            "Bailu",
            "Black Swan",
            "Blade",
            "Boothill",
            "Bronya",
            "Castorice",
            "Clara",
            "Dan Heng",
            "Dr. Ratio",
            "Feixiao",
            "Firefly",
            "Fugue",
            "Fu Xuan",
            "Gallagher",
            "Gepard",
            "Guinaifen",
            "Hanya",
            "Herta",
            "Himeko",
            "Hook",
            "Huohuo",
            "Hyacine",
            "Imbibitor Lunae",
            "Jade",
            "Jiaoqiu",
            "Jing Yuan",
            "Jingliu",
            "Kafka",
            "Lingsha",
            "Luka",
            "Luocha",
            "Lynx",
            "March 7th",
            "Misha",
            "Moze",
            "Mydei",
            "Natasha",
            "Pela",
            "Qingque",
            "Rappa",
            "Robin",
            "Ruan Mei",
            "Sampo",
            "Seele",
            "Serval",
            "Silver Wolf",
            "Sparkle",
            "Sunday",
            "Sushang",
            "The Herta",
            "Tingyun",
            "Topaz",
            "Welt",
            "Xueyi",
            "Yanqing",
            "Yukong",
            "Yunli"
            ];
        foreach ($honkai as $characterName) {
            character::create([
                'name' => $characterName,
                'game_id' => 2,
                'image' => 'img/character/honkai/' . strtolower(str_replace([' ', ':'], '', $characterName)) . '.jpg',
            ]);
        }

        // Characters for Zenless Zone Zero
        $zenless = [
            "Wise",
            "Belle",
            "Alexandrina Sebastiane (Rina)",
            "Anby Demara",
            "Anton Ivanov",
            "Asaba Harumasa",
            "Astra Yao",
            "Ben Bigger",
            "Billy Kid",
            "Burnice White",
            "Caesar King",
            "Corin Wickes",
            "Evelyn",
            "Ellen Joe",
            "Grace Howard",
            "Hoshimi Miyabi",
            "Jane Doe",
            "Koleda Belobog",
            "Lighter",
            "Luciana de Montefio (Lucy)",
            "Nekomiya Mana (Nekomata)",
            "Nicole Demara",
            "Piper Wheel",
            "Pulchra Fellini",
            "Qingyi",
            "Seth Lowell",
            "Soldier 11",
            "Soukaku",
            "Tsukishiro Yanagi",
            "Von Lycaon",
            "Zhu Yuan"
            ];
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

        foreach (character::all() as $character) {
            question::create([
                'image' => $character->image,
                'name' => $character->name,
                'game_id' => $character->game_id,
            ]);
        }

    }
}
