<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Roles;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $roleUser = Roles::where('name', 'User')->first();

        
        $role = Roles::where('name', 'Administrator')->first();
        $user = new User();
        $user->name = 'Admin';
        $user->login = 'Admin';
        $user->email = 'Admin@example.pl';
        $user->password = bcrypt('Admin');
        $user->magazine = 'LE';
        $user->save();
        $user->roles()->attach($role);
        $user->roles()->attach($roleUser);
        

        $role = Roles::where('name','Dyrektor Prefabrykacji')->first();
        $user = new User();
        $user->name = 'Dyr-PrefPrefUser';
        $user->login = 'Dyr';
        $user->email = 'Dyr@example.pl';
        $user->password = bcrypt('us09');
        $user->magazine = 'LE';
        $user->save();
        $user->roles()->attach($role);
        $user->roles()->attach($roleUser);


        $role = Roles::where('name','User')->first();
        $user = new User();
        $user->name =  'User';
        $user->login = 'user0';
        $user->email = 'User@example.pl';
        $user->password = bcrypt('user0');
        $user->magazine = 'LE';
        $user->save();
        $user->roles()->attach($role);
        $user->roles()->attach($roleUser);

        $role = Roles::where('name','Dostawy')->first();
        $user = new User();
        $user->name =  'dostawy';
        $user->login = 'dostawy';
        $user->email = 'dostawy@example.pl';
        $user->password = bcrypt('dost');
        $user->magazine = 'LE';
        $user->save();
        $user->roles()->attach($role);
        $user->roles()->attach($roleUser);

        $role = Roles::where('name','Kierowca')->first();
        $user = new User();
        $user->name =  'kier1';
        $user->login = 'kier1';
        $user->email = 'kier1@example.pl';
        $user->password = bcrypt('kier1');
        $user->magazine = 'LE';
        $user->save();
        $user->roles()->attach($role);
        $user->roles()->attach($roleUser);

        $role = Roles::where('name','Kierowca')->first();
        $user = new User();
        $user->name =  'kier2';
        $user->login = 'kier2';
        $user->email = 'kier2@example.pl';
        $user->password = bcrypt('kier2');
        $user->magazine = 'LE';
        $user->save();
        $user->roles()->attach($role);
        $user->roles()->attach($roleUser);

        $role = Roles::where('name','Dyrektor logistyki')->first();
        $user = new User();
        $user->name =  'dyr-log';
        $user->login = 'dyr-log';
        $user->email = 'dyr-log@example.pl';
        $user->password = bcrypt('dyr');
        $user->magazine = 'LE';
        $user->save();
        $user->roles()->attach($role);
        $user->roles()->attach($roleUser);

        $role = Roles::where('name','Logistyka')->first();
        $user = new User();
        $user->name =  'log';
        $user->login = 'log';
        $user->email = 'log@example.pl';
        $user->password = bcrypt('log');
        $user->magazine = 'LE';
        $user->save();
        $user->roles()->attach($role);
        $user->roles()->attach($roleUser);
    }
}
