<?php

use Illuminate\Database\Seeder;
use App\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Método create (atenção para o atributo fillable de App/Fornecedor precisam ser os mesmos)
        //Rodar comando no terminal para criar o registro: php artisan db:seed --class=FornecedorSeeder
        Fornecedor::create([
            'nome' => 'Fornecedor 1',
            'site' => 'fornecedor.com.br',
            'uf' => 'SP',
            'email' => 'contato@fornecedor.com.br'
        ]);
    }
}
