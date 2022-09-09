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
        Schema::create('cashbooks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('referenceno')->nullable();
            $table->unsignedBigInteger('particular_id');
            $table->foreign('particular_id')->references('id')
                        ->on('particulars')
                        ->onUpdate('cascade')
                        ->onDelete('cascade');
            $table->unsignedBigInteger('fund_id');
            $table->foreign('fund_id')->references('id')
                        ->on('funds')
                        ->onUpdate('cascade')
                        ->onDelete('cascade');
            $table->unsignedBigInteger('year_id');
            $table->foreign('year_id')->references('id')
                        ->on('years')
                        ->onUpdate('cascade')
                        ->onDelete('cascade');
            $table->integer('month');
            $table->date('date');
            $table->integer('last_checkno');
            $table->integer('encashment_status')->default(0);
            $table->double('debit')->nullable();
            $table->double('credit')->nullable();
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
        Schema::dropIfExists('cashbooks');
    }
};
