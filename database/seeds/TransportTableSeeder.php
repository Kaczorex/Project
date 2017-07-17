<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Transport;

class TransportTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = \Faker\Factory::create();

    	for ($i=0; $i < 100; $i++) { 

    		$transport= new Transport();
    		$transport->user_id = '3';
    		$transport->address = $faker->address;

    		$carRand=rand(0,2);
    		switch ($carRand) {
    			case '1':
    			$car='Ford';
    			break;
    			case '2':
    			$car='Tir';
    			break;
    			case '0':
    			$car='Mercedes';
    			break;
    		}
    		$transport->car=$car;
    		$transport->priority = rand(0,1);
    		$transport->time_of_day = rand(0,2);
    		$transport->comments = $faker->text(100);
    		$driverRand=rand(1,2);

    		$transport->driver=$driverRand;
    		$transport->delivry_date = $faker->date($format = 'Y-m-d', $max = 'now');

    		$magazineRand=rand(0,2);
    		switch ($magazineRand) {
    			case '1':
    			$magazine='LE';
    			break;
    			case '2':
    			$magazine='WA';
    			break;
    			case '0':
    			$magazine='PL';
    			break;
    		}

    		$transport->magazine=$magazine;
    		$transport->DD=$faker->text(100);
    		$transport->save();
    	}

    }
}
