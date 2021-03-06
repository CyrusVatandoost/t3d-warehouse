<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {

  Schema::create('users', function(Blueprint $table) {
    $table->increments('user_id');
    $table->string('first_name', 32);
    $table->string('middle_initial', 2);
    $table->string('last_name', 32);
    $table->enum('gender', ['Male', 'Female']);
    $table->string('email', 320);
    $table->string('password', 64);
    $table->text('bio')->nullable(true);
    $table->boolean('verified')->default(false);
    $table->string('verification_token')->nullable();

    // required for Laravel 4.1.26
    $table->string('remember_token', 100)->nullable();
    $table->timestamps();
  });

  Schema::create('password_resets', function (Blueprint $table) {
    $table->string('email')->index();
    $table->string('token');
    $table->timestamp('created_at')->nullable();
  });

  // by default, there must always be one user which is the admin
  DB::table('users')->insert(
      array(
          'email' => 'admin@t3dhouse.com',
          'first_name' => "Admin",
          'middle_initial' => "A.",
          'last_name' => 'last_name',
          'gender' => "Male",
          'verified' => "1",
          'password' => Hash::make('admin')
      )
  );

  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('users');
  }
}
