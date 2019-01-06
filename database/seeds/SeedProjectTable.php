<?php

use Illuminate\Database\Seeder;

class SeedProjectTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Project::class, 50)->create();

    }
}
