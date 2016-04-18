<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = DB::table('users');

        $users->insert([
            'name' => 'git@mcclainconcepts.com',
            'email' => 'git@mcclainconcepts.com',
            'password' => bcrypt('LaravelTestPW'),
        ]);

        $users->insert([
            'name' => 'your@emailaddress.com',
            'email' => 'your@emailaddress.com',
            'password' => bcrypt('LaravelTestPW'),
        ]);

        $users->insert([
            'name' => 'Chance Snow',
            'email' => 'work@chancesnow.me',
            'password' => bcrypt('LaravelTestPW'),
        ]);
    }
}
