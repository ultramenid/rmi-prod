<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCorporateprofile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('corporateprofilepages', function (Blueprint $table) {
            $table->renameColumn('financialownershipenglish', 'financialenglish');
            $table->renameColumn('financialownershipindonesia', 'financialindonesia');
            $table->text('ownershipenglish')->after('financialownershipindonesia')->nullable();
            $table->text('ownershipindonesia')->after('ownershipenglish')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
