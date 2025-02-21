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
        Schema::create('movie_lists', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('category');
            $table->string('year');
            $table->string('rated')->nullable();
            $table->string('released')->nullable();
            $table->string('run_time')->nullable();
            $table->string('genre')->nullable();
            $table->string('director')->nullable();
            $table->string('writer')->nullable();
            $table->string('actors')->nullable();
            $table->text('plot')->nullable();
            $table->string('language')->nullable();
            $table->string('country')->nullable();
            $table->string('awards')->nullable();
            $table->string('poster')->nullable();  
            $table->string('ratings');
            $table->string('metascore')->nullable();            
            $table->string('imdb_rating');
            $table->string('imdb_votes')->nullable();
            $table->string('imdb_id');
            $table->string('type');
            $table->string('dvd')->nullable();
            $table->string('box_office')->nullable();
            $table->string('production')->nullable();
            $table->string('website')->nullable();
            $table->string('slug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movie_lists');
    }
};


