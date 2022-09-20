<?php

namespace App\Admin\Controllers\Product;

use App\Admin\Extensions\ExcelExpoter;
use App\Models\AdultsProducts;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Http\Controllers\AdminController;

class AdultsProductController extends AdminController
{
    protected $title = '成人产品';

    /**
     * 列表页
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new AdultsProducts(), function (Grid $grid) {

            $grid->model()->orderBy('updated_at', 'desc');

            // 第一列显示 id字段，并将这一列设置为可排序列
            $grid->column('id', 'ID')->sortable();

            $grid->column('d_type', '主体')->display(function () {
                switch ($this->d_type) {
                    case 1:
                        $text = '父体';
                        break;
                    case 2:
                        $text = '子体';
                        break;
                    default:
                        $text = '未知';
                        break;
                }

                return $text;
            });

            $grid->column('main_image_url', '图片')->image('http://xxx.com', 200,200);

            $grid->column('item_name', '标题')->limit(40);

            $grid->column('standard_price', '价格');

            $grid->column('updated_at');

            $grid->export(new ExcelExpoter());
        });
    }

    /**
     * 表单页
     * @return Form
     */
    protected function form()
    {
        return Form::make(new AdultsProducts(), function (Form $form) {

            $form->display('id', 'ID');

            $form->hidden('d_type')->value(2);

            $form->text('item_sku', 'sku');

            $form->text('brand_name', '品牌名称')->default('Reyaleen');

            $form->hidden('external_product_id_type')->value('GTIN');

            $form->text('item_name', '标题');

            $form->text('generic_keywords1', '关键词');

            $form->text('color_name', '颜色');

            $form->number('standard_price', '价格')->min(0)->default(6499);

            $form->text('quantity', '数量')->default(15);

            $form->multipleImage('images', '产品图片')
                ->limit(9)
                ->accept('jpg,png,gif,jpeg')
                ->autoUpload()
                ->autoSave(false)//不自动保存，避免提交出错
                ->sortable()//排序
                ->retainable()//不删除服务器文件
                ->uniqueName()
                ->help('默认第一张图片会作为产品主图<br>警告！删除不会删除服务器文件！添加文件需要保存才生效')
                ->customFormat(function () {
                    $img_arr = [];

                    if ($this->swatch_image_url)
                        array_push($img_arr, $this->swatch_image_url);

                    if ($this->other_image_url1)
                        array_push($img_arr, $this->other_image_url1);

                    if ($this->other_image_url2)
                        array_push($img_arr, $this->other_image_url2);

                    if ($this->other_image_url3)
                        array_push($img_arr, $this->other_image_url3);

                    if ($this->other_image_url4)
                        array_push($img_arr, $this->other_image_url4);

                    if ($this->other_image_url5)
                        array_push($img_arr, $this->other_image_url5);

                    if ($this->other_image_url6)
                        array_push($img_arr, $this->other_image_url6);

                    if ($this->other_image_url7)
                        array_push($img_arr, $this->other_image_url7);

                    if ($this->other_image_url8)
                        array_push($img_arr, $this->other_image_url8);

                    return $img_arr;
                });

            $form->text('bullet_point1', '卖点一');

            $form->text('bullet_point2', '卖点二');

            $form->text('bullet_point3', '卖点三');

            $form->text('bullet_point4', '卖点四');

            $form->text('bullet_point5', '卖点五');

            $form->hidden('feed_product_type')->value('sexualstimulationdevice');

            $form->hidden('parent_child')->value('child');

            $form->hidden('relationship_type')->value('Variation');

            $form->hidden('variation_theme')->value('Color');

            $form->hidden('update_delete')->value('Update');

            $form->hidden('recommended_browse_nodes')->value('2132593051');

            $form->hidden('manufacturer')->value('Reyaleen');

            $form->hidden('website_shipping_weight')->value('1');

            $form->hidden('website_shipping_weight_unit_of_measure')->value('KG');

            $form->hidden('fulfillment_center_id')->value('DEFAULT');

            $form->hidden('country_of_origin')->value('中華人民共和国');

            $form->hidden('condition_type')->value('New');

            $form->hidden('fulfillment_latency')->value('5');

            $form->hidden('unit_count')->value('1');

            $form->hidden('unit_count_type')->value('個');

            $form->hidden('is_adult_product')->value('Yes');

            $form->hidden('is_expiration_dated_product')->value('No');

            // 相关补充字段
            $form->hidden('main_image_url');
            $form->hidden('swatch_image_url');
            $form->hidden('other_image_url1');
            $form->hidden('other_image_url2');
            $form->hidden('other_image_url3');
            $form->hidden('other_image_url4');
            $form->hidden('other_image_url5');
            $form->hidden('other_image_url6');
            $form->hidden('other_image_url7');
            $form->hidden('other_image_url8');
            $form->hidden('color_map');
            $form->hidden('product_description');

            $form->saving(function (Form $form) {
                $images = request('images');
                $img_arr = explode(',', $images);

                // 赋值相关产品图片
                $form->main_image_url = $img_arr[0] ?? '';
                $form->swatch_image_url = $img_arr[0] ?? '';
                $form->other_image_url1 = $img_arr[1] ?? '';
                $form->other_image_url2 = $img_arr[2] ?? '';
                $form->other_image_url3 = $img_arr[3] ?? '';
                $form->other_image_url4 = $img_arr[4] ?? '';
                $form->other_image_url5 = $img_arr[5] ?? '';
                $form->other_image_url6 = $img_arr[6] ?? '';
                $form->other_image_url7 = $img_arr[7] ?? '';
                $form->other_image_url8 = $img_arr[8] ?? '';

                $form->color_map = $form->color_name;
                $form->product_description = $form->bullet_point1.$form->bullet_point2.$form->bullet_point3.$form->bullet_point4.$form->bullet_point5;

                $parent_data = [
                    'feed_product_type' => $form->feed_product_type,
                    'item_sku' => $form->item_sku,
                    'brand_name' => $form->brand_name,
                    'item_name' => $form->item_name,
                    'external_product_id_type' => $form->external_product_id_type,
                    'parent_child' => 'parent',
                    'variation_theme' => $form->variation_theme,
                    'update_delete' => $form->update_delete,
                    'recommended_browse_nodes' => $form->recommended_browse_nodes,
                    'product_description' => $form->product_description,
                    'part_number' => $form->item_sku,
                    'manufacturer' => $form->brand_name,
                    'bullet_point1' => $form->bullet_point1,
                    'bullet_point2' => $form->bullet_point2,
                    'bullet_point3' => $form->bullet_point3,
                    'bullet_point4' => $form->bullet_point4,
                    'bullet_point5' => $form->bullet_point5,
                    'generic_keywords1' => $form->item_name,
                    'country_of_origin' => $form->country_of_origin,
                    'unit_count' => $form->unit_count,
                    'unit_count_type' => $form->unit_count_type,
                    'is_adult_product' => $form->is_adult_product,
                ];

                AdultsProducts::query()->create($parent_data);
            });

            //在表单提交前调用，在此事件中可以修改、删除用户提交的数据或者中断提交操作
            $form->submitted(function (Form $form) {
                // 删除用户提交的数据
                $form->deleteInput('images');
            });

            $form->footer(function ($footer) {

                // 去掉`重置`按钮
                $footer->disableReset();

                // 去掉`查看`checkbox
                $footer->disableViewCheck();

                // 去掉`继续编辑`checkbox
                $footer->disableEditingCheck();
            });
        });
    }
}
