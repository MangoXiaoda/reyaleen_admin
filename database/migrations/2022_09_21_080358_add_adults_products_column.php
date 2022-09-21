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
        // 成人产品表添加相关字段
        if (!Schema::hasColumn('adults_products', 'm_type')) {
            Schema::table('adults_products', function (Blueprint $table) {
                $table->tinyInteger('m_type')
                    ->after('manufacturer')
                    ->default(1)
                    ->comment('五点模板类型：1模板填充，2手动填写');

                $table->unsignedBigInteger('templates_category_id')
                    ->after('m_type')
                    ->nullable()
                    ->comment('模板分类id(当五点模板类型为1时，此字段有值)');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // 成人产品表回滚删除相关字段
        Schema::table('adults_products',function (Blueprint $table){
            $table->dropColumn('m_type');
            $table->dropColumn('templates_category_id');
        });
    }
};
