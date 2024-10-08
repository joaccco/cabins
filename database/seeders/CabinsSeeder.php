<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
Use App\Models\Cabins;
class CabinsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        DB::table('cabins')->insert([
            [
                'name' => 'Cabaña Los Pinos',
                'description' => 'Una cabaña acogedora rodeada de pinos.',
                'location' => 'Valle de la Luna',
                'capacity' => 4,
                'price_per_night' => 150.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cabaña Las Flores',
                'description' => 'Una cabaña con vistas impresionantes al jardín.',
                'location' => 'Sierra de las Quijadas',
                'capacity' => 2,
                'price_per_night' => 120.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cabaña El Refugio',
                'description' => 'Una cabaña de lujo en la cima de la montaña.',
                'location' => 'Parque Nacional del Fuego',
                'capacity' => 6,
                'price_per_night' => 200.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cabaña La Tranquila',
                'description' => 'Perfecta para desconectar, rodeada de naturaleza.',
                'location' => 'Delta del Paraná',
                'capacity' => 3,
                'price_per_night' => 130.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cabaña El Mirador',
                'description' => 'Con vistas panorámicas al lago y al bosque.',
                'location' => 'Laguna Azul',
                'capacity' => 5,
                'price_per_night' => 180.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
