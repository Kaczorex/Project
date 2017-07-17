<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role=new \App\Roles();
        $role->name ='Administrator';
        $role->save();
        
        $role=new \App\Roles();
        $role->name ='Dyrektor prefabrykacji';
        $role->save();

        $role=new \App\Roles();
        $role->name ='Prefabrykacja';
        $role->save();

        $role=new \App\Roles();
        $role->name ='Dostawy';
        $role->save();
        
        $role=new \App\Roles();
        $role->name ='User';
        $role->save();

        $role=new \App\Roles();
        $role->name ='Kierowca';
        $role->save();

        $role=new \App\Roles();
        $role->name ='Logistyka';
        $role->save();

        $role=new \App\Roles();
        $role->name ='Dyrektor logistyki';
        $role->save();
    }
}
