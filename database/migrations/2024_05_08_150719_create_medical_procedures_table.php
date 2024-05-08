<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalProceduresTable extends Migration
{
    public function up()
    {
        Schema::create('medical_procedures', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->decimal('cost', 8, 2); // Assuming cost is in decimal format
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('medical_procedures');
    }
}
