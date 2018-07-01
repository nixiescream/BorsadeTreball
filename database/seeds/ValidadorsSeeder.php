<?php

use Illuminate\Database\Seeder;

class ValidadorsSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        /*$user1 = App\User::create([
            'name' => 'validador1',
            'email' => 'validador1@example.com',
            'password' =>  Hash::make('validador1'),
            'rol' => 'validador',
            'validat' => 1
        ]);
        App\Validador::create([
            'user_id' => $user1['id'],
            'email' => 'validador1@example.com',
            'password' =>  Hash::make('validador1'),
            'rol' => 'validador'
        ]);*/

        $user2 = App\User::create([
            'name' => 'validador2',
            'email' => 'validador2@example.com',
            'password' =>  Hash::make('validador2'),
            'rol' => 'validador',
            'validat' => 1
        ]);
        App\Validador::create([
            'user_id' => $user2['id'],
            'email' => 'validador2@example.com',
            'password' =>  Hash::make('validador2'),
            'rol' => 'validador'
        ]);
    }
}
