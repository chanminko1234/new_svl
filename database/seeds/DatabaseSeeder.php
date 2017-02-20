<?php

use Illuminate\Database\Seeder;
use App\Library;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
    	Library::unguard();
    	Library::truncate();
    	factory(Library::class, 30)->create();
    	Library::reguard();
    }
}
