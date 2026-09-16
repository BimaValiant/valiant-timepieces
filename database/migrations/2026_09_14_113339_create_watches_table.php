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
public function up(): void
{
    Schema::create('watches', function (Blueprint $table) {
        $table->id();
        $table->string('brand');
        $table->string('model_name');
        $table->string('reference_number')->nullable();
        $table->integer('year')->nullable();
        $table->unsignedBigInteger('price');
        $table->string('condition');
        $table->string('status')->default('AVAILABLE');
        $table->string('badge')->default('VERIFIED');
        $table->string('image');
        
        // Kolom Spesifikasi Dinamis Baru
        $table->string('case_size')->nullable()->default('38 mm');
        $table->string('movement')->nullable()->default('Automatic');
        $table->string('glass')->nullable()->default('Sapphire Crystal');
        $table->string('completeness')->nullable()->default('Full Set (Box & Papers)');
        
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
        Schema::dropIfExists('watches');
    }
};
