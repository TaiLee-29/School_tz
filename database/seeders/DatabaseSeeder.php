<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::firstOrCreate([
            'email' => 'admin@admin.com'
        ], [
            'name' => 'admin',
            'password' => Hash::make('admin'),
        ]);

        $users =\App\Models\User::factory(1)->create();
        $schools =\App\Models\School::factory(10)->create();
        $employee = \App\Models\Employee::factory(100)->make(['school_id' => null])->each(function ($employee) use($schools){
            $employee->school_id = $schools->random()->id;
            $employee->save();

        });
    }
}
