<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Siti Komalasari",
        "email" => "onyourmm@yahoo.com",
        "image" => "s.jpg"
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Siti Komalasari",
            "body" => "Saturnus adalah sebuah planet di tata surya yang dikenal juga sebagai planet bercincin, dan merupakan planet terbesar kedua di tata surya setelah Jupiter. 
            Jarak Saturnus sangat jauh dari Matahari, karena itulah Saturnus tampak tidak terlalu jelas dari Bumi. 
            Saturnus berevolusi dalam waktu 29,46 tahun. Setiap 378 hari, Bumi, Saturnus dan Matahari akan berada dalam satu garis lurus. 
            Selain berevolusi, Saturnus juga berotasi dalam waktu yang sangat singkat, yaitu 10 jam 40 menit 24 detik.
            Saturnus memiliki kerapatan yang rendah karena sebagian besar zat penyusunnya berupa gas dan cairan. 
            Inti Saturnus diperkirakan terdiri dari batuan padat dengan atmosfer tersusun atas gas amonia dan metana, hal ini tidak memungkinkan adanya kehidupan di Saturnus."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Chairunissa Koswara",
            "body" => "Bumi, merupakan salah satu planet di tata surya yang juga berpusat pada matahari. 
            Sama dengan planet yang lain, Bumi juga melakukan revolusi bumi dan juga rotasi bumi. 
            Bumi menduduki posisi ketiga (jarak dari matahari) setelah planet Merkurius dan planet Venus. 
            Mengenai Bumi sendiri, saya yakin pasti semua orang telah mengenal dengan baik, karena bumi sendiri merupakan rumah dimana manusia (kita) tinggal.
            Bumi merupakan planet yang paling istimewa. Dikatakan paling istimewa karena planet bumi merupakan satu- satunya planet yang cocok untuk dihuni makhluk hidup. 
            Bukan hanya manusia, namun juga binatang dan tumbuh- tumbuhan. Suhu udara di Bumi tidak panas, namun juga tidak dingin. 
            Bumi mendapatkan perlindungan dari atmosfer, sehingga suhu di bumi tidak terlalu panas, namun hangat. 
            Karena letaknya yang tidak terlalu jauh dengan matahari, maka Bumi juga memperoleh sinar matahari cukup, sehingga mendukung proses kehidupan makhluk hidup."
        ]
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


// Halaman Single Post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Siti Komalasari",
            "body" => "Saturnus adalah sebuah planet di tata surya yang dikenal juga sebagai planet bercincin, dan merupakan planet terbesar kedua di tata surya setelah Jupiter. 
            Jarak Saturnus sangat jauh dari Matahari, karena itulah Saturnus tampak tidak terlalu jelas dari Bumi. 
            Saturnus berevolusi dalam waktu 29,46 tahun. Setiap 378 hari, Bumi, Saturnus dan Matahari akan berada dalam satu garis lurus. 
            Selain berevolusi, Saturnus juga berotasi dalam waktu yang sangat singkat, yaitu 10 jam 40 menit 24 detik.
            Saturnus memiliki kerapatan yang rendah karena sebagian besar zat penyusunnya berupa gas dan cairan. 
            Inti Saturnus diperkirakan terdiri dari batuan padat dengan atmosfer tersusun atas gas amonia dan metana, hal ini tidak memungkinkan adanya kehidupan di Saturnus."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Chairunissa Koswara",
            "body" => "Bumi, merupakan salah satu planet di tata surya yang juga berpusat pada matahari. 
            Sama dengan planet yang lain, Bumi juga melakukan revolusi bumi dan juga rotasi bumi. 
            Bumi menduduki posisi ketiga (jarak dari matahari) setelah planet Merkurius dan planet Venus. 
            Mengenai Bumi sendiri, saya yakin pasti semua orang telah mengenal dengan baik, karena bumi sendiri merupakan rumah dimana manusia (kita) tinggal.
            Bumi merupakan planet yang paling istimewa. Dikatakan paling istimewa karena planet bumi merupakan satu- satunya planet yang cocok untuk dihuni makhluk hidup. 
            Bukan hanya manusia, namun juga binatang dan tumbuh- tumbuhan. Suhu udara di Bumi tidak panas, namun juga tidak dingin. 
            Bumi mendapatkan perlindungan dari atmosfer, sehingga suhu di bumi tidak terlalu panas, namun hangat. 
            Karena letaknya yang tidak terlalu jauh dengan matahari, maka Bumi juga memperoleh sinar matahari cukup, sehingga mendukung proses kehidupan makhluk hidup."
        ]
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }


    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
