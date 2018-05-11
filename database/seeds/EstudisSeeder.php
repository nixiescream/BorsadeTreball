<?php

use Illuminate\Database\Seeder;

class EstudisSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run(){
        App\Estudis::create([
            'sigles' => 'GA',
            'nom' => 'CFGM Gestió Administrativa',
            'familia' => 'Família Administració i Gestió'
        ]);
        App\Estudis::create([
            'sigles' => 'GAAJ',
            'nom' => 'CFGM Gestió Administrativa (Àmbit Jurídic)',
            'familia' => 'Família Administració i Gestió'
        ]);
        App\Estudis::create([
            'sigles' => 'AF',
            'nom' => 'CFGS Administració i Finances',
            'familia' => 'Família Administració i Gestió'
        ]);
        App\Estudis::create([
            'sigles' => 'AD',
            'nom' => 'CFGS Assistencia a la Direcció',
            'familia' => 'Família Administració i Gestió'
        ]);
        App\Estudis::create([
            'sigles' => 'AC',
            'nom' => 'CFGM Activitats Comercials',
            'familia' => 'Família Comerç i Màrqueting'
        ]);
        App\Estudis::create([
            'sigles' => 'CI',
            'nom' => 'CFGS Comerç Internacional',
            'familia' => 'Família Comerç i Màrqueting'
        ]);
        App\Estudis::create([
            'sigles' => 'GVEC',
            'nom' => 'CFGS Gestió de Vendes i Espais Comercials',
            'familia' => 'Família Comerç i Màrqueting'
        ]);
        App\Estudis::create([
            'sigles' => 'TL',
            'nom' => 'CFGS Transport i Logística',
            'familia' => 'Família Comerç i Màrqueting'
        ]);
        App\Estudis::create([
            'sigles' => 'SMX',
            'nom' => 'CFGM Sistemes Microinformàtics i Xarxes',
            'familia' => 'Família Informàtica i Comunicacions'
        ]);
        App\Estudis::create([
            'sigles' => 'ASIX',
            'nom' => 'CFGS Administració de Sistemes Informàtics en la Xarxa',
            'familia' => 'Família Informàtica i Comunicacions'
        ]);
        App\Estudis::create([
            'sigles' => 'DAM',
            'nom' => 'CFGS Desenvolupament d\'Aplicacions Multiplataforma',
            'familia' => 'Família Informàtica i Comunicacions'
        ]);
        App\Estudis::create([
            'sigles' => 'DAW',
            'nom' => 'CFGS Desenvolupament d\'Aplicacions Web',
            'familia' => 'Família Informàtica i Comunicacions'
        ]);
        App\Estudis::create([
            'sigles' => 'APSD',
            'nom' => 'CFGM Atenció a Persones en Situació de Dependència',
            'familia' => 'Família de Serveis a la Comunitat'
        ]);
        App\Estudis::create([
            'sigles' => 'AST',
            'nom' => 'CFGS Animació Sociocultural i Turística',
            'familia' => 'Família de Serveis a la Comunitat'
        ]);
        App\Estudis::create([
            'sigles' => 'EI',
            'nom' => 'CFGS Educació Infantil',
            'familia' => 'Família de Serveis a la Comunitat'
        ]);
        App\Estudis::create([
            'sigles' => 'IS',
            'nom' => 'CFGS Integració Social',
            'familia' => 'Família de Serveis a la Comunitat'
        ]);
    }
}
