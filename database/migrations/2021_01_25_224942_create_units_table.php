<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->foreignId('frequency_id')->references('id')->on('frequencies')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('callsign');
            $table->enum('radio_type', ['short_range', 'long_range']);
            $table->decimal('alpha',     5, 1);
            $table->decimal('bravo',     5, 1);
            $table->decimal('chalie',    5, 1);
            $table->decimal('delta',     5, 1);
            $table->decimal('echo',      5, 1);
            $table->decimal('foxtrot',   5, 1);
            $table->decimal('golf',      5, 1);
            $table->decimal('hotel',     5, 1);
            $table->decimal('india',     5, 1);
            $table->decimal('juliett',   5, 1);
            $table->decimal('kilo',      5, 1);
            $table->decimal('lima',      5, 1);
            $table->decimal('mike',      5, 1);
            $table->decimal('november',  5, 1);
            $table->decimal('oscar',     5, 1);
            $table->decimal('papa',      5, 1);
            $table->decimal('quebec',    5, 1);
            $table->decimal('romeo',     5, 1);
            $table->decimal('sierra',    5, 1);
            $table->decimal('tango',     5, 1);
            $table->decimal('uniform',   5, 1);
            $table->decimal('victor',    5, 1);
            $table->decimal('whiskey',   5, 1);
            $table->decimal('xray',      5, 1);
            $table->decimal('yankee',    5, 1);
            $table->decimal('zulu',      5, 1);
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
        Schema::dropIfExists('units');
    }
}
