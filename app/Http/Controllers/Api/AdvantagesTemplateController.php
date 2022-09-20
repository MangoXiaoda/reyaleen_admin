<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AdvantagesTemplateCategory;
use Illuminate\Http\Request;

class AdvantagesTemplateController extends Controller
{

    /**
     * 获取模板分类数据
     * @return array
     */
    public function getTemplateCategoryList()
    {
        $list = AdvantagesTemplateCategory::query()
            ->select('id', 'name as text')
            ->get()
            ->toArray();

        return $list;
    }

}
