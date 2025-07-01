<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('dummyTable', function (Blueprint $table) {
            $table->id('name_id');
            $table->string('name');
            $table->integer('age');
            $table->string('status')->default('Inactive');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dummyTable');
    }
};
