<?php

namespace App\Admin\Controllers\Product;

use App\Models\AdultsProducts;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Http\Controllers\AdminController;
use function Illuminate\Events\queueable;

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

            $form->text('item_sku', 'sku');

            $form->text('brand_name', '品牌名称')->default('Reyaleen');

            $form->hidden('external_product_id_type')->value('GTIN');

            $form->text('item_name', '标题');

            $form->text('color_name', '颜色');

            $form->number('standard_price', '价格')->min(0)->default(6499);

            $form->text('quantity', '数量')->default(15);

            $form->multipleImage('images', '产品图片')
                ->limit(6)
                ->accept('jpg,png,gif,jpeg')
                ->autoUpload()
                ->autoSave(false)//不自动保存，避免提交出错
                ->sortable()//排序
                ->retainable()//不删除服务器文件
                ->uniqueName()
                ->help('默认第一张图片会作为产品主图<br>警告！删除不会删除服务器文件！添加文件需要保存才生效');

            $form->saving(function (Form $form) {
                $images = request('images');
                $img_arr = explode(',', $images);

                $form->main_image_url = $img_arr[0] ?? '';
                $form->swatch_image_url = $img_arr[1] ?? '';

            });
        });
    }
}
