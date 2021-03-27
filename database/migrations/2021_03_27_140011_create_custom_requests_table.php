<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custom_requests', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('request_id')->unsigned();
            $table->foreign('request_id')->references('id')->on('price_requests')->onDelete('cascade');
            
            $table->string('payload_address');
            $table->string('payload_place');
            $table->decimal('weight', 10, 2);
            $table->integer('count')->default(0);
            $table->string('ready_date')->nullable();

            // Container Types
            $table->bigInteger('container_type_id')->unsigned()->nullable();
            $table->foreign('container_type_id')->references('id')->on('container_types')->onDelete('cascade');

            // Custom Types
            $table->bigInteger('custom_type_id')->unsigned()->nullable();
            $table->foreign('custom_type_id')->references('id')->on('custom_types')->onDelete('cascade');


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
        Schema::dropIfExists('custom_requests');
    }
}
