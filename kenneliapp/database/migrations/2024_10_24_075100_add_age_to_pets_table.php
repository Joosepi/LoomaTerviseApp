<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('pets', function (Blueprint $table) {
            $table->integer('age')->nullable();
        });
    }

    public function down()
    {
        Schema::table('pets', function (Blueprint $table) {
            $table->dropColumn('age');
        });
    }
};