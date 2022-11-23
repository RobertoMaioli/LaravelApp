<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidades', function (Blueprint $table) {
            $table->id();
            $table->string('unidade', 5);
            $table->string('descricao', 30);
            $table->timestamps();
        });

        //relacionamento tabela produtos
        Schema::table('produtos', function (Blueprint $table) {
            $table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidades');
        });

        //relacionamento tabela produtos_detalhes
        Schema::table('produtos_detalhes', function (Blueprint $table) {
            $table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //remover relacionamento tabela produtos_detalhes
        Schema::table('produtos_detalhes', function (Blueprint $table) {

            //remover foreign key
            $table->dropForeign('produtos_detalhes_unidade_id_foreign'); //[table]_[coluna]_foreign

            //remover coluna_id
            $table->dropColumn('unidade_id');
            
        });

        //remover relacionamento tabela produtos
        Schema::table('produtos', function (Blueprint $table) {

            //remover foreign key
            $table->dropForeign('produtos_unidade_id_foreign'); //[table]_[coluna]_foreign

            //remover coluna_id
            $table->dropColumn('unidade_id');
            
        });

        Schema::dropIfExists('unidades');
    }
}
