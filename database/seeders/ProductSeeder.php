<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder {
    public function run(){
      $hardware = Category::where( 'name', 'Hardware' )->first()->id;
      $fasteners = Category::where( 'name', 'Fasteners' )->first()->id;

      $products = [
        [
          'name' => 'Rounded Column Mount Bracket',
          'description' => 'Kit to mount one section of railing to a round column.',
          'price' => 29.99,
          'category_id' => $hardware, 
          'image' => 'rail-bracket.webp',
          'stock' => 33,
          'sku' => 'RCMB-01',
        ],
        [
          'name' => 'SKH26-L Timber Connectors',
          'description' => 'Pack of 25 timber connectors for secure wood joinery.',
          'price' => 45.00,
          'category_id' => $hardware,
          'image' => 'hanger.webp',
          'stock' => 100,
          'sku' => 'SKH26-L',
          'featured' => true,
        ],
        [
          'name' => 'Latchbolt 2-3/8" US-26D',
          'description' => 'Durable latchbolt with a 1" x 2-1/4" faceplate.',
          'price' => 12.50,
          'category_id' => $hardware,
          'image' => 'latchbolt.webp',
          'stock' => 3,
          'sku' => 'LB-26D',
        ],
        [
          'name' => '2" Button Caps with 1-3/4" Screw',
          'description' => 'Box of 1000 button caps with screws for secure fastening.',
          'price' => 60.00,
          'category_id' => $fasteners,
          'image' => 'button-screw.jpg',
          'stock' => 200,
          'sku' => 'BCS-1000',
          'featured' => true,
        ],
        [
          'name' => 'Envision Deck Screws - Weathered Wood',
          'description' => 'Bucket of 1750 deck screws in weathered wood finish.',
          'price' => 120.00,
          'category_id' => $fasteners,
          'image' => 'epoxy-screw.jpg',
          'stock' => 0,
          'sku' => 'EDS-WW',
        ],
      ];
  
      foreach( $products as $product ){
        Product::create( $product );
      }
    }
  }