<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CorporateData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('corporateprofilepages', function (Blueprint $table) {
            $table->integer('development')->nullable();
            $table->string('developmentAverage')->nullable();
            $table->string('developmentAll')->nullable();
            $table->integer('management')->nullable();
            $table->string('managementAverage')->nullable();
            $table->string('managementAll')->nullable();
            $table->integer('communityExecution')->nullable();
            $table->string('communityAverage')->nullable();
            $table->string('communityAll')->nullable();
            $table->integer('condition')->nullable();
            $table->string('workingAverage')->nullable();
            $table->string('workingAll')->nullable();
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
            $table->dropColumn('development');
            $table->dropColumn('developmentAverage');
            $table->dropColumn('developmentAll');
            $table->dropColumn('management');
            $table->dropColumn('managementAverage');
            $table->dropColumn('managementAll');
            $table->dropColumn('communityExecution');
            $table->dropColumn('communityAverage');
            $table->dropColumn('communityAll');
            $table->dropColumn('condition');
            $table->dropColumn('workingAverage');
            $table->dropColumn('workingAll');
        });
    }
}
