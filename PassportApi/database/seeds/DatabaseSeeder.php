<?php

use Illuminate\Database\Seeder;
use App\Model\Product;
use App\Model\Review;


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
        factory(App\User::class,5)->create();
        factory(Product::class,100)->create();
        factory(Review::class,300)->create();
    }
}
