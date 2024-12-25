<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->cascadeOnDelete();


            $table->string('slug')->unique();
            $table->string('name');
            $table->text('description');

            $table->string('image');

            $table->bigInteger('price');
            $table->tinyInteger('discount');

            $table->tinyInteger('score')->default(0);

            $table->boolean('is_featured')->index();
            $table->tinyInteger('status')->index();

            $table->timestamps();
            $table->softDeletes();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
