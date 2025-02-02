<?php

namespace Database\Seeders;

use App\Models\Todolist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TodolistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Todolist::insert([
            [
                'title' => 'Belajar Laravel',
                'desc' => 'Belajar laravel 11',
                'is_done' => false
            ],
            [
                'title' => 'Belajar Html',
                'desc' => 'Belajar HTML 5',
                'is_done' => false
            ],
            ]);
    }
}
