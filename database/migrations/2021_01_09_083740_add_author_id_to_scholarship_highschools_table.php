<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAuthorIdToScholarshipHighschoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('scholarship_highschools', function (Blueprint $table) {
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
        Schema::table('scholarship_highschools', function (Blueprint $table) {
            $table->dropForeign('scholarship_highschools_author_id_foreign');
            $table->dropColumn('author_id');
        });
    }
}
