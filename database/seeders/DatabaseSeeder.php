<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\BooksTableSeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Solo se non esiste già
        if (!User::where('email', 'test@example.com')->exists()) {
            User::factory()->create([
                'name' => 'Test User',
                'email' => 'test@example.com',
            ]);
        }

        $this->call(BooksTableSeeder::class);
    }
}
