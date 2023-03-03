<?php

use App\User;
use Carbon\Carbon;
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
        $users =  [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('ipman12345678'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
            ];
        User::insert($users);
        // $this->call(UserSeeder::class);
    }
}
