<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();


		/**
		 * Problems table 
		 */
		if (!Schema::hasTable('problems'))
		{
		    Schema::create('problems', function($table)
		    {
		        $table->increments('id');
		        $table->string('dsTitle');
		       	$table->timestamp('updated_at');
		        $table->timestamp('created_at');
		    });
		}

	    /**
		 * Create Problems files table
		 */
	    if (!Schema::hasTable('problems_files'))
		{
		    Schema::create('problems_files', function($table)
		    {
		        $table->increments('id');
		        $table->integer('problem_id')->foreign('problem_id')->references('id')->on('problems');
		        $table->string('dsTitle');
		        $table->string('dsPath');
		        $table->integer('tpType');
		        $table->timestamp('updated_at');
		        $table->timestamp('created_at');
		    });
		}

	    /**
		 * Create Problems descriptions table
		 */
	    if (!Schema::hasTable('problems_descriptions'))
		{
		    Schema::create('problems_descriptions', function($table)
		    {
		        $table->increments('id');
		        $table->integer('problem_id')->foreign('problem_id')->references('id')->on('problems');
		        $table->integer('language_id')->foreign('language_id')->references('id')->on('language');
		        $table->string('dsTitle');
		        $table->longText('dsProblem');
		        $table->timestamp('updated_at');
		        $table->timestamp('created_at');
		    });
		}

	    /**
		 * Create Problems descriptions table
		 */
	    if (!Schema::hasTable('languages'))
		{
		    Schema::create('languages', function($table)
		    {
		        $table->increments('id');
		        $table->string('dsCod');
		        $table->string('dsLangue');
		        $table->timestamp('updated_at');
		        $table->timestamp('created_at');
		    });
		}

		/**
		 * Create Users table
		 */
		if (!Schema::hasTable('users'))
		{
			Schema::create('users', function($table)
		    {
		        $table->increments('id');
		        $table->string('dsEmail')->unique();
		        $table->string('dsName');
		        $table->string('dsPassword');
		        $table->integer('nrAccess');
		        $table->integer('qtPoints');
		        $table->integer('tpLogin');
		        $table->timestamp('dtLastLogin');
		        $table->timestamp('updated_at');
		        $table->timestamp('created_at');
		    });
		}

	    /*
	     * Create Admin Users table
	     */
		if (!Schema::hasTable('admin_users'))
		{
			Schema::create('admin_users', function($table)
		    {
		        $table->increments('id');
		        $table->string('dsEmail')->unique();
		        $table->string('dsLogin')->unique();
		        $table->string('dsName');
		        $table->string('dsPassword');
		        $table->integer('nrAccess');
		        $table->integer('tpLogin');
		        $table->boolean('blActive')->default(true);
		        $table->timestamp('dtLastLogin');
		        $table->timestamp('updated_at');
		        $table->timestamp('created_at');
		    });
		}

	}

}
