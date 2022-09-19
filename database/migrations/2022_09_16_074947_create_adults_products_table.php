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
        Schema::create('adults_products', function (Blueprint $table) {
            $table->id();

            $table->tinyInteger('d_type')
                ->default(1)
                ->comment('数据类型：1父，2子');

            $table->string('feed_product_type')
                ->nullable();

            $table->string('item_sku')
                ->nullable();

            $table->string('brand_name')
                ->nullable();

            $table->string('item_name')
                ->nullable();

            $table->string('external_product_id')
                ->nullable();

            $table->string('external_product_id_type')
                ->nullable();

            $table->string('color_name')
                ->nullable();

            $table->string('color_map')
                ->nullable();

            $table->string('standard_price')
                ->nullable();

            $table->string('quantity')
                ->nullable();

            $table->string('main_image_url')
                ->nullable();

            $table->string('swatch_image_url')
                ->nullable();

            $table->string('other_image_url1')
                ->nullable();

            $table->string('other_image_url2')
                ->nullable();

            $table->string('other_image_url3')
                ->nullable();

            $table->string('other_image_url4')
                ->nullable();

            $table->string('other_image_url5')
                ->nullable();

            $table->string('other_image_url6')
                ->nullable();

            $table->string('other_image_url7')
                ->nullable();

            $table->string('other_image_url8')
                ->nullable();

            $table->string('parent_child')
                ->nullable();

            $table->string('parent_sku')
                ->nullable();

            $table->string('relationship_type')
                ->nullable();

            $table->string('variation_theme')
                ->nullable();

            $table->string('update_delete')
                ->nullable();

            $table->string('recommended_browse_nodes')
                ->nullable();

            $table->text('product_description')
                ->nullable();

            $table->string('part_number')
                ->nullable();

            $table->string('manufacturer')
                ->nullable();

            $table->string('bullet_point1')
                ->nullable();

            $table->string('bullet_point2')
                ->nullable();

            $table->string('bullet_point3')
                ->nullable();

            $table->string('bullet_point4')
                ->nullable();

            $table->string('bullet_point5')
                ->nullable();

            $table->string('generic_keywords1')
                ->nullable();

            $table->string('generic_keywords2')
                ->nullable();

            $table->string('generic_keywords3')
                ->nullable();

            $table->string('generic_keywords4')
                ->nullable();

            $table->string('generic_keywords5')
                ->nullable();

            $table->string('website_shipping_weight')
                ->nullable();

            $table->string('website_shipping_weight_unit_of_measure')
                ->nullable();

            $table->string('fulfillment_center_id')
                ->nullable();

            $table->string('country_of_origin')
                ->nullable();

            $table->string('battery_weight')
                ->nullable();;

            $table->string('condition_type')
                ->nullable();

            $table->string('fulfillment_latency')
                ->nullable();

            $table->string('unit_count')
                ->nullable();

            $table->string('unit_count_type')
                ->nullable();

            $table->string('is_adult_product')
                ->nullable();

            $table->string('is_expiration_dated_product')
                ->nullable();

            $table->softDeletes()->comment('删除时间:有值表示已删除');
            $table->timestamps();
            $table->comment('成人产品表');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adults_products');
    }
};
