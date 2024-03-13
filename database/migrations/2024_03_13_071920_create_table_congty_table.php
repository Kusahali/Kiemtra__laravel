<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('congty', function (Blueprint $table) {
            $table->bigIncrements('MaHangHoa');
            $table->string('TenHang');
            $table->string('DonViTinh');
            $table->integer('SoLuongNhap');
            $table->integer('GiaNhap');
            $table->integer('GiaBan');
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
        Schema::dropIfExists('congty');
    }
};
