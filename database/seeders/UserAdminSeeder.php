<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Shamar Stewart',
            'email' => 'sham@loan.com',
            'user_type' => 'admin',
            'password' => bcrypt('12345678')
        ]);
    }
}