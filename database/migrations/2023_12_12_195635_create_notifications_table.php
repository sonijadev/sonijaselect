<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateNotificationsTable extends Migration
{
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('added_date');
            $table->time('added_time');
            $table->string('controller_login');
            $table->string('phone_id', 20);
            $table->string('registration_number', 15);
            $table->string('vehicle_brand', 150);
            $table->decimal('amount', 10, 2);
            $table->string('street', 250);
            $table->string('offense_type', 250);
        });
    }

    public function down()
    {
        Schema::dropIfExists('notifications');
    }
}