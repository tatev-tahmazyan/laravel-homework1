<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('brand',100)->nullable();
            $table->string('model',100)->nullable();
            $table->date('date')->nullable();
            $table->integer('range')->nullable();
            $table->string('color',50)->nullable();
            $table->integer('price')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->
            default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
