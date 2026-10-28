<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CampaignFactory extends Factory
{
    public function definition(): array
    {
        // Membuat tanggal mulai acak (dari 1 bulan lalu hingga 1 bulan ke depan)
        $startDate = $this->faker->dateTimeBetween('-1 month', '+1 month');
        
        // Tanggal selesai dipastikan selalu setelah tanggal mulai
        $endDate = $this->faker->dateTimeBetween($startDate, $startDate->format('Y-m-d H:i:s') . ' +2 months');

        return [
            'name' => 'Kampanye ' . $this->faker->company(),
            'channel' => $this->faker->randomElement(['Instagram', 'TikTok', 'Website', 'Facebook', 'Youtube', 'Billboard Jalan']),
            'start_date' => $startDate->format('Y-m-d'),
            'end_date' => $endDate->format('Y-m-d'),
            'budget' => $this->faker->numberBetween(500000, 100000000), // Antara 500 ribu - 100 juta
            'status' => $this->faker->randomElement(['Draft', 'Active', 'Finished']),
            'description' => $this->faker->paragraph(),
        ];
    }
}