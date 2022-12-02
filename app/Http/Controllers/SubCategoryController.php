<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{

    public function index()
    {
        $sub_categories = SubCategory::with('category')
            ->orderBy('created_at', 'DESC')
            ->paginate();
        return view('sub-categories.index', compact('sub_categories'));

    }

    public function create()
    {
        $categories = Category::orderBy('name', 'asc')->get();
        return view('sub-categories.form', compact('categories'));

    }

    public function store(Request $request)
    {
        $valid = $request->validate([
            'category_id' => ['required'],
            'name' => ['required', 'string', 'max:255', 'min:3'],
            'slug' => ['string', 'max:255'],
            'description' => ['string'],
            'status' => ['required', 'integer'],
            'popular' => ['required', 'integer'],
            'meta_title' => ['string', 'max:255'],
            'meta_description' => ['string', 'max:255'],
            'meta_keywords' => ['string', 'max:255'],
        ]);

        if (SubCategory::create($valid)) {
            return redirect()->route('sub-categories.index');
        }

    }

    public function show(SubCategory $subCategory)
    {
        //
    }

    public function edit(SubCategory $subCategory)
    {
        $categories = Category::orderBy('name', 'asc')->get();
        return view('sub-categories.form', compact('subCategory', 'categories'));

    }

    public function update(Request $request, SubCategory $subCategory)
    {
        $valid = $request->validate([
            'category_id' => ['required'],
            'name' => ['required', 'string', 'max:255', 'min:3'],
            'slug' => ['string', 'max:255'],
            'description' => ['string'],
            'status' => ['required', 'integer'],
            'popular' => ['required', 'integer'],
            'meta_title' => ['string', 'max:255'],
            'meta_description' => ['string', 'max:255'],
            'meta_keywords' => ['string', 'max:255'],
        ]);

        if ($subCategory->update($valid)) {
            return redirect()->route('sub-categories.index');
        }

    }

    public function destroy(SubCategory $subCategory)
    {
        if ($subCategory->delete()) {
            return redirect()->route('sub-categories.index');
        }

    }
}
