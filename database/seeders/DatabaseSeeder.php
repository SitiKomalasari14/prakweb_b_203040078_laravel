<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Siti Komalasari',
            'username' => 'Mala',
            'email' => '203040078@mail.unpas.ac.id',
            'password' => bcrypt('password')
        ]);

        // User::create([
        //     'name' => 'Hifki Y',
        //     'email' => 'hikfi71@gmail.com',
        //     'password' => bcrypt('54321')
        // ]);


        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa, fugiat labore aliquam esse odio deleniti!',
        //     'body' => '<p>Jupiter adalah planet terdekat kelima dari Matahari setelah Merkurius, Venus, Bumi, dan Mars. Planet ini juga merupakan planet terbesar di Tata Surya.Jupiter merupakan raksasa gas dengan massa seperseribu massa Matahari dan dua setengah kali jumlah massa semua planet lain di Tata Surya.</p><p>Planet ini dan raksasa gas lain di Tata Surya (yaitu Saturnus, Uranus, dan Neptunus) kadang-kadang disebut planet Jovian atau planet luar.Jupiter sebagian besar terdiri dari hidrogen dan helium. Seperempat massa Jupiter merupakan helium, walaupun jumlahnya hanya sepersepuluh komposisi Jupiter.</p><p> Planet ini mungkin memiliki inti berbatu yang terdiri dari unsur-unsur berat,[namun tidak memiliki permukaan yang padat layaknya raksasa gas lainnya. Akibat rotasinya yang cepat, planet ini berbentuk bulat pepat (terdapat tonjolan di sekitar khatulistiwa Jupiter)</p>',
        //     'category_id' => 1,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa, fugiat labore aliquam esse odio deleniti!',
        //     'body' => '<p>Jupiter adalah planet terdekat kelima dari Matahari setelah Merkurius, Venus, Bumi, dan Mars. Planet ini juga merupakan planet terbesar di Tata Surya.Jupiter merupakan raksasa gas dengan massa seperseribu massa Matahari dan dua setengah kali jumlah massa semua planet lain di Tata Surya.</p><p>Planet ini dan raksasa gas lain di Tata Surya (yaitu Saturnus, Uranus, dan Neptunus) kadang-kadang disebut planet Jovian atau planet luar.Jupiter sebagian besar terdiri dari hidrogen dan helium. Seperempat massa Jupiter merupakan helium, walaupun jumlahnya hanya sepersepuluh komposisi Jupiter.</p><p> Planet ini mungkin memiliki inti berbatu yang terdiri dari unsur-unsur berat,[namun tidak memiliki permukaan yang padat layaknya raksasa gas lainnya. Akibat rotasinya yang cepat, planet ini berbentuk bulat pepat (terdapat tonjolan di sekitar khatulistiwa Jupiter)</p>',
        //     'category_id' => 1,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa, fugiat labore aliquam esse odio deleniti!',
        //     'body' => '<p>Jupiter adalah planet terdekat kelima dari Matahari setelah Merkurius, Venus, Bumi, dan Mars. Planet ini juga merupakan planet terbesar di Tata Surya.Jupiter merupakan raksasa gas dengan massa seperseribu massa Matahari dan dua setengah kali jumlah massa semua planet lain di Tata Surya.</p><p>Planet ini dan raksasa gas lain di Tata Surya (yaitu Saturnus, Uranus, dan Neptunus) kadang-kadang disebut planet Jovian atau planet luar.Jupiter sebagian besar terdiri dari hidrogen dan helium. Seperempat massa Jupiter merupakan helium, walaupun jumlahnya hanya sepersepuluh komposisi Jupiter.</p><p> Planet ini mungkin memiliki inti berbatu yang terdiri dari unsur-unsur berat,[namun tidak memiliki permukaan yang padat layaknya raksasa gas lainnya. Akibat rotasinya yang cepat, planet ini berbentuk bulat pepat (terdapat tonjolan di sekitar khatulistiwa Jupiter)</p>',
        //     'category_id' => 2,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa, fugiat labore aliquam esse odio deleniti!',
        //     'body' => '<p>Jupiter adalah planet terdekat kelima dari Matahari setelah Merkurius, Venus, Bumi, dan Mars. Planet ini juga merupakan planet terbesar di Tata Surya.Jupiter merupakan raksasa gas dengan massa seperseribu massa Matahari dan dua setengah kali jumlah massa semua planet lain di Tata Surya.</p><p>Planet ini dan raksasa gas lain di Tata Surya (yaitu Saturnus, Uranus, dan Neptunus) kadang-kadang disebut planet Jovian atau planet luar.Jupiter sebagian besar terdiri dari hidrogen dan helium. Seperempat massa Jupiter merupakan helium, walaupun jumlahnya hanya sepersepuluh komposisi Jupiter.</p><p> Planet ini mungkin memiliki inti berbatu yang terdiri dari unsur-unsur berat,[namun tidak memiliki permukaan yang padat layaknya raksasa gas lainnya. Akibat rotasinya yang cepat, planet ini berbentuk bulat pepat (terdapat tonjolan di sekitar khatulistiwa Jupiter)</p>',
        //     'category_id' => 2,
        //     'user_id' => 2

        // ]);
    }
}
