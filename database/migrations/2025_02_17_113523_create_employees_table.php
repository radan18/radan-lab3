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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('middleName');
            $table->string('lastName');
            $table->enum('gender',['Male' ,'Female', 'Other']);
            $table->date('birth_date');
            $table->enum('marital_status',['Single', 'Married', 'Divorced', 'Widowed']);
            $table->string('position');
            $table->date('hire_date');
            $table->string('address');
            $table->string('cellphone');
            $table->string('qr_code');
            $table->string('status');
            $table->timestamps();




            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
