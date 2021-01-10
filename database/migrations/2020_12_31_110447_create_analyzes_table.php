<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnalyzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analyzes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tenant_id');
            $table->uuid('uuid');
            $table->string('slug');
            $table->date('date_analyzes'); 
            $table->unsignedBigInteger('laboratory_id');
            $table->enum('status', ['A', 'R', 'C'])->default('A');
            $table->string('arquivo');
            $table->timestamps();
            
            $table->foreign('tenant_id')
                        ->references('id')
                        ->on('tenants')
                        ->onDelete('cascade');
            $table->foreign('laboratory_id')
                        ->references('id')
                        ->on('laboratories')
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
        Schema::dropIfExists('analyzes');
    }
}
