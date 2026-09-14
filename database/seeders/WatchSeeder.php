<?php

namespace Database\Seeders;

use App\Models\Watch;
use Illuminate\Database\Seeder;

class WatchSeeder extends Seeder
{
    public function run(): void
    {
        Watch::create([
            'brand' => 'SEIKO',
            'model_name' => 'Seiko 5 Sports Automatic Black Dial',
            'reference_number' => 'SRPD55K1',
            'year' => 2023,
            'price' => 3250000,
            'condition' => 'EXCELLENT',
            'badge' => 'FEATURED',
            'image' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80&w=800&auto=format&fit=crop'
        ]);

        Watch::create([
            'brand' => 'G-SHOCK',
            'model_name' => 'CasiOak Carbon Core Guard All Black',
            'reference_number' => 'GA-2100-1A1',
            'year' => 2024,
            'price' => 1650000,
            'condition' => 'UNWORN',
            'badge' => 'NEW',
            'image' => 'https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?q=80&w=800&auto=format&fit=crop'
        ]);

        Watch::create([
            'brand' => 'ORIENT',
            'model_name' => 'Bambino Version 4 Blue Dial Automatic',
            'reference_number' => 'FAC08004D0',
            'year' => 2023,
            'price' => 2850000,
            'condition' => 'VERY GOOD',
            'badge' => 'VERIFIED',
            'image' => 'https://images.unsplash.com/photo-1539185441755-769473a23570?q=80&w=800&auto=format&fit=crop'
        ]);

        Watch::create([
            'brand' => 'CASIO',
            'model_name' => 'Edifice Classic Chronograph Leather',
            'reference_number' => 'EFR-526L-1AV',
            'year' => 2023,
            'price' => 1150000,
            'condition' => 'EXCELLENT',
            'badge' => 'VERIFIED',
            'image' => 'https://images.unsplash.com/photo-1547996160-81dfa63595aa?q=80&w=800&auto=format&fit=crop'
        ]);

        Watch::create([
            'brand' => 'ALBA',
            'model_name' => 'Automatic Green Dial Diver Style',
            'reference_number' => 'AL4245X1',
            'year' => 2024,
            'price' => 1450000,
            'condition' => 'UNWORN',
            'badge' => 'NEW',
            'image' => 'https://images.unsplash.com/photo-1509042239860-f550ce710b93?q=80&w=800&auto=format&fit=crop'
        ]);

        Watch::create([
            'brand' => 'TIMEX',
            'model_name' => 'Expedition Scout 40 Field Watch',
            'reference_number' => 'TW4B04700',
            'year' => 2023,
            'price' => 950000,
            'condition' => 'VERY GOOD',
            'badge' => 'TRENDING',
            'image' => 'https://images.unsplash.com/photo-1524805444758-089113d48a6d?q=80&w=800&auto=format&fit=crop'
        ]);

        Watch::create([
            'brand' => 'G-SHOCK',
            'model_name' => 'Mudman Tactical Dual Illuminator',
            'reference_number' => 'G-9000-1V',
            'year' => 2023,
            'price' => 1350000,
            'condition' => 'EXCELLENT',
            'badge' => 'VERIFIED',
            'image' => 'https://images.unsplash.com/photo-1542496658-e33a6d0d50f6?q=80&w=800&auto=format&fit=crop'
        ]);

        Watch::create([
            'brand' => 'SEIKO',
            'model_name' => 'Presage Cocktail Time Skydiving',
            'reference_number' => 'SRPB43J1',
            'year' => 2024,
            'price' => 4850000,
            'condition' => 'UNWORN',
            'badge' => 'FEATURED',
            'image' => 'https://images.unsplash.com/photo-1614164185128-e4ec99c436d7?q=80&w=800&auto=format&fit=crop'
        ]);
    }
}