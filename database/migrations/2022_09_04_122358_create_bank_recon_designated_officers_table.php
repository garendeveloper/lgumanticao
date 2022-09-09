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
        Schema::create('bank_recon_designated_officers', function (Blueprint $table) {
            $table->id();
            $table->string('disbursing_officer');
            $table->string('accountant');
            $table->string('mayor');
            $table->string('auditor');
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
        Schema::dropIfExists('bank_recon_designated_officers');
    }
};
