<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagoFlotantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pago_flotantes', function (Blueprint $table) {
            $table->id();

            $table->foreignId('dueno_id')->constrained('duenos'); // Ajusta la tabla de referencia según tu base de datos
            $table->decimal('pago', 8, 2); // Puedes ajustar la precisión según sea necesario
            $table->string('tipo');
            $table->string('boleta');
            $table->string('aux1')->nullable();
            $table->string('aux2')->nullable();

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
        Schema::dropIfExists('pago_flotantes');
    }
}
