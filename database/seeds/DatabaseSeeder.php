<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        
        
         factory(App\Division::class, 3)->create();
         
            factory(App\District::class, 20)->create();
            
              factory(App\Upazila::class,50)->create();
         
    }
}
