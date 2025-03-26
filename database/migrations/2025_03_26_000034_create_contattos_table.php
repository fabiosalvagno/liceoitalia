<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('contattos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email');
            $table->text('messaggio');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('contattos');
    }
};
