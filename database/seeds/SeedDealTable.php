<?php

use Illuminate\Database\Seeder;
use App\Deal;

class SeedDealTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Deal::class, 30)->create();
    }
}
