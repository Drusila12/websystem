<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonorsTable extends Migration
{
    public function up()
    {
        Schema::create('donors', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('gcash_number');
            $table->decimal('amount', 10, 2);
            $table->string('reference_number')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('donors');
    }
}
