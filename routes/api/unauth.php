<?php
use App\Http\Controllers\Api\AdvantagesTemplateController;

Route::get('advantages_template/get_list',[AdvantagesTemplateController::class, 'getTemplateCategoryList'])->name('api.advantages_template.get_list');
