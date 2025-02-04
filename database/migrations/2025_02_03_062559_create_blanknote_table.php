<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('blanknote', function (Blueprint $table) {
            $table->id('note_id');
            $table->string('judul');
            $table->text('description');
            $table->date('tanggal');
            $table->integer('tanda');
            $table->enum('priority', ['default', 'very_low', 'low', 'medium', 'high', 'very_high']);
            $table->boolean('shared');
            $table->bigInteger('user_id')->unsigned();
            $table->timestamps();

            // Foreign Key harus diletakkan setelah deklarasi user_id
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('blanknote');
    }
};
