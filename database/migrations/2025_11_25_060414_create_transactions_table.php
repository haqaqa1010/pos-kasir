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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_no', 50)->unique();

            $table->foreignId('cashier_id')->constrained('users')->cascadeOnDelete();

            $table->decimal('total', 10, 2);
            $table->decimal('paid', 10, 2);
            $table->decimal('change', 10, 2);

            $table->enum('payment_method', ['cash', 'qris', 'transfer']);

            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
