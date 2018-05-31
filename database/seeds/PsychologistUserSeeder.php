<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Psychologist;

class PsychologistUserSeeder extends Seeder
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
        $user->name = "Maria Fernanda";
		$user->last_name = "Segovia";
		$user->mother_last_name = "Chacon";
        $user->email = "mariafernanda.mf@gmail.com";
        $user->password = bcrypt('secret');
        $user->role = "Psychologist";
        $user->state = 0;
        $user->save();
		
		#------------------------


        #-----Cración del Psicólogo---

        $psychologist = new Psychologist;
        $psychologist->user_id = $user->id;
		$psychologist->specialty = "Agorafobia";
		$psychologist->code = "BA718956";
		$psychologist->description = "Profesional preparado para el trabajo en Agorafobia";
        $psychologist->save();

        #-------------------------
    }
}
