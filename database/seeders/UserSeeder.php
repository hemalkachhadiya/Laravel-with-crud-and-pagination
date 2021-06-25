<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;

class UserSeeder extends Seeder {
    /**
    * Run the database seeds.
    *
    * @return void
    */

    public function run() {
        User::insert( array(
            [
                'name' => 'Smart Ravi',
                'email' => 'ravi.smarttechnica@gmail.com',
                'phone' => '9558688874',
                'password' => Hash::make( '123456789' ),
                'password_base64' => base64_encode( '123456789' ),
                'created_at' => NOW(),
                'updated_at' => NOW()
            ], [
                'name' => 'Smart Pankaj',
                'email' => 'pankaj.smarttechnica@gmail.com',
                'phone' => '9558688874',
                'password' => Hash::make( '123456789' ),
                'password_base64' => base64_encode( '123456789' ),
                'created_at' => NOW(),
                'updated_at' => NOW()
            ]
        ) );
    }
}
