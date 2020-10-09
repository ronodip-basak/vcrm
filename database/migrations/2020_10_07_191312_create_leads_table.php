<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();


            $table->unsignedBigInteger('created_by');
            $table->boolean('active')->default(true);
            $table->unsignedBigInteger('assigned_to');
            $table->timestamps();

            $table->foreign('created_by')
                ->references('id')
                ->on('users');

            $table->foreign('assigned_to')
                ->references('id')
                ->on('users');




        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leads');
    }
}
