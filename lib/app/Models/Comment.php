<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'vp_comment'; // khai báo tên bảng
    protected $primaryKey = 'cmt_id'; // Khai báo khóa chính
    protected $guarded = []; // không có trường nào đc bảo vệ -> có thể tương tác với tất cả trường
    public function pro(){
        return $this->belongsTo('App\Models\Product');
    } 
}
