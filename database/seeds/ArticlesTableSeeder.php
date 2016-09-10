<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Article::create(array(
			'title' => 'Article 1',
			'content' =>'Lorem Ipsum Lorum Datakadina kadjfñaskdf',
			'user_id' =>'1'
		));
		Article::create(array(
			'title' => 'Article 2 Vive',
			'content' =>'Lorem Ipsum Lorum Datakadina kadjfñaskdf',
			'user_id' =>'1'
		));
		Article::create(array(
			'title' => 'Article 3 Hacemos',
			'content' =>'Lorem Ipsum Lorum Datakadina kadjfñaskdf',
			'user_id' =>'1'
		));
    }
}
