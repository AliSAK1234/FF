<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Cmpycode');
            $table->string('Suppliercode');
            $table->string('Name');
            $table->string('Address')->nullable();
            $table->string('PoBox')->nullable();
            $table->string('City')->nullable();
            $table->string('Country')->nullable();
            $table->string('Others')->nullable();
            $table->string('Phone')->nullable();
            $table->string('Fax')->nullable();
            $table->integer('CreditLimitInDays')->nullable();
            $table->decimal('CreditLimitAmount',15,3)->nullable();
            $table->decimal('TotalInvoiceAmounts',15,3)->nullable();
            $table->decimal('OutstandingBalance',15,3)->nullable();
            $table->date('LastPurchaseDate')->nullable();
            $table->date('LastPaymentDate')->nullable();
            $table->decimal('TotalAmountPaid',15,3)->nullable();
            $table->string('CtPersonOne')->nullable();
            $table->string('CtPersonTwo')->nullable();
            $table->string('CtPhoneOne')->nullable();
            $table->string('Emailid')->nullable();
            $table->string('Notes')->nullable();
            $table->decimal('OBAmt',9,3)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suppliers');
    }
}
