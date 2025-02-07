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
        Schema::create('blanktodo', function (Blueprint $table) {
            $table->id('todo_id');
            $table->string('judul');
            $table->text('todo');
            $table->date('tanggal');
            $table->integer('tanda');
            $table->enum('priority', ['card-bottom-border-success', 'card-bottom-border-purple', 'card-bottom-border-info', 'card-bottom-border-primary', 'card-bottom-border-warning', 'card-bottom-border-danger']);
            $table->boolean('shared');
            $table->bigInteger('user_id')->unsigned();
            $table->timestamps();
            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blanktodo');
    }
};
