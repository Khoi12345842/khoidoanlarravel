<?php
namespace App\Http\Controllers;

use App\Models\HorMenu;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function productCategory($category)
    {
        // Lấy danh sách sản phẩm thuộc danh mục
        $items = Product::where('category', $category)
            ->where('active', true)
            ->get();

        // Lấy danh sách menu để hiển thị trong header
        $menus = HorMenu::whereNull('parent_id')
            ->with('children')
            ->orderBy('no', 'asc')
            ->get();

        // Trả về view tương ứng với danh mục
        return view('frontend.products.category', compact('category', 'items', 'menus'));
    }
    public function index()
{
    $products = Product::all();
    return view('admin.products.index', compact('products'));
}

public function create()
{
    return view('admin.products.create');
}

public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'category' => 'required|string|max:255',
        'description' => 'nullable|string',
        'price' => 'required|numeric|min:0',
        'image' => 'nullable|string',
        'active' => 'required|boolean',
    ]);

    Product::create($request->all());

    return redirect()->route('admin.products.index')->with('success', 'Product created successfully.');
}

public function edit(Product $product)
{
    return view('admin.products.edit', compact('product'));
}

public function update(Request $request, Product $product)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'category' => 'required|string|max:255',
        'description' => 'nullable|string',
        'price' => 'required|numeric|min:0',
        'image' => 'nullable|string',
        'active' => 'required|boolean',
    ]);

    $product->update($request->all());

    return redirect()->route('admin.products.index')->with('success', 'Product updated successfully.');
}

public function destroy(Product $product)
{
    $product->delete();
    return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully.');
}
}