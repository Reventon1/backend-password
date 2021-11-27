<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasswordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passwords', function (Blueprint $table) {
            $table->id()->comment('уникальный номер');
            $table->text('password_hash')->nullable()->comment('хэш пароля');
            $table->integer('count_symbols')->nullable()->comment('кол-во символов');
            $table->text('variant_symbols')->nullable()->comment('кол-во вариантов');
            $table->dateTime('created_at')->comment('время создания');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('passwords');
    }
}
