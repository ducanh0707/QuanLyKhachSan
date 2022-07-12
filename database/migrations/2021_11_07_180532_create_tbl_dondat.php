<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblDondat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_dondat', function (Blueprint $table) {
            $table->Increments('id_dondat');
                $table->integer('id_customer');
                $table->date('ngaydat');
                $table->string('trangthai',100);
                $table->integer('tthai_ttoan');
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
        Schema::dropIfExists('tbl_dondat');
    }
}
