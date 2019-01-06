<?php

use Illuminate\Database\Seeder;

class SeedContactTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Contact::class, 30)->create();
    }
}
