<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('project_id');
            $table->integer('user_id');
            $table->string('name');
            $table->boolean('complete')->default(false);
            $table->boolean('public')->default(false);
            $table->text('description')->nullable(true);
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('projects');
    }
}
