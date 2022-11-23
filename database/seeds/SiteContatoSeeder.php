<?php

use Illuminate\Database\Seeder;
use App\SiteContato;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Método create (atenção para o atributo fillable de App/SiteContato precisam ser os mesmos)
        //Rodar comando no terminal para criar o registro: php artisan db:seed --class=SiteContatoSeeder
        SiteContato::create([
            'nome' => 'Contato 1',
            'telefone' => '1192267289',
            'email' => 'contato@fsitecontato.com.br',
            'contato' => 1,
            'mensagem' => 'teste de mensagem'
        ]);
    }
}
