<?php

use JeroenZwart\CsvSeeder\CsvSeeder;

class PoemSeeder extends CsvSeeder
{

    public function __construct()
    {
        $this->file = '/database/seeds/csvs/poems.csv';
        $this->delimiter = '\\';
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    parent::run();
    }
}
