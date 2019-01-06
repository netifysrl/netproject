<?php

use Illuminate\Database\Seeder;

class SeedTimelineTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Timeline::class, 30)->create();
    }
}
