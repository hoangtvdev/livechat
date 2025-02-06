<?php

use App\Models\Admin;
use App\Models\Message;
use App\Models\User;
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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->string('guest_id', Message::GUEST_ID_LENGTH)->index('guest_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on((new User())->getTable());
            $table->unsignedBigInteger('sale_id');
            $table->foreign('sale_id')->references('id')->on((new Admin())->getTable());
            $table->tinyInteger('status')->default(Message::ACTIVE_MESSAGE);
            $table->text('content');
            $table->timestamp('read_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
