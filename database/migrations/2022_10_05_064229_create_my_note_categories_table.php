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
        Schema::create('my_note_categories', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')
                ->unique();
            $table->string('name');
            $table->foreignId('note_category_id')
                ->nullable()
                ->constrained()
                ->onUpdate('set null')
                ->onDelete('set null');
            $table->foreignId('user_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('my_note_categories');
    }
};
