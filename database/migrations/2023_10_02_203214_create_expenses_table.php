<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpensesTable extends Migration
{
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->string('expenses_name');
            $table->string('description');
            $table->decimal('amount', 10, 2);
            $table->string('supplier_name');
            $table->string('buyer_name');
            $table->date('expense_date');
            $table->string('payment_method');
            $table->string('receipt_number')->nullable();
            $table->string('receipt_attachment')->nullable();
            $table->text('notes')->nullable();
//            $table->unsignedBigInteger('clinic_id');
            $table->unsignedBigInteger('user_id');
            $table->decimal('tax_amount', 10, 2)->nullable();
            $table->unsignedBigInteger('category_id');
            $table->timestamps();

//            $table->foreign('clinic_id')
//                ->references('id')
//                ->on('clinics')
//                ->onDelete('cascade');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('category_id')
                ->references('id')
                ->on('expenses_categories')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('expenses');
    }
}

