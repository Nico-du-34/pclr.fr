<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutosTable extends Migration
{
    public function up()
    {
        Schema::create('autos', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['Voiture', 'Moto', 'Avion', 'Bateau'])->nullable(false);
            $table->unsignedBigInteger('categorie_id');
            $table->string('name', 30)->nullable(false);
            $table->string('label', 100)->nullable(false);
            $table->decimal('prix', 10, 2)->nullable(false);
            $table->enum('disponibilite', ['en_stock', 'hors_stock'])->nullable(false);
            $table->string('image_url', 255)->default('https://i.imgur.com/2w5Rzku.jpg');
            $table->timestamps();

            $table->foreign('categorie_id')->references('id')->on('categories');
        });
    }

    public function down()
    {
        Schema::dropIfExists('autos');
    }
};