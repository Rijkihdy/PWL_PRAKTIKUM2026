<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookshelfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bookshelf')->insert([
            [
                'code' => 'A2',
                'name' => 'Sejarah'
            ],
            [
                'code' => 'B2',
                'name' => 'Fiksi'
            ]
        ]);
    }
}
