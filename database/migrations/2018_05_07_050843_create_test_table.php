<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Kalnoy\Nestedset\NestedSet;

class CreateTestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('table', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->string('airline');
        $table->timestamps();
        NestedSet::columns($table);
      });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('table', function (Blueprint $table) {
        NestedSet::dropColumns($table);
      });
    }
}
