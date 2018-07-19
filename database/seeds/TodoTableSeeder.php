<?php

use Illuminate\Database\Seeder;

class TodoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory is a function made by laravel. 
        factory(App\Todo::class, 7)->create(); //creates seven new todos
    }
}
