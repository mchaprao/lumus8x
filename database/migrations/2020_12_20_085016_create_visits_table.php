<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visits', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tenant_id');
            $table->uuid('uuid');
            $table->dateTime('visit_at');
            $table->unsignedBigInteger('user_id');
            $table->enum('status', ['A', 'P', 'C'])->default('P');
            $table->string('arquivo');
            $table->timestamps();

            $table->foreign('tenant_id')
                        ->references('id')
                        ->on('tenants')
                        ->onDelete('cascade');
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
        Schema::dropIfExists('visits');
    }
}
