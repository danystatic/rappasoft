<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(AccessTableSeeder::class);
        $this->call(HistoryTypeTableSeeder::class);


        $this->call(NewsTableSeeder::class);
        
        //$this->call(ArticlesTableSeeder::class);
        
        $this->call(UserTableSeeder::class);

        $this->call(LottosTableSeeder::class);
        
        $this->call(SysvarsTableSeeder::class);
        

        Model::reguard();
    }
}
