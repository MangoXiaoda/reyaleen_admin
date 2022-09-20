<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advantages_template_categories', function (Blueprint $table) {
            $table->id();

            $table->string('name')
                ->comment('模板分类名称');

            $table->timestamps();
            $table->comment('模板分类表');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('advantages_template_categories');
    }
};
