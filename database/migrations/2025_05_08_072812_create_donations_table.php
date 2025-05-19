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
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
        
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('campaign_id')->nullable()->constrained()->onDelete('set null');
        
            $table->string('name');              // Nama donor
            $table->string('phone');             // Nomor telepon
            $table->string('campaign_name');     // Nama campaign saat donasi
            $table->decimal('amount', 15, 2);    // Jumlah donasi
            $table->date('donation_date');       // Tanggal donasi
            $table->string('payment_method');    // Metode pembayaran (contoh: Transfer, QRIS, E-wallet)
        
            $table->timestamps();
        });
             
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donations');
    }
};
