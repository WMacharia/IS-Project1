<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('stall-payments', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }

    public function down()
    {
        Schema::table('stall-payments', function (Blueprint $table) {
            $table->enum('status', ['pending', 'paid'])->default('pending');
        });
    }
};
