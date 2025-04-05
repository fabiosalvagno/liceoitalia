<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Book;

class BooksTableSeeder extends Seeder
{
    public function run()
    {
        $json = File::get(database_path('data/books.json'));
        $data = json_decode($json, true);

        foreach ($data as $item) {
            Book::create([
                'title' => $item['title'],
                'description' => $item['contenuto'],
                'image' => basename($item['image_link']),
                'amazon_link' => $item['link'],
                'kakitori' => $item['kakitori'] ?? false,
                'lettura' => $item['lettura'] ?? false,
                'denshi' => $item['denshi'] ?? false,
                'linkspiega' => $item['linkspiega'] ?? null,
            ]);
        }
    }
}
