<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateGenericsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generics', function (Blueprint $table) {
            $table->id();
            $table->string('name_ru');
            $table->string('name_eng');
            $table->string('short_name');
        });

        DB::table('generics')->insert([
            ['name_ru' => 'Мужчинам', 'name_eng' => 'men', 'short_name' => 'M'],
            ['name_ru' => 'Женщинам', 'name_eng' => 'women', 'short_name' => 'W'],
            ['name_ru' => 'Детям', 'name_eng' => 'kids', 'short_name' => 'K']
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('generics');
    }
}
