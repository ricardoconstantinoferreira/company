<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('city')->insert(['city' => 'Taboão da Serra', 'state' => 'SP', 'created_at' => now(), 'updated_at' => now()]);
        DB::table('city')->insert(['city' => 'Itapecerica da Serra', 'state' => 'SP', 'created_at' => now(), 'updated_at' => now()]);
        DB::table('city')->insert(['city' => 'São Paulo', 'state' => 'SP', 'created_at' => now(), 'updated_at' => now()]);
        DB::table('city')->insert(['city' => 'Uberaba', 'state' => 'MG', 'created_at' => now(), 'updated_at' => now()]);
        DB::table('city')->insert(['city' => 'Uberlândia', 'state' => 'MG', 'created_at' => now(), 'updated_at' => now()]);
        DB::table('city')->insert(['city' => 'Belo Horizonte', 'state' => 'MG', 'created_at' => now(), 'updated_at' => now()]);
        DB::table('city')->insert(['city' => 'Fortaleza', 'state' => 'CE', 'created_at' => now(), 'updated_at' => now()]);
        DB::table('city')->insert(['city' => 'Catunda', 'state' => 'CE', 'created_at' => now(), 'updated_at' => now()]);
        DB::table('city')->insert(['city' => 'Boa Viagem', 'state' => 'CE', 'created_at' => now(), 'updated_at' => now()]);
        DB::table('city')->insert(['city' => 'Porto Alegre', 'state' => 'RS', 'created_at' => now(), 'updated_at' => now()]);
        DB::table('city')->insert(['city' => 'Canoas', 'state' => 'RS', 'created_at' => now(), 'updated_at' => now()]);
        DB::table('city')->insert(['city' => 'Curitiba', 'state' => 'PR', 'created_at' => now(), 'updated_at' => now()]);
        DB::table('city')->insert(['city' => 'Recife', 'state' => 'PE', 'created_at' => now(), 'updated_at' => now()]);
    }
}
