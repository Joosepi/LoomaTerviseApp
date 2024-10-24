<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBreedToPetsTable extends Migration
{
    public function up()
    {
        Schema::table('pets', function (Blueprint $table) {
            if (!Schema::hasColumn('pets', 'breed')) {
                $table->string('breed')->nullable()->after('species');
            }
        });
    }

    public function down()
    {
        Schema::table('pets', function (Blueprint $table) {
            if (Schema::hasColumn('pets', 'breed')) {
                $table->dropColumn('breed');
            }
        });
    }
}