<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdultsProducts extends Model
{
    use HasFactory;
    use SoftDeletes; // 启用软删除

    protected $table = 'adults_products';
    protected $primaryKey = 'id';

    protected $hidden = [
        'deleted_at'
    ];

}
