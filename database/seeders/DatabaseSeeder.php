<?php

namespace Database\Seeders;

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
        $users =\App\Models\User::factory(1)->create();
        $schools =\App\Models\School::factory(10)->create();
        $employee = \App\Models\Employee::factory(100)->make(['school_id' => null])->each(function ($employee) use($schools){
            $employee->school_id = $schools->random()->id;
            $employee->save();

        });
    }
}
