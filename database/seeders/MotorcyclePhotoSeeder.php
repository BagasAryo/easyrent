<?php

namespace Database\Seeders;

use App\Models\MotorcyclePhoto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MotorcyclePhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $motorcyclePhotos = [
            [
                'motorcycle_id' => 1,
                'image_path' => 'https://images.unsplash.com/photo-1570986530585-d1a72944b19a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80',
                'is_primary' => true,
            ],
            [
                'motorcycle_id' => 2,
                'image_path' => 'https://images.unsplash.com/photo-1570986530585-d1a72944b19a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80',
                'is_primary' => true,
            ],
        ];

        foreach ($motorcyclePhotos as $motorcyclePhoto) {
            MotorcyclePhoto::create($motorcyclePhoto);
        }
    }
}
