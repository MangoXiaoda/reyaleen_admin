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
        Schema::create('products', function (Blueprint $table) {
            $table->id();

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

            $table->string('item_type')
                ->nullable();

            $table->string('outer_material_type1')
                ->nullable();

            $table->string('outer_material_type2')
                ->nullable();

            $table->string('outer_material_type3')
                ->nullable();

            $table->string('outer_material_type4')
                ->nullable();

            $table->string('outer_material_type5')
                ->nullable();

            $table->string('color_name')
                ->nullable();

            $table->string('color_map')
                ->nullable();

            $table->string('size_name')
                ->nullable();

            $table->string('department_name')
                ->nullable();

            $table->string('size_map')
                ->nullable();

            $table->string('standard_price')
                ->nullable();

            $table->string('quantity')
                ->nullable();

            $table->string('main_image_url')
                ->nullable();

            $table->string('material_composition1')
                ->nullable();

            $table->string('material_composition2')
                ->nullable();

            $table->string('material_composition3')
                ->nullable();

            $table->string('material_composition4')
                ->nullable();

            $table->string('material_composition5')
                ->nullable();

            $table->string('material_composition6')
                ->nullable();

            $table->string('material_composition7')
                ->nullable();

            $table->string('material_composition8')
                ->nullable();

            $table->string('material_composition9')
                ->nullable();

            $table->string('material_composition10')
                ->nullable();

            $table->string('hard_disk_size_unit_of_measure1')
                ->nullable();

            $table->string('computer_cpu_speed')
                ->nullable();

            $table->string('computer_cpu_type')
                ->nullable();

            $table->string('hardware_platform')
                ->nullable();

            $table->string('computer_cpu_manufacturer')
                ->nullable();

            $table->string('operating_system')
                ->nullable();

            $table->string('bbfc_rating')
                ->nullable();

            $table->string('binding')
                ->nullable();

            $table->string('metal_type')
                ->nullable();

            $table->string('setting_type')
                ->nullable();

            $table->string('gem_type')
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

            $table->string('product_description')
                ->nullable();

            $table->string('closure_type')
                ->nullable();

            $table->string('model')
                ->nullable();

            $table->string('inner_material_type1')
                ->nullable();

            $table->string('inner_material_type2')
                ->nullable();

            $table->string('inner_material_type3')
                ->nullable();

            $table->string('inner_material_type4')
                ->nullable();

            $table->string('inner_material_type5')
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

            $table->string('fit_type')
                ->nullable();

            $table->string('country_as_labeled')
                ->nullable();

            $table->string('sport_type')
                ->nullable();

            $table->string('theme')
                ->nullable();

            $table->string('top_style')
                ->nullable();

            $table->string('water_resistance_level')
                ->nullable();

            $table->string('fabric_wash')
                ->nullable();

            $table->string('neck_size')
                ->nullable();

            $table->string('neck_size_unit_of_measure')
                ->nullable();

            $table->string('neck_style')
                ->nullable();

            $table->string('sleeve_length')
                ->nullable();

            $table->string('sleeve_length_unit_of_measure')
                ->nullable();

            $table->string('sleeve_type')
                ->nullable();

            $table->string('special_features1')
                ->nullable();

            $table->string('special_features2')
                ->nullable();

            $table->string('special_features3')
                ->nullable();

            $table->string('special_features4')
                ->nullable();

            $table->string('special_features5')
                ->nullable();

            $table->string('style_name')
                ->nullable();

            $table->string('material_type')
                ->nullable();

            $table->string('website_shipping_weight')
                ->nullable();

            $table->string('website_shipping_weight_unit_of_measure')
                ->nullable();

            $table->string('item_length')
                ->nullable();

            $table->string('item_width')
                ->nullable();

            $table->string('item_height')
                ->nullable();

            $table->string('item_dimensions_unit_of_measure')
                ->nullable();

            $table->string('fulfillment_center_id')
                ->nullable();

            $table->string('package_height')
                ->nullable();

            $table->string('package_width')
                ->nullable();

            $table->string('package_length')
                ->nullable();

            $table->string('package_weight')
                ->nullable();

            $table->string('package_weight_unit_of_measure')
                ->nullable();

            $table->string('package_dimensions_unit_of_measure')
                ->nullable();

            $table->string('cpsia_cautionary_statement')
                ->nullable();

            $table->string('cpsia_cautionary_description')
                ->nullable();

            $table->string('fabric_type')
                ->nullable();

            $table->string('import_designation')
                ->nullable();

            $table->string('item_weight_unit_of_measure')
                ->nullable();

            $table->string('item_weight')
                ->nullable();

            $table->string('country_of_origin')
                ->nullable();

            $table->string('batteries_required')
                ->nullable();

            $table->string('are_batteries_included')
                ->nullable();

            $table->string('battery_cell_composition')
                ->nullable();

            $table->string('battery_type1')
                ->nullable();

            $table->string('battery_type2')
                ->nullable();

            $table->string('battery_type3')
                ->nullable();

            $table->string('number_of_batteries1')
                ->nullable();

            $table->string('number_of_batteries2')
                ->nullable();

            $table->string('number_of_batteries3')
                ->nullable();

            $table->string('battery_weight')
                ->nullable();

            $table->string('battery_weight_unit_of_measure')
                ->nullable();

            $table->string('number_of_lithium_metal_cells')
                ->nullable();

            $table->string('number_of_lithium_ion_cells')
                ->nullable();

            $table->string('lithium_battery_packaging')
                ->nullable();

            $table->string('lithium_battery_energy_content')
                ->nullable();

            $table->string('lithium_battery_energy_content_unit_of_measure')
                ->nullable();

            $table->string('lithium_battery_weight')
                ->nullable();

            $table->string('lithium_battery_weight_unit_of_measure')
                ->nullable();

            $table->string('supplier_declared_dg_hz_regulation1')
                ->nullable();

            $table->string('supplier_declared_dg_hz_regulation2')
                ->nullable();

            $table->string('supplier_declared_dg_hz_regulation3')
                ->nullable();

            $table->string('supplier_declared_dg_hz_regulation4')
                ->nullable();

            $table->string('supplier_declared_dg_hz_regulation5')
                ->nullable();

            $table->string('hazmat_united_nations_regulatory_id')
                ->nullable();

            $table->string('safety_data_sheet_url')
                ->nullable();

            $table->string('item_volume')
                ->nullable();

            $table->string('item_volume_unit_of_measure')
                ->nullable();

            $table->string('flash_point')
                ->nullable();

            $table->string('ghs_classification_class1')
                ->nullable();

            $table->string('ghs_classification_class2')
                ->nullable();

            $table->string('ghs_classification_class3')
                ->nullable();

            $table->string('california_proposition_65_compliance_type')
                ->nullable();

            $table->string('california_proposition_65_chemical_names1')
                ->nullable();

            $table->string('california_proposition_65_chemical_names2')
                ->nullable();

            $table->string('california_proposition_65_chemical_names3')
                ->nullable();

            $table->string('california_proposition_65_chemical_names4')
                ->nullable();

            $table->string('california_proposition_65_chemical_names5')
                ->nullable();

            $table->string('list_price')
                ->nullable();

            $table->string('condition_type')
                ->nullable();

            $table->string('product_tax_code')
                ->nullable();

            $table->string('fulfillment_latency')
                ->nullable();

            $table->string('product_site_launch_date')
                ->nullable();

            $table->string('merchant_release_date')
                ->nullable();

            $table->string('restock_date')
                ->nullable();

            $table->string('sale_price')
                ->nullable();

            $table->string('sale_from_date')
                ->nullable();

            $table->string('sale_end_date')
                ->nullable();

            $table->string('offering_end_date')
                ->nullable();

            $table->string('max_aggregate_ship_quantity')
                ->nullable();

            $table->string('item_package_quantity')
                ->nullable();

            $table->string('number_of_items')
                ->nullable();

            $table->string('offering_can_be_gift_messaged')
                ->nullable();

            $table->string('offering_can_be_giftwrapped')
                ->nullable();

            $table->string('is_discontinued_by_manufacturer')
                ->nullable();

            $table->string('max_order_quantity')
                ->nullable();

            $table->string('merchant_shipping_group_name')
                ->nullable();

            $table->string('offering_start_date')
                ->nullable();

            $table->string('bottom_style')
                ->nullable();

            $table->string('collar_style')
                ->nullable();

            $table->string('control_type')
                ->nullable();

            $table->string('pattern_type')
                ->nullable();

            $table->string('pocket_description')
                ->nullable();

            $table->string('special_size_type')
                ->nullable();

            $table->string('unit_count')
                ->nullable();

            $table->string('unit_count_type')
                ->nullable();

            $table->string('season')
                ->nullable();

            $table->string('target_gender')
                ->nullable();

            $table->string('is_adult_product')
                ->nullable();

            $table->string('footwear_size_system')
                ->nullable();

            $table->string('footwear_age_group')
                ->nullable();

            $table->string('footwear_size_class')
                ->nullable();

            $table->string('footwear_width')
                ->nullable();

            $table->string('footwear_size')
                ->nullable();

            $table->string('age_range_description')
                ->nullable();

            $table->string('is_expiration_dated_product')
                ->nullable();

            $table->string('apparel_size')
                ->nullable();

            $table->string('item_form')
                ->nullable();

            $table->string('net_content_length_unit_of_measure')
                ->nullable();

            $table->string('net_content_count_unit_of_measure')
                ->nullable();

            $table->string('net_content_volume_unit_of_measure')
                ->nullable();

            $table->string('net_content_count')
                ->nullable();

            $table->string('net_content_area')
                ->nullable();

            $table->string('net_content_weight')
                ->nullable();

            $table->string('item_sku')
                ->nullable();

            $table->string('item_sku')
                ->nullable();

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
        Schema::dropIfExists('products');
    }
};
