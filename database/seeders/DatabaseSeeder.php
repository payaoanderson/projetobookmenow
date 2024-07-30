<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    
        $this->call(UsuarioSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(ServicoSeeder::class);
        $this->call(FotoSeeder::class);
      

      
    }
}
