<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactPersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_person', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('cell')->nullable();
            $table->text('email')->nullable();
            $table->text('address1')->nullable();
            $table->text('address2')->nullable();
            $table->text('country')->nullable();
            $table->text('state')->nullable();
            $table->text('zip')->nullable();
            $table->unsignedBigInteger('lead_id')->unique();
            $table->timestamps();

            $table->foreign('lead_id')->references('id')->on('leads');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_person');
    }
}
