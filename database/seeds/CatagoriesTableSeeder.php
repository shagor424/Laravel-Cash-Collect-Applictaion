<?php

use Illuminate\Database\Seeder;
use App\Model\Catagory;
class CatagoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
    $faker = Faker\Factory::create();

        foreach(range(1,25) as $index){
        	$catagory= $faker->name;
        	Catagory::create([
        		'catagory_name' =>$catagory,
        		'catagory_slug' =>$this->slug_generator($catagory),
        		'status' =>rand(1),
        	]);
        }
    }

   
     public function slug_generator($string){
         	$string = str_replace(' ', '-', $string);
          	$string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);
          	return strtolower(preg_replace('/-+/', '-', $string));
          }
}
