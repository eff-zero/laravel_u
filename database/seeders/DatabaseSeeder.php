<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->create(['email' => 'test@example.com']);
        \App\Models\Teacher::factory(3)->create();
        \App\Models\Student::factory(60)->create();

        \App\Models\Course::create([
            'teacher_id' => 1,
            'name' => 'Circuitos I',
            'hours' => 200,
            'level' => 2
        ]);

        \App\Models\Course::create([
            'teacher_id' => 1,
            'name' => 'Circuitos II',
            'hours' => 200,
            'level' => 2
        ]);

        \App\Models\Course::create([
            'teacher_id' => 2,
            'name' => 'Programacion I',
            'hours' => 200,
            'level' => 2
        ]);

        \App\Models\Course::create([
            'teacher_id' => 2,
            'name' => 'Programacion II',
            'hours' => 200,
            'level' => 2
        ]);

        \App\Models\Course::create([
            'teacher_id' => 3,
            'name' => 'Fisica III',
            'hours' => 200,
            'level' => 5
        ]);


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
