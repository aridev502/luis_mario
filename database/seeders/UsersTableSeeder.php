<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin Ariel Ramirez',
            'email' => 'ariel12jona@gmail.com',
            'password' => bcrypt('ariel123'),
            'role_id' => '1',
            'codigo' => 'ariel12jona'
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'role_id' => '2',
            'codigo' => 'adm123'
        ]);
    }
}
