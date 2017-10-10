<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LeadTable extends Migration
{
    public function up()
    {
      Schema::create('lead', function (Blueprint $table) {
          $table->increments('id');
          $table->decimal('valorParcela');
          $table->decimal('valorImovel');
          $table->string('nome');
          $table->string('email')->unique();
          $table->string('tipoFamilia');
          $table->string('regiao');
          $table->decimal('valorRenda');
      });
    }

    public function down()
    {
          Schema::dropIfExists('lead');
    }
}
