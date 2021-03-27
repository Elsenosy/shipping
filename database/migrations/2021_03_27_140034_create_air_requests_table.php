<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('air_requests', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('request_id')->unsigned();
            $table->foreign('request_id')->references('id')->on('price_requests')->onDelete('cascade');
            $table->string('payload_address');
            $table->string('arrival_address');
            $table->string('payload_airport');
            $table->string('arrival_airport');
            $table->string('goods_type');
            $table->decimal('weight', 10, 2);
            $table->integer('units_count')->default(0);
            $table->integer('length')->default(0);
            $table->integer('height')->default(0);
            $table->integer('width')->default(0);
            $table->string('ready_date')->nullable();
            
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
        Schema::dropIfExists('air_requests');
    }
}
