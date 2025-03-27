<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HorMenu extends Model
{
    protected $table = 'hor_menus';

    protected $fillable = [
        'title',
        'mtype',
        'relate_id',
        'parent_id',
        'no',
        'new_tab',
        'active',
        'router',
        'params',
    ];

    // Quan hệ đệ quy để lấy menu con
    public function children()
    {
        return $this->hasMany(HorMenu::class, 'parent_id', 'id')
            ->where('active', 1)
            ->orderBy('no', 'asc');
    }

    // Lấy menu cha
    public function parent()
    {
        return $this->belongsTo(HorMenu::class, 'parent_id');
    }
    protected $casts = [
        'params' => 'array',
    ];
}