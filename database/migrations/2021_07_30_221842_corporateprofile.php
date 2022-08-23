<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Corporateprofile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corporateprofilepages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('overviewenglish');
            $table->text('overviewindonesia');
            $table->text('operationareaenglish')->nullable();
            $table->text('operationareaindonesia')->nullable();
            $table->text('financialownershipenglish')->nullable();
            $table->text('financialownershipindonesia')->nullable();
            $table->text('corporatenetworkenglish')->nullable();
            $table->text('corporatenetworkindonesia')->nullable();
            $table->text('spotlightcasesenglish')->nullable();
            $table->text('spotlightcasesindonesia')->nullable();
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
        Schema::dropIfExists('corporateprofilepages');
    }
}
