<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entries', function (Blueprint $table) {
            $table->id();

            $table->string('name_sei')->nullable();
            $table->string('name_mei')->nullable();
            $table->string('name_sei_kana')->nullable();
            $table->string('name_mei_kana')->nullable();

            $table->unsignedInteger('sex')->nullable();
    
            $table->string('birthday_year')->nullable();
            $table->string('birthday_month')->nullable();
            $table->string('birthday_day')->nullable();
    
            $table->string('zipcode_1')->nullable();
            $table->string('zipcode_2')->nullable();
            
            $table->string('pref')->nullable();
            $table->string('address_1')->nullable();
            $table->string('address_2')->nullable();
            $table->string('address_3')->nullable();
    
            $table->string('tel_1')->nullable();
            $table->string('tel_2')->nullable();
            $table->string('tel_3')->nullable();
            $table->string('email')->nullable();
            $table->string('job')->nullable();
    
            $table->string('birthday_child_year')->nullable();
            $table->string('birthday_child_month')->nullable();
            $table->string('birthday_child_day')->nullable();
    
            $table->string('num')->nullable();
            $table->string('ex')->nullable();

            $table->string('present')->nullable();

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
        Schema::dropIfExists('entries');
    }
}
