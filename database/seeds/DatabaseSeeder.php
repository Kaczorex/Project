<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UserTableSeeder::class);
        factory(App\Prefabrykacja::class, 250)->create();
        // $this->call(UserTableSeeder::class);
        $this->call(TransportTableSeeder::class);
             
    }
}
