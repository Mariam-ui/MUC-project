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
        DB::table('users')->insert(array(
            [
                'name' => 'Admin',
                'email' => '1808aam@gmail.com',
                'password' => Hash::make('admin123')
            ]
        ));

    }
}
