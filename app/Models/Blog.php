<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'slug',
        'category_id',
        'admin_id',
        'thumb',
        'image',
        'status',
    ];
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
