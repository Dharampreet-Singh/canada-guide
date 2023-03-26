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
        Schema::create('housings', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('images')->nullable();// comma separated images links
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip')->nullable();
            $table->unsignedBigInteger('uploaded_by_user_id')->nullable(); 
            $table->foreign('uploaded_by_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('description')->nullable();
            $table->enum('property_type',['apartment', 'condo','basement']); // condo, apartment
            $table->enum("property_for", ['sell', 'rent']); //sell or rent
            $table->integer('number_of_beds')->nullable();
            $table->float('number_of_bathrooms')->nullable();
            $table->boolean('is_available')->nullable();
            $table->integer('price')->nullable();
            $table->string('currency')->nullable();
            $table->string('utilities')->nullable();
            $table->float('area')->nullable();
            $table->string('area_unit')->default("sqft"); // square ft
            $table->boolean('soft_delete')->default(false);
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
        Schema::dropIfExists('housings');
    }
};
