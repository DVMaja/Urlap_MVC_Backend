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
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('nev');
            $table->integer('szul_ev');
            //$table->timestamps();
        });

        DB::table('forms')->insert([
            ['nev'=> 'Proba Ákos','szul_ev'=> '2000'],
            ['nev'=> 'Proba Ági','szul_ev'=> '1999'],
            ['nev'=> 'Törlendő Tibi','szul_ev'=> '1999'],
            ['nev'=> 'Megváltoztatandó Mária','szul_ev'=> '1999'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
