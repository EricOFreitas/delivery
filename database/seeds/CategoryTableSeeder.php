<?php

use Delivery\Models\Category;
use Delivery\Models\Product;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Category::class, 10)->create()->each(function($c)
        {
			for($i=0;$i<=5;$i++)
            {
				//crio os objetos na memoria e o save no banco
				//foi preciso criar o metodo products em model category
				$c->products()->save(factory(Product::class)->make());
			}
		});
    }
}