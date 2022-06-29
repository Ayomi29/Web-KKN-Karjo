<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
            'name' => 'Ayomi Satria Pratama',
            'username' => 'Ayomisp',
            'is_admin' => '1',
            'email' => 'ayomisatria@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345')
        ]);
        User::create([
            'name' => 'Admin',
            'username' => 'Admin',
            'is_admin' => '1',
            'email' => 'admin_permatasehati@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('kwtpermatasehat1')
        ]);
        // User::factory(2)->create();

        Category::create([
            'name' => 'Tanaman Toga',
            'slug' => 'tanaman-toga'
        ]);
        Category::create([
            'name' => 'Perkebunan',
            'slug' => 'perkebunan'
        ]);
        Category::create([
            'name' => 'Kegiatan',
            'slug' => 'kegiatan'
        ]);
        Category::create([
            'name' => 'Hidroponik',
            'slug' => 'hidroponik'
        ]);
        Category::create([
            'name' => 'Berita Acara',
            'slug' => 'berita-acara'
        ]);
        Post::factory(3)->create();
    }
}
