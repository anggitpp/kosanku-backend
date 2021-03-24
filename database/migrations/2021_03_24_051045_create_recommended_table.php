<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecommendedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recommended', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->text('image_url')->nullable();
            $table->double('price');
            $table->string('city', '50');
            $table->string('country', '50');
            $table->integer('rating');
            $table->text('address');
            $table->string('created_by');
            $table->string('updated_by')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recommended');
    }
}
