<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\Category;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        // Mencari kategori game berdasarkan slug
        $mlbb = Category::where('slug', 'mlbb-a')->first();

        if ($mlbb) {
            $data = [
                ['category_id' => $mlbb->id, 'name' => '5 Diamonds', 'code' => 'ML5', 'price' => 1500],
                ['category_id' => $mlbb->id, 'name' => '12 Diamonds', 'code' => 'ML12', 'price' => 3500],
                ['category_id' => $mlbb->id, 'name' => '28 Diamonds', 'code' => 'ML28', 'price' => 8000],
                ['category_id' => $mlbb->id, 'name' => '59 Diamonds', 'code' => 'ML59', 'price' => 16000],
                ['category_id' => $mlbb->id, 'name' => '85 Diamonds', 'code' => 'ML85', 'price' => 23000],
                ['category_id' => $mlbb->id, 'name' => '170 Diamonds', 'code' => 'ML170', 'price' => 45000],
                ['category_id' => $mlbb->id, 'name' => '296 Diamonds', 'code' => 'ML296', 'price' => 80000],
            ];

            foreach ($data as $item) {
                Service::create($item);
            }
            $this->command->info("Data harga MLBB berhasil dimasukkan!");
        } else {
            $this->command->error("Gagal: Kategori game 'mlbb-a' tidak ditemukan!");
        }
    }
}