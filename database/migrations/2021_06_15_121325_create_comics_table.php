<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('series', 50);
            $table->smallInteger('number');
            $table->string('title', 100);
            $table->text('description')->nullable();
            $table->float('price', 6, 2);
            $table->smallInteger('pages');
            $table->date('release_date');
            $table->string('pic', 500)->default('https://shop.sergiobonelli.it/resizer/1000/-1/true/1596632385913.png--gog_e_magog___martin_mystere_bimestrale_371_cover.png?1596632386000');

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
        Schema::dropIfExists('comics');
    }
}
