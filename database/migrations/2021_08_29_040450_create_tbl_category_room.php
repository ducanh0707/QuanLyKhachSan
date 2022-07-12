<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblCategoryRoom extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_category_room', function (Blueprint $table) {
                $table->Increments('category_id');
                $table->string('ten_loai');
                $table->integer('so_giuong');
                $table->integer('so_nguoi');
                $table->double('dien_tich');
                $table->double('gia_phong');
                $table->integer('category_status');
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
        Schema::dropIfExists('tbl_category_room');
    }
}
