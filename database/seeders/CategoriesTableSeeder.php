<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $categories = [
            ['name' => 'libri di testo・テキストブック'],
            ['name' => 'eserciziario・練習問題集'],
            ['name' => 'brevi racconti・ショートストリー'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
