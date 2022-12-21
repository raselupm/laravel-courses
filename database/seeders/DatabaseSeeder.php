<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Author;
use App\Models\Course;
use App\Models\Platform;
use App\Models\Review;
use App\Models\Series;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // create admin user
        User::create([
            'name' => 'Admin',
            'email' => 'hi@rasel.me',
            'password' => bcrypt('password'),
            'type' => 1,
        ]);

        $series = [
            [
                'name' => 'PHP',
                'image' => 'https://cdn.pixabay.com/photo/2017/08/05/11/16/logo-2582748_960_720.png',
            ],
            [
                'name' => 'JavaScript',
                'image' => 'https://cdn.pixabay.com/photo/2017/08/05/11/16/logo-2582748_960_720.png',
            ],
            [
                'name' => 'WordPress',
                'image' => 'https://cdn.pixabay.com/photo/2017/08/05/11/16/logo-2582748_960_720.png',
            ],
            [
                'name' => 'Laravel',
                'image' => 'https://cdn.pixabay.com/photo/2017/08/05/11/16/logo-2582748_960_720.png',
            ]
        ];
        foreach($series as $item) {
            Series::create([
                'name' => $item['name'],
                'image' => $item['image'],
            ]);
        }

        $topics = ['Eloquent', 'Validation', 'Authentication', 'Testing', 'Refactoring'];
        foreach($topics as $item) {
            $slug = strtolower(str_replace(' ', '-', $item));

            Topic::create([
                'name' => $item,
                'slug' => $slug
            ]);
        }

        $platforms = ['Laracasts', 'Youtube', 'Larajobs', 'Laravel News', 'Laracasts Forum'];
        foreach($platforms as $item) {
            Platform::create([
                'name' => $item,
            ]);
        }

        Author::factory(10)->create();


        // create 50 users
        User::factory(50)->create();

        // create 100 courses
        Course::factory(100)->create();

        $courses = Course::all();
        foreach($courses as $course) {
            $topics = Topic::all()->random(rand(1, 5))->pluck('id')->toArray();
            $course->topics()->attach($topics);

            $authors = Author::all()->random(rand(1, 3))->pluck('id')->toArray();
            $course->authors()->attach($authors);

            $series = Series::all()->random(rand(1, 4))->pluck('id')->toArray();
            $course->series()->attach($series);
        }

        Review::factory(100)->create();

    }
}
