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
        Schema::create('test_file_csvs', function (Blueprint $table) {
            $table->id();
            $table->text( 'code')->nullable();
            $table->text( 'name')->nullable();
            $table->text( 'thirst_level')->nullable();
            $table->text( 'second_level')->nullable();
            $table->text( 'third_level')->nullable();
            $table->text( 'price')->nullable();
            $table->text( 'price_cp')->nullable();
            $table->text( 'quantity')->nullable();
            $table->text( 'property_fields')->nullable();
            $table->text( 'joint_purchases')->nullable();
            $table->text( 'unit_of_measurement')->nullable();
            $table->text( 'picture')->nullable();
            $table->text( 'in_main_page')->nullable();
            $table->text( 'description')->nullable();
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
        Schema::dropIfExists('test_file_csvs');
    }
};
