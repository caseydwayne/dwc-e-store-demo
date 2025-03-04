<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder {
    public function run(){

      Category::firstOrCreate([ 'id' => 1, 'name' => 'Hardware', 'description' => 'Various hardware items' ]);
      Category::firstOrCreate([ 'id' => 2, 'name' => 'Fasteners', 'description' => 'Screws, bolts, and other fasteners' ]);
      
    }
  }