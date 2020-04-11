<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsageTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usage_type', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('count_start_suffix');
            $table->string('count_current_suffix');
            $table->string('count_end_suffix');
            $table->binary('is_multi');
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
        Schema::dropIfExists('usage_type');
    }
}
