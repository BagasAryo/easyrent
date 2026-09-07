<?php

namespace Database\Seeders;

use App\Models\Motorcycle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MotorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $motors = [
            [
                'name' => 'Honda Beat',
                'type' => 'Matic',
                'cc' => 110,
                'price_per_day' => 50000,
                'description' => 'Honda Beat adalah motor matic yang irit dan lincah.',
                'status' => 'available',
            ],
            [
                'name' => 'Yamaha Nmax',
                'type' => 'Matic',
                'cc' => 155,
                'price_per_day' => 75000,
                'description' => 'Yamaha Nmax adalah motor matic yang nyaman dan bertenaga.',
                'status' => 'available',
            ],
            [
                'name' => 'Honda Vario',
                'type' => 'Matic',
                'cc' => 125,
                'price_per_day' => 60000,
                'description' => 'Honda Vario adalah motor matic yang sporty dan irit.',
                'status' => 'available',
            ],
            [
                'name' => 'Yamaha Mio',
                'type' => 'Matic',
                'cc' => 125,
                'price_per_day' => 55000,
                'description' => 'Yamaha Mio adalah motor matic yang lincah dan irit.',
                'status' => 'available',
            ],
            [
                'name' => 'Honda PCX',
                'type' => 'Matic',
                'cc' => 150,
                'price_per_day' => 85000,
                'description' => 'Honda PCX adalah motor matic yang nyaman dan bertenaga.',
                'status' => 'available',
            ],
            [
                'name' => 'Yamaha Aerox',
                'type' => 'Matic',
                'cc' => 155,
                'price_per_day' => 80000,
                'description' => 'Yamaha Aerox adalah motor matic yang sporty dan bertenaga.',
                'status' => 'available',
            ],
            [
                'name' => 'Honda CRF',
                'type' => 'Sport',
                'cc' => 250,
                'price_per_day' => 120000,
                'description' => 'Honda CRF adalah motor sport yang tangguh.',
                'status' => 'available',
            ],
            [
                'name' => 'Yamaha R15',
                'type' => 'Sport',
                'cc' => 155,
                'price_per_day' => 100000,
                'description' => 'Yamaha R15 adalah motor sport yang sporty dan bertenaga.',
                'status' => 'available',
            ],
            [
                'name' => 'Honda CBR',
                'type' => 'Sport',
                'cc' => 250,
                'price_per_day' => 110000,
                'description' => 'Honda CBR adalah motor sport yang sporty dan bertenaga.',
                'status' => 'available',
            ],
            [
                'name' => 'Yamaha MT-15',
                'type' => 'Sport',
                'cc' => 155,
                'price_per_day' => 95000,
                'description' => 'Yamaha MT-15 adalah motor sport yang sporty dan bertenaga.',
                'status' => 'available',
            ],
        ];

        foreach ($motors as $motor) {
            Motorcycle::create($motor);
        }
    }
}
