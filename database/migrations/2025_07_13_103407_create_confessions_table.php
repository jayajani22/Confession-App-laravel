<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('confessions', function (Blueprint $table) {
            $table->id();
            $table->string('city');
            $table->string('title');
            $table->text('message');
            $table->string('code')->after('message');
            $table->timestamps();
        });
    }

public function down()
{
    Schema::table('confessions', function (Blueprint $table) {
        $table->dropColumn('code');
    });
}

};
