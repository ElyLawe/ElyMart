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
    Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('barcode')->unique(); // Kode barcode barang (di-scan/input)
        $table->string('name');             // Nama produk (misal: Indomie Goreng)
        $table->integer('price');           // Harga jual
        $table->integer('cost_price');      // Harga modal/beli (opsional)
        $table->integer('stock');           // Jumlah stok barang
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
