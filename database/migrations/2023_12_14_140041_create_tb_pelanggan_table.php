<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_pelanggan', function (Blueprint $table) {
            $table->increments('pel_id');
            $table->unsignedTinyInteger('pel_id_gol');
            $table->string('pel_no', 20);
            $table->string('pel_nama', 50);
            $table->text('pel_alamat');
            $table->string('pel_hp', 20);
            $table->string('pel_ktp', 50)->unique('pel_ktp');
            $table->string('pel_seri', 50);
            $table->integer('pel_meteran');
            $table->enum('pel_aktif', ['Y', 'N'])->default('Y');
            $table->unsignedInteger('pel_id_user');

            $table->foreign('pel_id_user')->references('id')->on('users')->onUpdate('Cascade');
            $table->foreign('pel_id_gol')->references('gol_id')->on('tb_golongan')->onUpdate('Cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pelanggan');
    }
};
