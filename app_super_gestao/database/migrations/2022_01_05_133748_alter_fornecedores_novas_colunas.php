<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterFornecedoresNovasColunas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Altera a tabela em questão e acrescenta mais estas duas
        Schema::table('fornecedores', function (Blueprint $table) {
            $table->string('uf', 2);
            $table->string('email', 150);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Desfaz o que foi feito no function up
        Schema::table('fornecedores', function (Blueprint $table) {
           //para remover colunas
           //$table->dropColumn('uf');
           //$table->dropColumn('email');
           //ou
            $table->dropColumn(['uf', 'email']);
        });
    }
}
