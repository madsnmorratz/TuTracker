<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transport_units', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('name'); // Name column with a max length of 255
            $table->enum('datatype', ['Trailer', 'Truck']); // Enum column for datatype
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transport_units');
    }
};
