<?php

use Illuminate\Database\Seeder;
use App\Mensagens;

class mensagensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Atividade::create([
            'title' => 'BOM DIA',
            'text' => 'BOM DIA CARALHO',
            'autor' => 'EU CARALHO',
            'scheduledto' => '2018-09-01 13:15:00'
        ]);

        Atividade::create([
            'title' => 'BOA NOITE',
            'text' => 'BOA NOITE FILHADAPUTA',
            'autor' => 'EU CARALHO',
            'scheduledto' => '2018-10-01 13:15:00'
        ]);
            }
}
