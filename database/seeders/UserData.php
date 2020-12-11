<?php

namespace Database\Seeders;

use App\Models\users\User;
use Illuminate\Database\Seeder;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user =new User();
        //name	email		password
        $user-> name ='ahmed';
        $user-> email ='ahmed@gemail.com';
        $user-> password =bcrypt('1233');
        $user-> save ();

    }
}
