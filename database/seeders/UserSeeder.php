<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run(): void
    {

        //  if we wanna insert multiple records
        // $users=collect([
        //     [
        //         'username' => Str::random(10) . 'ashar12',
        //         'first_name' => Str::random(10) . 'syed',
        //         'last_name' => Str::random(10) . 'ashar',
        //         'email' => Str::random(10) . 'ashar1@example.com',
        //         'password_hash' => Hash::make('password123'), // Hash the password
        //         'create_at' => now(),
        //         'update_at' => now(),
        //     ],
        //     [
        //         'username' => Str::random(10) . 'ashar123',
        //         'first_name' => Str::random(10) . 'syed',
        //         'last_name' => Str::random(10) . 'ashar',
        //         'email' => Str::random(10) . 'ashar2@example.com',
        //         'password_hash' => Hash::make('password123'), // Hash the password
        //         'create_at' => now(),
        //         'update_at' => now(),
        //     ],
        //     [
        //         'username' => Str::random(10) . 'ashar12',
        //         'first_name' => Str::random(10) . 'syed',
        //         'last_name' => Str::random(10) . 'ashar',
        //         'email' => Str::random(10) . 'ashar3@example.com',
        //         'password_hash' => Hash::make('password123'), // Hash the password
        //         'create_at' => now(),
        //         'update_at' => now(),
        //     ]]
        //     );

        // use when json

        // $users = json_decode(file_get_contents(database_path('users.json')), true);
        // $json = file::get(path:'database/json/users.json');
        // $users = json_decode($json, true);
        $json = File::get(path:'database/json/users.json');
        // $json = File::get(database_path('json/users.json')); 

        $users = collect(json_decode($json, true));
        foreach ($users as $user) {

            // DB::table('users')->insert($user);
            DB::table('users')->insert([
                'username' => $user['username'],
                'first_name' => $user['first_name'],
                'last_name' => $user['last_name'],
                'email' => $user['email'],
                'password_hash' => Hash::make('password123'), 
                'create_at' => now(),
                'update_at' => now(),
            ]);
        
            }



        // DB::table('users')->insert([
        //     'username' => Str::random(10) . 'ashar12',
        //     'first_name' => Str::random(10) . 'syed',
        //     'last_name' => Str::random(10) . 'ashar',
        //     'email' => Str::random(10) . 'ashar@example.com',
        //     'password_hash' => Hash::make('password123'), // Hash the password
        //     'create_at' => now(),
        //     'update_at' => now(),
        // ]);
    }
}
