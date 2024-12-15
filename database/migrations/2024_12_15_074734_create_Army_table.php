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
        Schema::create('Army', function (Blueprint $table) {
            $table->integer('column_int')->nullable(); // type integer
            $table->float('column_float')->nullable(); // type float
            $table->string('column_string')->nullable(); // type string
            $table->date('column_date')->nullable(); // type date
            $table->text('column_text')->nullable(); // type text

            // Optional: คุณสามารถเพิ่มคอลัมน์ timestamp หรือ unique หากจำเป็น
             $table->timestamps();  // (ไม่ใช้ในกรณีนี้เนื่องจากห้ามใช้ created_at, updated_at)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Army');
    }
};
