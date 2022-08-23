<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddChartdata extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('corporateprofilepages', function (Blueprint $table) {
            $table->integer('bExecution')->nullable();
            $table->string('bAverage')->nullable();
            $table->string('bAll')->nullable();
            $table->integer('eResponsibility')->nullable();
            $table->string('eAverage')->nullable();
            $table->string('fAll')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('corporateprofilepages', function (Blueprint $table) {
            $table->dropColumn('bExecution');
            $table->dropColumn('bAverage');
            $table->dropColumn('bAll');
            $table->dropColumn('eResponsibility');
            $table->dropColumn('eAverage');
            $table->dropColumn('fAll');
        });
    }
}
