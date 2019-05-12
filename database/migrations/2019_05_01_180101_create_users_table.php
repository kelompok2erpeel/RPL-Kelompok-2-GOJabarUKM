<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username_ukm')->unique();
            $table->string('nama_ukm');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('no_telepon');
            $table->text('alamat');
            $table->longText('deskripsi_ukm');
            $table->string('IG')->nullable();
            $table->string('Facebook')->nullable();
            $table->string('Website')->nullable();
            $table->string('logo')->nullable();
            $table->string('TDP')->nullable();
            $table->string('SIUP')->nullable();
            $table->string('NPWP')->nullable();
            $table->string('izin_gangguan')->nullable();
            $table->string('role')->default('pemilik ukm');
            $table->rememberToken();
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
       Schema::dropIfExist('users');
    }
}
