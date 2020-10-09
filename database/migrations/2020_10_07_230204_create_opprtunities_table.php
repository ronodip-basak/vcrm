<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpprtunitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opportunities', function (Blueprint $table) {
            $table->id();
            $table->text('opportunity_name');
            $table->text('remarks');
            $table->boolean('active')->default(true);
            $table->unsignedBigInteger('lead_id');
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('assigned_to')->nullable();
            $table->timestamps();

            $table->foreign('created_by')
                ->references('id')
                ->on('users');

            $table->foreign('assigned_to')
                ->references('id')
                ->on('users');

            $table->foreign('lead_id')
                ->references('id')
                ->on('leads');

        });

        Schema::create('opportunities_users', function (Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('opportunity_id');
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users');


            $table->foreign('opportunity_id')
                ->references('id')
                ->on('opportunities');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opportunities');
        Schema::dropIfExists('opportunities_users');
    }
}
