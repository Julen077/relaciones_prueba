<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableTareaUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tareas', function (Blueprint $table) {
            $table->unsignedBigInteger("usuario_id");
            $table->foreign("usuario_id")->references("id")->on("usuarios")->onUpdate("cascade")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tareas', function (Blueprint $table) {
            $table->unsignedBigInteger("usuario_id");
            $table->foreign("usuario_id")->references("id")->on("usuarios")->onUpdate("cascade")->onDelete("cascade");
        }); 
    }
}
