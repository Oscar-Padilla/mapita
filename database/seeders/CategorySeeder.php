<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = new Category();
        $categories->name = "Eduacation";
        $categories->description = "Preescolar, primaria, secundaria, preparatoria, universidad";
        $categories->save();
    }
}
