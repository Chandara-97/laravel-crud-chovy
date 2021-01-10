<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScholarshipMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scholarship_masters', function (Blueprint $table) {
            $table->id();
            $table->longText('country_name');
            $table->longText('category');
            $table->longText('image');
            $table->longText('description');
            $table->longText('author');
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
        Schema::dropIfExists('scholarship_masters');
    }
}
