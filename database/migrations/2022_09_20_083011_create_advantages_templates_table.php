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
        Schema::create('advantages_templates', function (Blueprint $table) {
            $table->id();

            $table->tinyInteger('templates_category_id')
                ->default(1)
                ->comment('模板分类id：1跳蛋,2振动棒,3吮吸器(待完善...)');

            $table->text('content')
                ->nullable()
                ->comment('内容');

            $table->timestamps();
            $table->comment('模板内容表');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('advantages_templates');
    }
};
