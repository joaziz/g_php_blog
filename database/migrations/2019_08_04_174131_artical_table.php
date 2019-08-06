<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ArticalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("articles", function (Blueprint $table) {
            $table->increments("id");

            $table->string("title");
            $table->text("body");
            $table->text("image")->nullable();
            $table->string("tag")->nullable();
            $table->date("date")->nullable();
            $table->integer("user_id");

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
        Schema::dropIfExists("articles");
    }
}
