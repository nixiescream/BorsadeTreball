<?php

use Illuminate\Database\Seeder;

class ValidadorsSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    /*
    public function run(){

    Copia tot aquest bloc de codi:
        $user1 = App\User::create([
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
        ]);

        i després enganxa'l.
        Per exemple:
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

        La variable $user1 o $user2 ha de ser diferent per cada usuari nou que facis,
        i serveix per donar-li la id al Validador després. Exemple:
        App\Validador::create([
            'user_id' => $user2['id'],

        L'email obligatòriament ha de ser diferent ja que a la base de dades està declarat com a unique.
        Pots posar tants validadors com vulguis (sense comentar) i després al terminal dins de la carpeta del projecte
        executa:
        php artisan db:seed

        Quan estiguin a la BBDD, comenta el codi del validadors ja creats, perquè si en vols fer de nous no se't repeteixin
        ni et doni problemes. El seeder dels estudis no donarà problemes perquè la crida al seeder Estudis al DatabaseSeeder.php
        està comentada, així que no el buscarà.

        Amb tot això ja hauria de funcionar. En qualsevol cas, si petés fort pots executar al terminal dins de la carpeta
        del projecte:
        php artisan migrate:fresh
        o
        php artisan migrate:refresh (depèn del sistema operatiu funciona un o l'altre)
        i amb això et carregues tota la BBDD, llavors descomentes tot el codi comentat aquí i a EstudisSeeder.php i tornes a fer un
        php artisan db:seed

        Tot i que tal i com està ara no hauria de donar problemes.
    }

    */
}
