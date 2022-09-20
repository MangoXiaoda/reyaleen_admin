<?php

namespace App\Admin\Controllers\Template;

use App\Models\AdvantagesTemplate;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Http\Controllers\AdminController;

class AdvantagesController extends AdminController
{
    protected $title = '模板内容';


    protected function grid()
    {
        return Grid::make(new AdvantagesTemplate(), function (Grid $grid) {


        });
    }


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

        });
    }

}
