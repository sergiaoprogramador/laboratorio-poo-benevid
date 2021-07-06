<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 60);
            $table->string('image', 100);
            $table->string('brand', 30);
            $table->double('price');
            $table->integer("countInStock");
            $table->text('description');
            $table->timestamps();

            $table->softDeletes($column = "deleted_at", $precision = 0);
            $table->foreignId('category_id')->constrained("categories");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
