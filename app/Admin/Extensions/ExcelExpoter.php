<?php

namespace App\Admin\Extensions;

use Dcat\Admin\Grid\Exporters\AbstractExporter;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Facades\Excel;

class ExcelExpoter extends AbstractExporter implements WithMapping, WithHeadings, FromCollection
{
    use Exportable;
    protected $fileName = "成人模板数据导出";
    protected $titles = [];

    public function __construct($titles = [])
    {
        $this->fileName = $this->fileName.'_'.Str::random(6).'_'.date('Ymd', time()).'.xlsx'; // 拼接下载文件名称
        $this->titles = [
            [
                'feed_product_type' => 'TemplateType=fptcustom',
                'item_sku' => 'Version=2019.0110',
                'brand_name' => 'TemplateSignature=T1VURVJXRUFS',
                'item_name' => 'The top 3 rows are for Amazon.com use only. Do not modify or delete the top 3 rows.',
                'external_product_id_type' => '',
                'color_name' => '',
                'color_map' => '',
                'standard_price' => '',
                'quantity' => '',
                'main_image_url' => '',
                'swatch_image_url' => 'Images',
                'other_image_url1' => '',
                'other_image_url2' => '',
                'other_image_url3' => '',
                'other_image_url4' => '',
                'other_image_url5' => '',
                'other_image_url6' => '',
                'other_image_url7' => '',
                'other_image_url8' => '',
                'parent_child' => 'Variation',
                'parent_sku' => '',
                'relationship_type' => '',
                'variation_theme' => '',
                'update_delete' => 'Basic',
                'recommended_browse_nodes' => '',
                'product_description' => '',
                'part_number' => '',
                'manufacturer' => '',
                'bullet_point1' => 'Discovery',
                'bullet_point2' => '',
                'bullet_point3' => '',
                'bullet_point4' => '',
                'bullet_point5' => '',
                'generic_keywords1' => '',
                'website_shipping_weight' => 'Dimensions',
                'website_shipping_weight_unit_of_measure' => '',
                'fulfillment_center_id' => '',
                'country_of_origin' => '',
                'condition_type' => '',
                'fulfillment_latency' => '',
                'unit_count' => '',
                'unit_count_type' => '',
                'is_adult_product' => '',
                'is_expiration_dated_product' => '',
            ],
            [
                'feed_product_type' => 'Product Type',
                'item_sku' => 'Seller SKU',
                'brand_name' => 'Brand Name',
                'item_name' => 'Product Name',
                'external_product_id_type' => 'Product ID Type',
                'color_name' => 'Color',
                'color_map' => 'Color Map',
                'standard_price' => 'Standard Price',
                'quantity' => 'Quantity',
                'main_image_url' => 'Main Image URL',
                'swatch_image_url' => 'Swatch Image URL',
                'other_image_url1' => 'Other Image URL',
                'other_image_url2' => 'Other Image URL',
                'other_image_url3' => 'Other Image URL',
                'other_image_url4' => 'Other Image URL',
                'other_image_url5' => 'Other Image URL',
                'other_image_url6' => 'Other Image URL',
                'other_image_url7' => 'Other Image URL',
                'other_image_url8' => 'Other Image URL',
                'parent_child' => 'Parentage',
                'parent_sku' => 'Parent SKU',
                'relationship_type' => 'Relationship Type',
                'variation_theme' => 'Variation Theme',
                'update_delete' => 'Update Delete',
                'recommended_browse_nodes' => 'Recommended Browse Nodes',
                'product_description' => 'Product Description',
                'part_number' => 'Manufacturer Part Number',
                'manufacturer' => 'Manufacturer',
                'bullet_point1' => 'Key Product Features',
                'bullet_point2' => 'Key Product Features',
                'bullet_point3' => 'Key Product Features',
                'bullet_point4' => 'Key Product Features',
                'bullet_point5' => 'Key Product Features',
                'generic_keywords1' => 'Search Terms',
                'website_shipping_weight' => 'Shipping Weight',
                'website_shipping_weight_unit_of_measure' => 'Website Shipping Weight Unit Of Measure',
                'fulfillment_center_id' => 'Fulfillment Center ID',
                'country_of_origin' => 'Country/Region of Origin',
                'condition_type' => 'Condition Type',
                'fulfillment_latency' => 'Handling Time',
                'unit_count' => 'Unit Count',
                'unit_count_type' => 'Unit Count Type',
                'is_adult_product' => 'Adult Flag',
                'is_expiration_dated_product' => 'Is expiration dated product',
            ],
            [
                'feed_product_type' => 'feed_product_type',
                'item_sku' => 'item_sku',
                'brand_name' => 'brand_name',
                'item_name' => 'item_name',
                'external_product_id_type' => 'external_product_id_type',
                'color_name' => 'color_name',
                'color_map' => 'color_map',
                'standard_price' => 'standard_price',
                'quantity' => 'quantity',
                'main_image_url' => 'main_image_url',
                'swatch_image_url' => 'swatch_image_url',
                'other_image_url1' => 'other_image_url1',
                'other_image_url2' => 'other_image_url2',
                'other_image_url3' => 'other_image_url3',
                'other_image_url4' => 'other_image_url4',
                'other_image_url5' => 'other_image_url5',
                'other_image_url6' => 'other_image_url6',
                'other_image_url7' => 'other_image_url7',
                'other_image_url8' => 'other_image_url8',
                'parent_child' => 'parent_child',
                'parent_sku' => 'parent_sku',
                'relationship_type' => 'relationship_type',
                'variation_theme' => 'variation_theme',
                'update_delete' => 'update_delete',
                'recommended_browse_nodes' => 'recommended_browse_nodes',
                'product_description' => 'product_description',
                'part_number' => 'part_number',
                'manufacturer' => 'manufacturer',
                'bullet_point1' => 'bullet_point1',
                'bullet_point2' => 'bullet_point2',
                'bullet_point3' => 'bullet_point3',
                'bullet_point4' => 'bullet_point4',
                'bullet_point5' => 'bullet_point5',
                'generic_keywords1' => 'generic_keywords1',
                'website_shipping_weight' => 'website_shipping_weight',
                'website_shipping_weight_unit_of_measure' => 'website_shipping_weight_unit_of_measure',
                'fulfillment_center_id' => 'fulfillment_center_id',
                'country_of_origin' => 'country_of_origin',
                'condition_type' => 'condition_type',
                'fulfillment_latency' => 'fulfillment_latency',
                'unit_count' => 'unit_count',
                'unit_count_type' => 'unit_count_type',
                'is_adult_product' => 'is_adult_product',
                'is_expiration_dated_product' => 'is_expiration_dated_product',
            ]
        ];
    }

    public function export()
    {
        $this->download($this->fileName)->prepare(request())->send();
        exit;
    }

    public function collection()
    {
        // TODO: Implement collection() method.

        return collect($this->buildData());
    }

    public function headings(): array
    {
        // TODO: Implement headings() method.
        return $this->titles;
    }

    public function map($row): array
    {
        // TODO: Implement map() method.
        return [
            $row['feed_product_type'],
            $row['item_sku'],
            $row['brand_name'],
            $row['item_name'],
            $row['external_product_id_type'],
            $row['color_name'],
            $row['color_map'],
            $row['standard_price'],
            $row['quantity'],
            $row['main_image_url'],
            fileUrlToWebUrl($row['swatch_image_url']),
            fileUrlToWebUrl($row['other_image_url1']),
            fileUrlToWebUrl($row['other_image_url2']),
            fileUrlToWebUrl($row['other_image_url3']),
            fileUrlToWebUrl($row['other_image_url4']),
            fileUrlToWebUrl($row['other_image_url5']),
            fileUrlToWebUrl($row['other_image_url6']),
            fileUrlToWebUrl($row['other_image_url7']),
            fileUrlToWebUrl($row['other_image_url8']),
            $row['parent_child'],
            $row['parent_sku'],
            $row['relationship_type'],
            $row['variation_theme'],
            $row['update_delete'],
            $row['recommended_browse_nodes'],
            $row['product_description'],
            $row['part_number'],
            $row['manufacturer'],
            $row['bullet_point1'],
            $row['bullet_point2'],
            $row['bullet_point3'],
            $row['bullet_point4'],
            $row['bullet_point5'],
            $row['generic_keywords1'],
            $row['website_shipping_weight'],
            $row['website_shipping_weight_unit_of_measure'],
            $row['fulfillment_center_id'],
            $row['country_of_origin'],
            $row['condition_type'],
            $row['fulfillment_latency'],
            $row['unit_count'],
            $row['unit_count_type'],
            $row['is_adult_product'],
            $row['is_expiration_dated_product'],
        ];
    }

}
