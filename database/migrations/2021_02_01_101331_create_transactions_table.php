<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();            
            $table->date('date')->nullable();            
            $table->string('contact_id')->nullable();
            $table->text('description')->nullable();            
            $table->decimal('credit', 25, 2)->nullable();
            $table->decimal('debit', 25, 2)->nullable();
            $table->decimal('exchange', 25, 2)->nullable();
            $table->decimal('bolivares', 25, 2)->nullable();
            $table->string('currency')->nullable();
            $table->string('contact')->nullable();
            $table->string('invoice')->nullable(); 
            $table->string('destinatary')->nullable();             
            $table->enum('type',['in','out'])->nullable();
            $table->enum('source',['bank','cash'])->nullable();
            $table->enum('type_of_client',['person','business'])->nullable();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('company_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
