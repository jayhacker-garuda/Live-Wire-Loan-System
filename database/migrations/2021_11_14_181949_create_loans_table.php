<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->text('requirements');
            $table->string('image');
            $table->string('max_year');
            $table->string('interest_rate');
            $table->string('loan_type');
            $table->decimal('min_amount',10,2);
            $table->decimal('max_amount', 10,2);
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
        Schema::dropIfExists('loans');
    }
}