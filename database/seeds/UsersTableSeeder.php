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
        $users_list= array(
            array(
                'name'=> 'Admin User',
                'email'=> 'admin@admin.com',
                'password'=> Hash::make('admin123'),
                'role'=>'admin'

            ),
            array(
                'name'=> 'Student User',
                'email'=> 'student@student.com',
                'password'=> Hash::make('student123'),
                'role'=>'student'

            )


        );

        DB::table('users')->insert($users_list);
    }



}
