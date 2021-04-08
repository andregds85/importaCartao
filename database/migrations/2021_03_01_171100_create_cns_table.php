<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCnsTable extends Migration
{
    
    public function up()
    {
        Schema::create('cns', function (Blueprint $table) {
            $table->id();
            $table->string('cns');
            $table->timestamps();
        });
    }

        public function down()
        {
         Schema::dropIfExists('cns');
        }

        

}
