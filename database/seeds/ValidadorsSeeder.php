<?php

use Illuminate\Database\Seeder;

class ValidadorsSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $user1 = App\User::create([
            'name' => 'validador1',
            'email' => 'validador1@example.com',
            'password' => str_random(20),
            'rol' => 'validador',
            'validat' => 1
        ]);
        App\Validador::create([
            'user_id' => $user['id'],
            'email' => 'validador1@example.com',
            'password' => str_random(20),
            'rol' => 'validador'
        ]);
    }
}
