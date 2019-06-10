<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'vp_categories'; // khai báo tên bảng
    protected $primaryKey = 'cate_id'; // Khai báo khóa chính
    protected $guarded = []; // không có trường nào đc bảo vệ -> có thể tương tác với tất cả trường
}
