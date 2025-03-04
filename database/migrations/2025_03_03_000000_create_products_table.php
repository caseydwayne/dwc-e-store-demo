<?php 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  public function up(){
    Schema::create( 'products', function( Blueprint $table ){
      $table->id();
      $table->string( 'name' );
      $table->text( 'description' )->nullable();
      $table->decimal( 'price', 8, 2 );
      $table->unsignedBigInteger( 'category_id' );
      $table->string( 'image' )->nullable();
      $table->integer( 'stock' )->default( 0 );
      $table->timestamps();
      $table->foreign( 'category_id' )->references( 'id' )->on( 'categories' )->onDelete( 'cascade' );
      $table->boolean( 'featured' )->default( false ); 
      $table->text( 'sku' );
    });
  }

  public function down(){
    Schema::dropIfExists( 'products' );
  }
};

?>