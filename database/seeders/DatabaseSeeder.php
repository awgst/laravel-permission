<?php

namespace Database\Seeders;

use App\Models\User;
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
        // \App\Models\User::factory(10)->create();
        User::firstOrCreate([
            'name'=>'Super Admin',
            'email'=>'super.admin@test.com',
            'password'=>bcrypt('12345678')
        ]);
        User::firstOrCreate([
            'name'=>'Admin',
            'email'=>'admin@test.com',
            'password'=>bcrypt('12345678')
        ]);
        $this->call(PostSeeder::class);
        $this->call(PermissionTableSeeder::class);
    }
}
