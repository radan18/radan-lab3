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
        Schema::create('cash_advance', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id');
            $table->decimal('amount');
            $table->string('payment_plan');
            $table->decimal('deduction_per_payroll');
            $table->decimal('balance');
            $table->date('date_issued');
            $table->enum('status',['umpaid', 'paid']);
            $table->timestamps();
 
            $table->foreign('employee_id')
            ->references('id')
            ->on('employees')
            ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cash_advance');
    }
};
