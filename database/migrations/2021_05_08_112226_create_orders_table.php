<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mobile');
            $table->string('order_id');
            $table->integer('amount');
            $table->string('name');
            $table->string('state');
            $table->string('city');
            $table->string('house');
            $table->string('area');
            $table->string('landmark');
            $table->integer('pincode');
            $table->enum('order_status',['pending','delivered','cancelled']);
            $table->boolean('status');
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
        Schema::dropIfExists('orders');
    }
}
