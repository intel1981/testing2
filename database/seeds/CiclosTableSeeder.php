<?php

use Illuminate\Database\Seeder;
use App\Models\Ciclo;

class CiclosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inicio = 1969;
        $fin = 1970;
        foreach(range(1,50) as $i){
            Ciclo::create([
                'periodo' => $inicio.'-'.$fin,
                'status' => true
            ]);
            $inicio++;
            $fin++;
        }
    }
}
