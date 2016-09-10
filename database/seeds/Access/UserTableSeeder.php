<?php

use Carbon\Carbon as Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class UserTableSeeder
 */
class UserTableSeeder extends Seeder
{
    public function run()
    {
        if (DB::connection()->getDriverName() == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        }

        if (DB::connection()->getDriverName() == 'mysql') {
            DB::table(config('access.users_table'))->truncate();
        } elseif (DB::connection()->getDriverName() == 'sqlite') {
            DB::statement('DELETE FROM ' . config('access.users_table'));
        } else {
            //For PostgreSQL or anything else
            DB::statement('TRUNCATE TABLE ' . config('access.users_table') . ' CASCADE');
        }

        //Add the master administrator, user id of 1
        $users = [
            [
                'name'              => 'Daniel Villarreal',
                'email'             => 'danielvt@gmail.com',
                'password'          => bcrypt('1234'),

                // 'avatar' => 'https://lh6.googleusercontent.com/-Jg6rcjVoaSw/AAAAAAAAAAI/AAAAAAAAAFw/tH-CS4ahfak/photo.jpg?sz=50',
                'btcaddress' => '1MossjcXq4SKP4SVXgE4qj28G1ZdMUA2sw',
                'realsponsorid' => 'NULL',
                'sponsorid' => 'NULL',
                'parentid' => '0',
                'lft' => '1',
                'rgt' => '6',
                'ancestors' => 'NULL',
                'limitchildren' => '3',
                'luckynumber' => '66',
                'representante' => '1',

                'confirmation_code' => md5(uniqid(mt_rand(), true)),
                'confirmed'         => true,
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],
            [
                'name'              => 'Backend User',
                'email'             => 'danystatic@hotmail.com',
                'password'          => bcrypt('1234'),

                // 'avatar' => 'https://graph.facebook.com/v2.4/10153613928517770/picture?type=normal',
                'btcaddress' => '1MossjcXq4SKP4SVXgE4qj28G1ZdMUA2sw',
                'realsponsorid' => '1',
                'sponsorid' => '1',
                'parentid' => '1',
                'lft' => '',
                'rgt' => '',
                'ancestors' => ',1',
                'limitchildren' => '3',
                'luckynumber' => '62',
                'representante' => '1',

                'confirmation_code' => md5(uniqid(mt_rand(), true)),
                'confirmed'         => true,
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],
            [
                'name'              => 'Default User',
                'email'             => 'daniel.villarreal@nearshoretechnology.com',
                'password'          => bcrypt('1234'),

                // 'avatar' => 'https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/AAAAAAAAAAA/4252rscbv5M/photo.jpg?sz=50',
                'btcaddress' => '1MossjcXq4SKP4SVXgE4qj28G1ZdMUA2sw',
                'realsponsorid' => '2',
                'sponsorid' => '2',
                'parentid' => '2',
                'lft' => '',
                'rgt' => '',
                'ancestors' => ',1',
                'limitchildren' => '3',
                'luckynumber' => '70',
                'representante' => '1',


                'confirmation_code' => md5(uniqid(mt_rand(), true)),
                'confirmed'         => true,
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],
        ];

        DB::table(config('access.users_table'))->insert($users);

        if (DB::connection()->getDriverName() == 'mysql') {
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        }
    }
}