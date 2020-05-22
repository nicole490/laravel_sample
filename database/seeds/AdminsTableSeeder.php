<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name'              => 'admin2',
            'email'             => 'admin2@example.com',
            'password'          => Hash::make('kyotorocK1'),
            'remember_token'    => Str::random(10),
        ]);
    }
}