<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainings', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('slug');
            $table->string('thumbnail');
            $table->text('youtube_url');
            $table->text('description');
            $table->text('map_location');
            $table->text('address');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('user_id');
            $table->float('rating');
            $table->integer('price');
            $table->string('system');
            $table->string('level');
            $table->integer('meeting');
            $table->integer('per_week');
            $table->string('training_info');

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
        Schema::dropIfExists('trainings');
    }
};
