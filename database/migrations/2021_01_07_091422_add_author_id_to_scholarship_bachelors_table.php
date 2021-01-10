<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//php artisan make:migration add_author_id_to_scholarship_bachelors_table

class AddAuthorIdToScholarshipBachelorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('scholarship_bachelors', function (Blueprint $table) {
            $table->foreignId('author_id')->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('scholarship_bachelors', function (Blueprint $table) {
            $table->dropForeign('scholarship_bachelors_author_id_foreign');
            $table->dropColumn('author_id');
        });
    }
}
