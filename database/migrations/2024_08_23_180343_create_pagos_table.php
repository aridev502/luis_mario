<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dueno_id')->constrained()->onDelete('cascade');
            $table->decimal('pago', 10, 2); // Puedes ajustar el tamaño y la precisión
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
        Schema::dropIfExists('pagos');
    }
}
