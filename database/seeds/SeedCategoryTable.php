<?php

use Illuminate\Database\Seeder;
use App\Category;

class SeedCategoryTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Static seed for Categories table

        Category::create(
            [
                'name' => 'Controllo Access',
                'description' => 'Sistemi di controlo accessi integrati'
            ]);
        Category::create(
                [
                    'name' => 'TVCC',
                    'description' => 'Realizzaione sistemi di TVCC'
                ]);
        Category::create(
                [
                    'name' => 'Fornitura e configurazione',
                    'description' => 'Fornitura di apparati configurati'
                ]);
        Category::create(
                [
                    'name' => 'Consulenza',
                    'description' => 'Consulenza Tecnica'
                ]);
    }
}
