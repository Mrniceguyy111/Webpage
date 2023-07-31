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
        Schema::create('users', function (Blueprint $table) {

            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone');
            $table->string('document');
            $table->string('document_type');

            $table->integer('is_verified')->default(0);
            $table->string('profile_photo_path', 2048)->nullable();
            $table->ipAddress('last_login_ip')->nullable();
            $table->integer('hatchi_coins')->default(0);
            $table->timestamp('last_purchase')->nullable();
            $table->integer('total_purchases')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('birthday_date')->nullable();
            $table->unsignedBigInteger('subscription_level')->default(1)->nullable();
            $table->integer('permision_level')->default(0);
            $table->rememberToken();
            $table->timestamps();
            $table->foreignId('current_team_id')->nullable();

            $table->foreign('subscription_level')->references('id')->on('subscriptions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
