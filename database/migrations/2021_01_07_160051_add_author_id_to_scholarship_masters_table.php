<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
//php artisan make:migration add_author_id_to_scholarship_masters_table --table=scholarship_masters

class AddAuthorIdToScholarshipMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('scholarship_masters', function (Blueprint $table) {
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
        Schema::table('scholarship_masters', function (Blueprint $table) {
            $table->dropForeign('scholarship_masters_author_id_foreign');
            $table->dropColumn('author_id');
        });
    }
}
