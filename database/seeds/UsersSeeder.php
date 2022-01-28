<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
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
                'name'=>'Admin',
                'email'=>'admin@studioroudh.com',
                'user_type'=>'0',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'Moderator',
                'email'=>'moderator@studioroudh.com',
                'user_type'=>'1',
                'password'=> bcrypt('123456'),
            ],
        ];
  
        foreach ($users as $key => $value) {
            User::create($value);
        }
    }
}
