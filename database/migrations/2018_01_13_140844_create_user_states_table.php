<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_states', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->boolean('is_inactivate')->default(false);
            $table->boolean('is_out')->default(false);
            $table->boolean('is_pending_out')->default(false);
            $table->boolean('is_block')->default(false);

            $table->timestamps();

            $table->primary('user_id');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_states');
    }
}
