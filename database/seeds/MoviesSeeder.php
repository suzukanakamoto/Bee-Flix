<?php

use Illuminate\Database\Seeder;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            [
                'genres_id' => '1',
                'title' => 'Files of Kindaichi Young Neo ',
                'photo' => 'img/kindaichi.png',
                'description' => 'A new series of Kindaichi mysteries, beginning with murders that seem to imitate a Vampire Legend...
                ',
                'rating' => '8',
            ],
            [
                'genres_id' => '1',
                'title' => 'Your Lie In April',
                'photo' => 'img/kaori.png',
                'description' => 'Based on the manga series of the same name, Shigatsu wa Kimi no Uso approaches the story of Kousei recovery as he discovers that music is more than playing each note perfectly, and a single melody can bring in the fresh spring air of April.',
                'rating' => '9',
            ],
            [
                'genres_id' => '1',
                'title' => 'The Pride of The Temp',
                'photo' => 'img/pride of the temp.png',
                'description' => 'This timely drama  examines the different attitudes toward temp workers and regular employees.',
                'rating' => '7',
            ],

            [
                'genres_id' => '1',
                'title' => 'Hey Sensei. Dont You Know',
                'photo' => 'img/hey sensei.png',
                'description' => 'A love story between a manga artist with no experience with romance and a popular, charismatic beautician.',
                'rating' => '7',
            ],

            [
                'genres_id' => '2',
                'title' => 'Attack On Titan Final Season',
                'photo' => 'img/snk.png',
                'description' => 'Final Season of Shingeki no Kyojin.',
                'rating' => '10',
            ],
            [
                'genres_id' => '2',
                'title' => 'Fire Force Season 2',
                'photo' => 'img/fire force.png',
                'description' => 'The second season of Enen no Shouboutai.',
                'rating' => '8',
            ],
            [
                'genres_id' => '2',
                'title' => 'Danmachi Season 3',
                'photo' => 'img/danmachi.png',
                'description' => "Third season of Dungeon ni Deai wo Motomeru no wa Machigatteiru Darou ka.",
                'rating' => '8',
            ],
            [
                'genres_id' => '2',
                'title' => 'The Rising Of Shield Hero 2',
                'photo' => 'img/shield hero.png',
                'description' => "Second season of Tate no Yuusha no Nariagari.",
                'rating' => '8',
            ],

            [
                'genres_id' => '3',
                'title' => 'Shimura Zoo',
                'photo' => 'img/shimura zoo.png',
                'description' => 'Introducing a brand new animal entertainment show!',
                'rating' => '7',
            ],

            [
                'genres_id' => '3',
                'title' => 'Gochi Dinner',
                'photo' => 'img/gochi.png',
                'description' => 'What happens when you combine six hungry contestants, one world-renowned chef, a dash of guessing and a pinch of luck? An amusing blend of non-stop fun and entertainment!',
                'rating' => '7',
            ],
            [
                'genres_id' => '3',
                'title' => 'AKBingo',
                'photo' => 'img/akbingo.png',
                'description' => 'AKBingo! (stylized in all caps) was a Japanese television variety show featuring Japanese idol girl group AKB48. The show aired weekly on Nippon Television.',
                'rating' => '7',
            ],
            [
                'genres_id' => '3',
                'title' => "Nino San",
                'photo' => 'img/ninosan.png',
                'description' => 'In Ninosan, the greatest strength (and also weakness) of the show is in it’s ever changing theme. ',
                'rating' => '7',
            ],
        ]);
    }
}
