<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemDefinitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_definitions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('usage_type_id');
            $table->integer('usage_type_child')->nullable(true);
            $table->integer('usage_type_count')->nullable(true);
            $table->double('default_count_start')->nullable(true);
            $table->double('default_count_end')->nullable(true);
            $table->integer('default_minutes_to_spoil')->nullable(true);
            $table->multiLineString('notes');
            //$table->integer('image_id'); use intermediary table
            $table->string('barcode');
            $table->date('edited');
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
        Schema::dropIfExists('item_definitions');
    }
}
