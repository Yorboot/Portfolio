<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\skillset;
use Illuminate\Database\Seeder;

class skillsetSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        skillset::firstOrCreate(
            ['description'=>'swen is gay'],
            ['image'=>'imgs/Discordpf.png'],
            ['link'=>'https://discord.gg/'],
        );
    }
}
