<?php

namespace Database\Seeders;

use App\Enums\Roles;
use Illuminate\Database\Seeder;
use App\Services\MyNoteCategoryService;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
            'role' => Roles::ADMIN,
        ]);

        \App\Models\Category::create([
            'slug' => 'aqidah',
            'name' => 'Aqidah',
        ]);

        \App\Models\Category::create([
            'slug' => 'sholat',
            'name' => 'Sholat',
        ]);

        \App\Models\Category::create([
            'slug' => 'puasa',
            'name' => 'Puasa',
        ]);

        \App\Models\Category::create([
            'slug' => 'zakat',
            'name' => 'Zakat',
        ]);

        \App\Models\Category::create([
            'slug' => 'haji-umrah',
            'name' => 'Haji dan Umrah',
        ]);

        \App\Models\Category::create([
            'slug' => 'muamalah',
            'name' => 'Muamalah',
        ]);

        \App\Models\Category::create([
            'slug' => 'thoharoh',
            'name' => 'Thoharoh',
        ]);

        \App\Models\Category::create([
            'slug' => 'waris',
            'name' => 'Waris',
        ]);

        for ($i=0; $i < 20; $i++) {
            $title = $faker->paragraph(1);
            \App\Models\Post::create([
                'title' => $title,
                'content' => $faker->paragraph(5),
                'excerpt' => $faker->paragraph(1),
                'is_approved' => true,
                'category_id' => rand(1,8),
                'user_id' => 1
            ]);
        }

        $noteCategory1 = \App\Models\NoteCategory::create([
            'name' => 'Amalan Harian',
        ]);

        $noteCategory2 = \App\Models\NoteCategory::create([
            'name' => 'Catatan Belanja',
        ]);

        for ($i=0; $i < 20; $i++) {
            $title = $faker->paragraph(1);
            \App\Models\NoteItem::create([
                'title' => $title,
                'note_category_id' => rand(1,2),
            ]);
        }

        MyNoteCategoryService::copyNoteCategory($noteCategory1->uuid, 1);
        MyNoteCategoryService::copyNoteCategory($noteCategory2->uuid, 1);

        $myNoteCategory1 = \App\Models\MyNoteCategory::create([
            'name' => 'Tugas Kantor',
            'user_id' => 1
        ]);

        $myNoteCategory2 = \App\Models\MyNoteCategory::create([
            'name' => 'Kerjaan Rumah',
            'user_id' => 1
        ]);

        for ($i=0; $i < 20; $i++) {
            $title = $faker->paragraph(1);
            \App\Models\MyNoteItem::create([
                'title' => $title,
                'my_note_category_id' => rand(1,2),
                'user_id' => 1
            ]);
        }
    }
}
