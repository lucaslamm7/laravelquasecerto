<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMensagensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mensagens', function (Blueprint $table) {
            $table->increments('id');           //código identificador
            $table->string('title');            //título da mensagem
            $table->string('text');             //texto da mensagem
            $table->string('autor');            //autor da mensagem
            $table->dateTime('scheduledto');    //criado para
            $table->timestamps();               //registro created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mensagens', function (Blueprint $table) {
            //
        });
    }
}
