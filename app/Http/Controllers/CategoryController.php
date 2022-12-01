<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::latest()->paginate();
        return view('categories.index', compact('categories'));

    }

    public function create()
    {
        return view('categories.form');

    }

    public function store(Request $request)
    {
        $valid = $request->validate([
            'name' => ['required', 'string', 'max:255', 'min:3'],
            'slug' => ['string', 'max:255'],
            'description' => ['string'],
            'status' => ['required', 'integer'],
            'popular' => ['required', 'integer'],
            'meta_title' => ['string', 'max:255'],
            'meta_description' => ['string', 'max:255'],
            'meta_keywords' => ['string', 'max:255'],
        ]);

        if (Category::create($valid)) {
            return redirect()->route('categories.index');
        }

    }

    public function show(Category $category)
    {
        //
    }

    public function edit(Category $category)
    {
        return view('categories.form', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $valid = $request->validate([
            'name' => ['required', 'string', 'max:255', 'min:3'],
            'slug' => ['string', 'max:255'],
            'description' => ['text'],
            'status' => ['required', 'integer'],
            'popular' => ['required', 'integer'],
            'meta_title' => ['string', 'max:255'],
            'meta_description' => ['string', 'max:255'],
            'meta_keywords' => ['string', 'max:255'],
        ]);

        if ($category->update($valid)) {
            return redirect()->route('categories.index');
        }

    }

    public function destroy(Category $category)
    {
        if ($category->delete()) {
            return redirect()->route('categories.index');
        }

    }
}
