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
            $table->increments('id');
            $table->string('slug' , 100)->uniqe();
            $table->string('name' , 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return voidcho
     */
    public function down()
    {
        //
    }
}
