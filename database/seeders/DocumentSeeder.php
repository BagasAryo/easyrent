<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $document = [
            [
                'user_id' => 2,
                'booking_id' => 1,
                'document_type' => 'ktp',
                'file_path' => 'ktp.jpg',
                'verification_status' => 'verified',
                'verified_at' => now(),
            ],
        ];
    }
}
