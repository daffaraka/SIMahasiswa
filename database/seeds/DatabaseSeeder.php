<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    //php artisan db:seed --class=BiodtaSeeder
    public function run()
    {
        $this->call(BiodataSeeder::class);
    }
}
