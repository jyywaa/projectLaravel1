<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('borrow_transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('item_id')->constrained('items')->cascadeOnDelete();
            $table->integer('amount')->default(1);
            $table->date('borrow_date');
            $table->date('return_date')->nullable();
            $table->text('description')->nullable();
            // tipe data enum untuk status
            $table->enum('status', ['pending', 'approved', 'rejected', 'returned'])->default('pending');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('borrow_transactions');
    }
};