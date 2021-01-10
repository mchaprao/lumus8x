<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tenant_id');
            $table->unsignedBigInteger('category_id');
            $table->uuid('uuid');
            $table->string('title');
            $table->Text('content');
            $table->string('slug');
            $table->string('image');
            $table->date('published_at');
            $table->enum('active', ['Y', 'N'])->default('Y');
            $table->unsignedBigInteger('author_id');

            $table->foreign('tenant_id')
                        ->references('id')
                        ->on('tenants')
                        ->onDelete('cascade');

            $table->foreign('category_id')
                        ->references('id')
                        ->on('categories')
                        ->onDelete('cascade');

            $table->foreign('author_id')
                        ->references('id')
                        ->on('users')
                        ->onDelete('cascade');

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
        Schema::dropIfExists('posts');
    }
}
