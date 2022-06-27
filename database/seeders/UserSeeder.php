<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Honey Joyce Valleser',
                'email' => 'honeyjoyce@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('hanjoyce')
            ],
            [
                'name' => 'Jordan Poole',
                'email' => 'poole@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('jpoole')
            ],
        ];
        foreach($users as $user){
            User::create($user);

        }
    }
}
