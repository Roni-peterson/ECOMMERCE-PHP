<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTimestampsToAlmoxTable extends Migration
{
    public function up()
    {
        Schema::table('almox', function (Blueprint $table) {
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('almox', function (Blueprint $table) {
            $table->dropTimestamps();
        });
    }
}
