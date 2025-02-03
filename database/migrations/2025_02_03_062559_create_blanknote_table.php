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
        Schema::create('blanknote', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('desc');
            $table->date('tanggal');
            $table->integer('tanda');
            $table->enum( 'priority', ['default','very_low', 'low', 'medium', 'high', 'very_high']);
            $table->boolean('shared');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blanknote');
    }
};
