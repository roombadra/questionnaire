<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionnairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionnaires', function (Blueprint $table) {
            $table->id();
            $table->string('agent');
            $table->string('commune');
            $table->string('q_1');
            $table->float('q_2');
            $table->string('q_3');
            $table->string('q_4');
            $table->string('q_5');
            $table->string('q_6');
            $table->string('q_7');
            $table->string('q_8');
            $table->string('q_9');
            $table->string('q_10');
            $table->string('q_11');
            $table->string('q_12');
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
        Schema::dropIfExists('questionnaires');
    }
}
