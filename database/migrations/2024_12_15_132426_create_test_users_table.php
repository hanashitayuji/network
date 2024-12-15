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
        Schema::create('test_users', function (Blueprint $table) {
            $table->tinyIncrements('id')->comment('ユーザーID');
            $table->string('email', 255)->comment('メールアドレス');
            $table->string('password', 255)->comment('パスワード');
            $table->string('name', 255)->comment('名前');
            $table->string('tel', 255)->comment('電話番号');
            $table->string('tel2', 255)->comment('緊急連絡先');
            $table->timestamps();
            $table->integer('del_flg')->default(0)->comment('削除フラグ');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_users');
    }
};
