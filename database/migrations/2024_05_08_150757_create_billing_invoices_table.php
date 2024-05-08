<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillingInvoicesTable extends Migration
{
    public function up()
    {
        Schema::create('billing_invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained();
            $table->date('invoice_date');
            $table->decimal('total_amount', 10, 2); // Assuming total amount is in decimal format
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('billing_invoices');
    }
}