<?php

use Illuminate\Database\Migrations\Migration;

class ImoveisTipos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('imoveistipos', function($table)
		{
			$table->create();			
			$table->increments('id_imoveistipos');

			$table->string('nome');

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
		Schema::drop('imoveistipos');
	}

}