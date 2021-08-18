 <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//-Cada tabela do BD corresponderá a um modelo(essa classe da migration) que será utilizado para interagir com o BD.


class CreateCidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()  //executa quando estou criando
    {
        Schema::create('cidades', function (Blueprint $table) {  //está criando uma nova tabela chamada 'cidades'
            $table->id();         //criar uma chave primaria chamada id
            $table->string('nome', 100)->unique();
            $table->timestamps(); // opcional, e gerenciavel pelo laravel.
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()   //executa quando dou um rollback
    {
        Schema::dropIfExists('cidades');  //a gente coloca tudo que é pra desfazer que foi feito no UP
    }
}
