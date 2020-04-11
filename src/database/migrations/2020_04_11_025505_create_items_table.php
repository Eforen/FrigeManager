<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->char('name');
            $table->integer('usage_type_id');
            $table->integer('usage_type_child')->nullable(true);
            $table->integer('usage_type_count')->nullable(true);
            $table->double('count_start');
            $table->double('count_current');
            $table->double('count_end');
            //$table->multiLineString('notes');
            $table->char('nfc_id', 40)->nullable(true);
            $table->date('opened')->nullable(true);
            $table->date('spoil')->nullable(true);
            //$table->date('edited');
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
        Schema::dropIfExists('items');
    }
}
