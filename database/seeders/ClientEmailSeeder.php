<?php

namespace Database\Seeders;

use App\Models\ClientEmail;
use Illuminate\Database\Seeder;


class ClientEmailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ClientEmail::create([
            'fullname'   => 'John Doe',
            'email'      => 'john.doe@example.com',
            'subject'    => 'Inquiry About Services',
            'message'    => "Hello,\n\nI am interested in learning more about your services. Could you please provide more information regarding pricing and availability?\n\nThank you,\nJohn",
            'created_at' => now(),
        ]);

        // ClientEmailFactory::factory()->count(10)->create();
    }
}
