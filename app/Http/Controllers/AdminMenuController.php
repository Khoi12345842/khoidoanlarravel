<?php

namespace App\Http\Controllers;

use App\Models\HorMenu;
use Illuminate\Http\Request;

class AdminMenuController extends Controller
{
    // Hiển thị danh sách menu
    public function index()
    {
        $menus = HorMenu::whereNull('parent_id')
            ->with('children')
            ->orderBy('no', 'asc')
            ->get();
        return view('admin.menus.index', compact('menus'));
    }

    // Hiển thị form tạo menu mới
    public function create()
    {
        $parentMenus = HorMenu::whereNull('parent_id')->get();
        return view('admin.menus.create', compact('parentMenus'));
    }

    // Lưu menu mới
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'link' => 'required|string|max:300',
            'mtype' => 'required|in:1,2,3',
            'new_tab' => 'required|boolean',
            'no' => 'required|integer',
            'parent_id' => 'nullable|exists:hor_menus,id',
            'relate_id' => 'required|integer',
            'active' => 'required|boolean',
        ]);

        HorMenu::create($request->all());

        return redirect()->route('admin.menus.index')->with('success', 'Menu created successfully.');
    }

    // Hiển thị form chỉnh sửa menu
    public function edit(HorMenu $menu)
    {
        $parentMenus = HorMenu::whereNull('parent_id')->where('id', '!=', $menu->id)->get();
        return view('admin.menus.edit', compact('menu', 'parentMenus'));
    }

    // Cập nhật menu
    public function update(Request $request, HorMenu $menu)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'link' => 'required|string|max:300',
            'mtype' => 'required|in:1,2,3',
            'new_tab' => 'required|boolean',
            'no' => 'required|integer',
            'parent_id' => 'nullable|exists:hor_menus,id',
            'relate_id' => 'required|integer',
            'active' => 'required|boolean',
        ]);

        $menu->update($request->all());

        return redirect()->route('admin.menus.index')->with('success', 'Menu updated successfully.');
    }

    // Xóa menu
    public function destroy(HorMenu $menu)
    {
        $menu->delete();
        return redirect()->route('admin.menus.index')->with('success', 'Menu deleted successfully.');
    }
}