<?php

use Illuminate\Database\Seeder;

class SeedCompanyTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Company::class, 30)->create();
    }
}
