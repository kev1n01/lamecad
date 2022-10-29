<?php

namespace Database\Seeders;

use App\Models\CategoryProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                 'name' => 'Abrazaderas',
            ],
            [
                 'name' => 'Aceites',
            ],
            [
                 'name' => 'Liquidos',
            ],
            [
                 'name' => 'Grasas',
            ],
        ];

        foreach ($categories as $c) {
            CategoryProduct::create([
                'name' => $c['name'],
            ]);
            // DB::insert('insert into category_products (id, name, created_at) values (?, ?, ?)', [$key + 1, $c['name']], now());
        }
    }
}
