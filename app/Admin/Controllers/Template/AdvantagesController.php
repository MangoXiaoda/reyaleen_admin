<?php

namespace App\Admin\Controllers\Template;

use App\Models\AdvantagesTemplate;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Http\Controllers\AdminController;

class AdvantagesController extends AdminController
{
    protected $title = '模板内容';

    /**
     * 列表页
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(AdvantagesTemplate::with(['advantages_category']), function (Grid $grid) {

            $grid->model()->orderBy('templates_category_id', 'desc');

            $grid->column('advantages_category.name', '分类名称');

            $grid->column('content', '内容')->limit(50);

            $grid->column('updated_at');
        });
    }

    /**
     * 表单页
     * @return Form
     */
    protected function form()
    {
        return Form::make(new AdvantagesTemplate(), function (Form $form) {

            $form->display('id');

            $options_url = config('app.url') . '/api/advantages_template/get_list';
            $form->select('templates_category_id', '模板分类')
                ->options($options_url)->saving(function ($value){
                    if (!$value)
                        return 0;
                    return $value;
                });

            $form->textarea('content', '内容');

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
