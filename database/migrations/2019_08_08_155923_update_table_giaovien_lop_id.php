<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableGiaovienLopId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('giaovien', function (Blueprint $table) {
            $table->foreign("lop_id")->references("lop_id")->on("lop");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('giaovien',function (Blueprint $table){
            $table->dropForeign(["lop_id"]);
        });
    }
}
