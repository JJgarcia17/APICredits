<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credits', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("client_id");
            $table->string("admin_id")->nullable();
            $table->date("date");
            $table->string("description");
            $table->double("amount",20,2);
            $table->string("relid")->nullable();


            //Relacion de la tabla Clients y Credits
            $table->foreign("client_id")
            ->references("id")
            ->on("clients");
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('credits');
    }
}
