<?php

use Illuminate\Database\Seeder;
use App\Company;
use App\User;
use App\Contact;
use App\Team;
use App\Timeline;
use App\Project;
use App\Task;
use App\Ticket;
use App\Milestone;
use App\Deal;
use App\TaskWorker;
use App\Update_ticket;
use App\Category;
use App\Role;
use App\Status;


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

        //DB Statement disable KEY_CHECKS
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        //Truncate the tables
        Company::truncate();
        User::truncate();
        Team::truncate();
        Category::truncate();
        Role::truncate();
        Status::truncate();
        Timeline::truncate();
        Contact::truncate();
        Company::truncate();
        Project::truncate();
        Task::truncate();
        Ticket::truncate();
        Milestone::truncate();
        Deal::truncate();
        TaskWorker::truncate();
        Update_ticket::truncate();



        //Execute the seed for the tables
        $this->call(SeedUserTable::class);
        $this->call(SeedContactTable::class);
        $this->call(SeedCompanyTable::class);
        $this->call(SeedCategoryTable::class);
        $this->call(SeedStatusTable::class);
        $this->call(SeedDealTable::class);
        $this->call(SeedRoleTable::class);
        $this->call(SeedTeamTable::class);
        $this->call(SeedTimelineTable::class);
        $this->call(SeedProjectTable::class);

    }
}
