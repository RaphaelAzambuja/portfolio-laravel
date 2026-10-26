<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    public function run(): void
    {
        Partner::insert([
            [
                'name' => 'Nicolas Ninov',
                'url' => 'https://www.linkedin.com/in/nicolas-ninov/',
                'image' => 'images/partners/nicolas_ninov.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mipe Crew',
                'url' => 'https://mipecrew.com',
                'image' => 'images/partners/mipe_crew.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
