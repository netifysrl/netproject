<?php

use Illuminate\Database\Seeder;

class SeedTeamTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Team::class, 30)->create();

    }
}
