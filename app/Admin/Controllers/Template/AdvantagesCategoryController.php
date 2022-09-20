<?php

namespace App\Admin\Controllers\Template;

use App\Models\AdvantagesTemplateCategory;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Http\Controllers\AdminController;

class AdvantagesCategoryController extends AdminController
{
    protected $title = '模板分类';

    /**
     * 列表页
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new AdvantagesTemplateCategory(), function (Grid $grid) {

            $grid->model()->orderBy('updated_at', 'desc');

            // 第一列显示 id字段，并将这一列设置为可排序列
            $grid->column('id', 'ID')->sortable();

            $grid->column('name', '分类名称');

            $grid->column('updated_at');
        });
    }

    /**
     * 表单页
     * @return Form
     */
    protected function form()
    {
        return Form::make(new AdvantagesTemplateCategory(), function (Form $form) {

            $form->display('id', 'ID');

            $form->text('name', '分类名称');

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
