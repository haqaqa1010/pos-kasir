<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->string('invoice')->unique();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->decimal('total', 12, 2);
            $table->decimal('paid', 12, 2);
            $table->decimal('change', 12, 2)->default(0);
            $table->enum('payment_method', ['cash', 'qris', 'debit'])->default('cash');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
