<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reviews = new Review();
        $reviews ->rating = 4.5;
        $reviews ->comment = "Bien";
        $reviews ->user_id = 2;
        $reviews ->location_id = 1;
        $reviews->save();

        $reviews = new Review();
        $reviews ->rating = 3.0;
        $reviews ->comment = "Regular";
        $reviews ->user_id = 3;
        $reviews ->location_id = 1;
        $reviews->save();

    }
}
