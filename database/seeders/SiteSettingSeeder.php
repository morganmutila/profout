<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SiteSettingSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('site_settings')->insert([
            'phone'            => '+1 (123) 456-7890',
            'phone_alt'        => '+1 (098) 765-4321',
            'email'            => 'info@example.com',
            'contact_email'    => 'contact@example.com',
            'hero_title'       => 'Welcome to Our Website',
            'hero_description' => 'We are committed to delivering excellence in everything we do.',
            'about_info'       => 'Our company has been providing quality services for over a decade, ensuring customer satisfaction at every step.',
            'address'          => '123 Main Street, Springfield, USA',
            'map_location'     => 'https://maps.google.com/?q=123+Main+Street,Springfield,USA',
            'company_profile_link' => 'https://www.example.com/company-profile',
            'created_at'       => now(),
            'updated_at'       => now(),
        ]);
    }
}
