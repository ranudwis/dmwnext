<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('coursegroup_id');
            $table->string('code');
            $table->string('name');
            $table->string('slug');
            $table->integer('credit');
            $table->string('cover')->nullable();
            $table->timestamps();

            $table->foreign('coursegroup_id')
                ->references('id')
                ->on('coursegroups')
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
        Schema::dropIfExists('courses');
    }
}
