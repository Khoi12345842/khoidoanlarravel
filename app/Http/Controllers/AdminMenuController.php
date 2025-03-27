<?php

namespace App\Http\Controllers;
use App\Models\HorMenu;
use Illuminate\Http\Request;

class AdminMenuController extends Controller
{

    
    public function warehouse()
    {
        $menus = HorMenu::whereNull('parent_id')
            ->with('children')
            ->orderBy('no', 'asc')
            ->get();
        return view('frontend.warehouse', compact('menus'));
    }
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
            'mtype' => 'required|in:1,2,3',
            'new_tab' => 'required|boolean',
            'no' => 'required|integer',
            'parent_id' => 'nullable|exists:hor_menus,id',
            'relate_id' => 'required|integer',
            'active' => 'required|boolean',
            'router' => 'nullable|string',
            'params' => 'nullable|json',
        ]);
        if (isset($data['params'])) {
            $data['params'] = json_decode($data['params'], true);
            $data['params'] = json_encode($data['params']);
        }
        

        HorMenu::create($request->only(['title', 'mtype', 'new_tab', 'no', 'parent_id', 'relate_id', 'active', 'router', 'params']));

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
            'mtype' => 'required|in:1,2,3',
            'new_tab' => 'required|boolean',
            'no' => 'required|integer',
            'parent_id' => 'nullable|exists:hor_menus,id',
            'relate_id' => 'required|integer',
            'active' => 'required|boolean',
            'router' => 'nullable|string',
            'params' => 'nullable|json',
        ]);
        if (isset($data['params'])) {
            $data['params'] = json_decode($data['params'], true);
            $data['params'] = json_encode($data['params']);
        }
        $menu->update($request->only(['title', 'mtype', 'new_tab', 'no', 'parent_id', 'relate_id', 'active', 'router', 'params']));

        return redirect()->route('admin.menus.index')->with('success', 'Menu updated successfully.');
    }

    // Xóa menu
    public function destroy(HorMenu $menu)
    {

        if ($menu->children()->count() > 0) {
            return redirect()->route('admin.menus.index')->with('error', 'Menu cannot be deleted because it has child menus.');
        }
        
        $menu->delete();
        return redirect()->route('admin.menus.index')->with('success', 'Menu deleted successfully.');
    }
}