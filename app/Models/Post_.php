<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama Saturnus",
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
            "title" => "Judul Post Kedua Bumi",
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

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
