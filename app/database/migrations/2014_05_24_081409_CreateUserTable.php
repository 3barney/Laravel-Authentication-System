<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('user', function(Blueprint $table)
		{
			$table->incements('id');
            $table->string('username', 128)->nullable()->default(null);
            $table->string('password')->nullable()->default(null);
            $table->string('email')->nullable()->default(null);
            $table->timestamps()->nullable->default(null);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('user', function(Blueprint $table)
		{
			Schema::dropIfExists('user');
		});
	}

}
