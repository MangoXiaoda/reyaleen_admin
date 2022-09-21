<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class AdvantagesTemplate extends Model
{
    use HasFactory;

    protected $table = 'advantages_templates';
    protected $primaryKey = 'id';

    /**
     * 模板内容表 与 模板分类多对一关联
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function advantages_category()
    {
        return $this->belongsTo(AdvantagesTemplateCategory::class, 'templates_category_id', 'id');
    }

}
