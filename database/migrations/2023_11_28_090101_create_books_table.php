<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('cim');
            $table->integer('kiadasEv');
            $table->foreignId('iro')->references('id')->on('forms');//átalakítás writerre majd
            $table->timestamps();
        });

        DB::table('books')->insert([
            ['cim'=> 'Proba Cím', 'iro'=> 1,'kiadasEv'=> '2010'],
            ['cim'=> 'Könyv cím', 'iro'=> 1,'kiadasEv'=> '2020'],            
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
