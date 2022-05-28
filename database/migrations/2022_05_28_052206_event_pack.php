<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_pack', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('pack_id')
                ->nullable()
                ->constrained('packs')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('event_id')
                ->nullable()
                ->constrained('events')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_pack');
    }
};