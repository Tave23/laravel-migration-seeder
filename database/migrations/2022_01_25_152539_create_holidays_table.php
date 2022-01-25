<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHolidaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('holidays', function (Blueprint $table) {
            $table->id();

            $table->string('address', 50);
            $table->date('data_arrivo');
            $table->date('data_partenza');
            $table->tinyInteger('stelle_hotel')->unsigned();
            $table->boolean('piscina')->default(1);
            $table->boolean('volo_incluso')->default(0);
            $table->text('descrizione')->nullable();
            $table->decimal('prezzo', 5, 2)->unsigned();


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
        Schema::dropIfExists('holidays');
    }
}
