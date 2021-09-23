<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::with('parent')->get();
        
        return view('layouts.admin.modules.category.index', compact('categories'));
    }

    public function create()
    {
        $categoryParents = Category::get();

        return view('layouts.admin.modules.category.create', compact('categoryParents'));
    }

    public function store(StoreCategoryRequest $request)
    {
        $findParent = Category::find($request->parent_id);
        if ($findParent != null) {
            $parentId = $request->parent_id;
        } else {
            $message =
            __('validation.exists', ['attribute' => strtolower(__('admin.column.category.parent_directory'))]);

            return redirect()->back()->withErrors($message);
        }
        $cate = new Category();
        $cate->name = $request->name;
        $cate->slug = Str::slug($request->name);
        $cate->parent_id = $parentId;
        $cate->save();

        return redirect()->route('admin.category.index');
    }

    public function edit($id)
    {
        $category = Category::with('parent')->findOrFail($id);
        $categoryParents = Category::whereNotIn('id', (array)$id)->get();

        return view('layouts.admin.modules.category.edit', compact('category', 'categoryParents'));
    }

    public function update(UpdateCategoryRequest $request, $id)
    {
        $findParent = Category::find($request->parent_id);
        if ($findParent != null) {
            $parentId = $request->parent_id;
        } else {
            $message =
            __('validation.exists', ['attribute' => strtolower(__('admin.column.category.parent_directory'))]);

            return redirect()->back()->withErrors($message);
        }
        $cate = Category::findOrFail($id);
        $cate->name = $request->name;
        $cate->slug = Str::slug($request->name);
        $cate->parent_id = $parentId;
        $cate->save();
        
        return redirect()->route('admin.category.index');
    }

    public function delete($id)
    {
        Category::where('id', $id)->delete();

        return redirect()->route('admin.category.index');
    }
}
