<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::find(1);

        if(!$user){
            $user = new User;
        }
        
        $user->firstname = "Super";
        $user->lastname = "User";
        $user->email = "admin@gmail.com";
        $user->username = "admin";
        $user->password = bcrypt("123456");
        $user->save();
    }
}
