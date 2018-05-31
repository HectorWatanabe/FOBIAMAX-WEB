<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Admin;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        #--Creación del Usuario--

        $user = new User;
        $user->name = "Hector";
		$user->last_name = "Hector";
		$user->mother_last_name = "Hector";
        $user->email = "hectorwatanabe.hw@gmail.com";
        $user->password = bcrypt('secret');
        $user->role = "Administrador";
        $user->state = 0;
        $user->save();

        #------------------------


        #-----Cración del Admin---

        $admin = new Admin;
        $admin->user_id = $user->id;
        $admin->save();

        #-------------------------

    }
}
