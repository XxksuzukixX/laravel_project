<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sender_id')->constrained('users')->onDelete('cascade'); // 送信者
            $table->foreignId('receiver_id')->constrained('users')->onDelete('cascade'); // 受信者
            $table->text('content'); // メッセージ本文
            $table->boolean('is_read')->default(false); // 既読フラグ
            $table->timestamps(); // created_at, updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};