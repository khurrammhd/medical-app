<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceItemsTable extends Migration
{
    public function up()
    {
        Schema::dropIfExists('invoice_items');
        Schema::create('invoice_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('billing_invoice_id')->constrained();
            $table->foreignId('medical_procedure_id')->constrained();
            $table->foreignId('diagnosis_id')->constrained();
            $table->integer('quantity'); // Assuming quantity is an integer
            $table->decimal('amount', 10, 2); // Assuming amount is in decimal format
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('invoice_items');
    }
}
