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
        Schema::create('leases', function (Blueprint $table) {
            $table->id();
            $table->string('lease_num', 4);
            $table->string('start_date', 15);
            $table->string('end_date', 10);
            $table->string('total_price', 15);
            $table->string('security', 10);
            // $table->unsignedbiginteger('lease_id');

            // $table->foreign('lease_id')->references('id')->on('leases')->onDelete('cascade');
            $table->unsignedbiginteger('property_id');
            $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');
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
        Schema::dropIfExists('leases');
    }
};
