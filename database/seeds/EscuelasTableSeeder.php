<?php

use Illuminate\Database\Seeder;
use App\Escuela;

class EscuelasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Escuela::create([
            'cct' => '31PPR0379E',
            'nombre' => 'crescencio carrillo y ancona',
            'nivel' => 'primaria',
            'status' => true
        ]);

        Escuela::create([
            'cct' => '31PES0080Q',
            'nombre' => 'crescencio carrillo y ancona',
            'nivel' => 'secundaria',
            'status' => true
        ]);

        Escuela::create([
            'cct' => '31PBH0024V',
            'nombre' => 'dr. crescencio carrillo y ancona',
            'nivel' => 'media superior',
            'status' => true
        ]);

        Escuela::create([
            'cct' => '23PBT0035N',
            'nombre' => 'academia de ingles irlanda',
            'nivel' => 'formación para el trabajo',
            'status' => true
        ]);
    }
}
