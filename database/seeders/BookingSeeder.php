<?php

namespace Database\Seeders;

use App\Models\Motorcycle;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ambil 1 user customer
        $customer = User::where('role', 'customer')->first();
        
        // Ambil beberapa ID motor yang tersedia (misal 3 motor secara acak)
        $motorcycleIds = Motorcycle::where('status', 'available')->inRandomOrder()->take(3)->pluck('id');

        // Pastikan kita punya minimal 3 motor, jika tidak fallback ke motor yang ada
        $motorId1 = $motorcycleIds->get(0) ?? Motorcycle::first()->id;
        $motorId2 = $motorcycleIds->get(1) ?? $motorId1;
        $motorId3 = $motorcycleIds->get(2) ?? $motorId1;

        $bookings = [
            [
                'public_id' => \Illuminate\Support\Str::ulid(),
                'user_id' => $customer->id,
                'motorcycle_id' => $motorId1,
                'start_date' => Carbon::parse('2025-11-11'),
                'end_date' => Carbon::parse('2025-11-15'),
                'total_days' => 4,
                'total_price' => 200000,
                'status' => 'paid',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'public_id' => \Illuminate\Support\Str::ulid(),
                'user_id' => $customer->id,
                'motorcycle_id' => $motorId2,
                'start_date' => Carbon::parse('2025-12-24'),
                'end_date' => Carbon::parse('2025-12-30'),
                'total_days' => 6,
                'total_price' => 200000,
                'status' => 'completed',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'public_id' => \Illuminate\Support\Str::ulid(),
                'user_id' => $customer->id,
                'motorcycle_id' => $motorId3,
                'start_date' => Carbon::parse('2025-12-31'),
                'end_date' => Carbon::parse('2026-01-02'),
                'total_days' => 2,
                'total_price' => 200000,
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        \App\Models\Booking::insert($bookings);
    }
}
