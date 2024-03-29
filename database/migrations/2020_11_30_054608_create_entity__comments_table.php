<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntityCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entity__comments', function (Blueprint $table) {
            $table->id('comment_id');
            $table->integer('comment_parent')->nullable();
            $table->string('comment_name', 50);
            $table->string('comment_email', 50)->nullable();
            $table->mediumText('comment_content');
            $table->boolean('comment_read');
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
        Schema::dropIfExists('entity__comments');
    }
}
