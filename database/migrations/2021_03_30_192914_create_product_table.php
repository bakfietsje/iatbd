<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable();
            $table->string("kind")->nullable();
            $table->foreign("kind")->references("kind")->on("kind_of_product");
            $table->date("datum")->nullable();
            $table->string("owner")->nullable()->references("name")->on("owners");
            $table->boolean("uitleenbaar")->default(true);
            $table->string("uitgeleend_aan")->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product', function (Blueprint $table) {
            $table->dropForeign('product_kind_foreign')->constrained();
        });

        Schema::dropIfExists('product');
    }
}
