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
        Schema::create('payslip', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('payroll_id');
            $table->unsignedBigInteger('employee_id');
            $table->decimal('regular_hours');
            $table->decimal('overtime_hours');
            $table->decimal('gross_salary');
            $table->decimal('overtime_pay');
            $table->decimal('basic_pay');
            $table->decimal('sss_deduction');
            $table->decimal('philhealth_deduction');
            $table->decimal('pagibig_deduction');
            $table->decimal('gov_deductions');
            $table->decimal('cash_advance_deduction');
            $table->decimal('total_deduction');
            $table->decimal('net_salary');
            $table->date('start_date');
            $table->date('end_date');
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
        Schema::dropIfExists('payslip');
    }
};
