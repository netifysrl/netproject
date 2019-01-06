<?php

use Illuminate\Database\Seeder;
use App\Role;

class SeedRoleTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(
            [
                'name' => 'Project Manager',
                'description' => 'Project manager'
            ]);
        Role::create(
                [
                    'name' => 'Specialist',
                    'description' => 'Specialist technician os consultant'
                ]);

    }
}
