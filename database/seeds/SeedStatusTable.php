<?php

use Illuminate\Database\Seeder;
use App\Status;

class SeedStatusTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Seed Tables status wuth static data

        Status::create(['name' => 'Open', 'description' => 'Status Open']);
        Status::create(['name' => 'Close', 'description' => 'Status Close']);
        Status::create(['name' => 'Working', 'description' => 'Status Working']);
        Status::create(['name' => 'Idle', 'description' => 'Status Idle']);
    }
}
