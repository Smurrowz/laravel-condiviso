<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'name' => 'Alessio',
                'email' => 'manyblake@gmail.com',
                'password' => Hash::make('12345678')
            ],
            [
                'name' => 'Nigel',
                'email' => 'nigeldn1995@gmail.com',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => 'Mary',
                'email' => 'marychiodelli97@gmail.com',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => 'Lorenzo',
                'email' => 'giannanti1996@gmail.com',
                'password' => Hash::make('12345678'),
            ],
        );
    }
}
