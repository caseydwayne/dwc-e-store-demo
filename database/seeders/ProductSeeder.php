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
          'image' => 'rounded_column_mount_bracket.jpg',
          'stock' => 0,          
        ],
        [
          'name' => 'SKH26-L Timber Connectors',
          'description' => 'Pack of 25 timber connectors for secure wood joinery.',
          'price' => 45.00,
          'category_id' => $hardware,
          'image' => 'skh26_l_timber_connectors.jpg',
          'stock' => 100,
          'featured' => true,
        ],
        [
          'name' => 'Latchbolt 2-3/8" US-26D',
          'description' => 'Durable latchbolt with a 1" x 2-1/4" faceplate.',
          'price' => 12.50,
          'category_id' => $hardware,
          'image' => 'latchbolt_us_26d.jpg',
          'stock' => 3,
        ],
        [
          'name' => '2" Button Caps with 1-3/4" Screw',
          'description' => 'Box of 1000 button caps with screws for secure fastening.',
          'price' => 60.00,
          'category_id' => $fasteners,
          'image' => 'button_caps_with_screws.jpg',
          'stock' => 200,
          'featured' => true,
        ],
        [
          'name' => 'Envision Deck Screws - Weathered Wood',
          'description' => 'Bucket of 1750 deck screws in weathered wood finish.',
          'price' => 120.00,
          'category_id' => $fasteners,
          'image' => 'envision_deck_screws.jpg',
          'stock' => 30,
        ],
      ];
  
      foreach( $products as $product ){
        Product::create( $product );
      }
    }
  }