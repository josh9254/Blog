<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* DB::table('users')->insert([
         	'name'=>'Pedro Perez',
         	'email'=>'pedrito@mail.com',
         	'password'=>bcrypt('pedrito'), 
         	'type'=>'admin'
         	]);*/
         	factory(App\User::class,10)->create();
    }
}
