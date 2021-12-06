<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() //stexcvelu
    {
        //stexcvox table -> php artisan migrate
        //php artisan migrate:rollback --step=5 -  het e shrjum migratianery(down) - step qani qayl
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->string('title')->nullable();
            $table->tinyInteger('completed')->nullable();
            $table->timestamp('created_at')->useCurrent();//yntacik jam
            $table->timestamp('updated_at')->default(
            DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));//update anelu yntacik jam
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()//jnjelu
    {
        Schema::dropIfExists('tasks');
    }
}
