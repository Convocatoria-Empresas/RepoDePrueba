<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre_Largo');
            $table->string('Nombre_Corto', 10);
            $table->string('Correo_electronico');
            $table->string('Telefono',8);
	        $table->string('NIT');
            $table->string('Solvencia');
            $table->string('Constitucion');
            $table->string('Plan_Pago');
            $table->string('Carta');
            $table->string('Socio_1',9);
            $table->string('Socio_2',9);
            $table->string('Socio_3',9);
            $table->string('Socio_4',9);
            $table->string('Socio_5',9);

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
        Schema::dropIfExists('empresas');
    }
}
