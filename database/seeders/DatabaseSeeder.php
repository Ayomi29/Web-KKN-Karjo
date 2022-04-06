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
            'email' => 'ayomisatria@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345')
        ]);
        User::factory(2)->create();

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
        Post::factory(40)->create();
    }
}
