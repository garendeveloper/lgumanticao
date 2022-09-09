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
        Schema::create('accountingentries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rescen_id')->nullable();
            $table->foreign('rescen_id')
                    ->references('id')
                    ->on('responsibilitycenters')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->unsignedBigInteger('cashbook_id');
            $table->foreign('cashbook_id')
                    ->references('id')
                    ->on('cashbooks')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->unsignedBigInteger('account_id');
            $table->foreign('account_id')
                    ->references('id')
                    ->on('accountingentries')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');    
            $table->string('debit')->nullable();
            $table->string('credit')->nullable();
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
        Schema::dropIfExists('accountingentries');
    }
};
