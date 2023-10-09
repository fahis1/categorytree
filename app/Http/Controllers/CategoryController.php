<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCategoryTree()
    {
        $categories = Category::all();

        $tree = [];

        foreach ($categories as $category) {
            $tree[] = [
                'id' => $category->id,
                'parent' => $category->parent_id ?: '#',
                'text' => $category->name,

            ];
        }
        // dd($tree);
        return response()->json($tree);

        // return view('dashboard', ['categories' => $tree]);
    }
    // app/Http/Controllers/CategoryController.php
    public function getCategoryData($categoryId)
    {

        $category = Category::find($categoryId);

        if (!$category) {
            return response()->json(['error' => 'Category not found'], 404);
        }

        return response()->json($category);
    }
    public function addsub()
    {
        $attributes = request()->validate(
            [
                "name" => 'required|max:255',
                "parent_id" => 'required',
            ]
        );
        Category::create($attributes);
        return redirect('/');
    }
    public function seo()
    {
        $id = request('id');
        $title = request('Title');
        $desc = request('Description');
        $slug = request('slug');
        // dd($slug);
        if (request()->validate(
            [
                "Title" => 'required|max:255',
                "id" => 'required',
                "Description" => 'required',
                "slug" => 'required|max:255',
            ]
        )) {
            Category::where('id', $id)->update(['meta_title' => $title, 'meta_description' => $desc, 'slug' => $slug]);
            return redirect('/');
        } else {
            return redirect('/');
        }
    }

    public function update()
    {
        $id = request('id');
        $name = request('name');
        $searchable = request('searchable');
        $enabled = request('enable');
        if ($searchable == NULL) {
            $searchable = 0;
        }
        if ($enabled == NULL) {
            $enabled = 0;
        }
        // dd($searchable, $enabled);
        request()->validate(
            [
                "name" => 'required|max:255',
                "id" => 'required',

            ]
        );
        // dd($name, $id);
        Category::where('id', $id)->update(['name' => $name, 'searchable' => $searchable, 'enabled' => $enabled]);
        return redirect('/');
    }
    public function delete()
    {
        $id = request('id');
        $name = request('name');

        request()->validate(
            [
                "id" => 'required',
            ]
        );
        // dd($id);
        $category = Category::find($id);

        if ($category) {

            $hasChildCategories = Category::where('parent_id', $category->id)->exists();

            if ($hasChildCategories) {
            } else {
                Category::where('id', $id)->delete();
            }
        } else {
        }

        return redirect('/');
    }
    public function addroot()
    {
        $isparent = request('existing_parent_id');

        $id = request('id');
        $name = request('name');
        // dd($id); 
        request()->validate(
            [
                "name" => 'required|max:255',
                "parent_id" => '',
            ]
        );
        if ($isparent == 'null' && $id == 'null') {
            Category::create([
                'name' => $name,
                'slug' => $name,
                'parent_id' => NULL,
            ]);
            // Category::where('parent_id', $id)->update(['parent_id' => $newId]);
        } elseif ($isparent == '#') {
            Category::create([
                'name' => $name,
                'slug' => $name,

                'parent_id' => NULL,
            ]);
            $newId = Category::where('name', $name)->value('id');
            Category::where('id', $id)->update(['parent_id' => $newId]);
        } else {
            Category::create([
                'name' => $name,
                'slug' => $name,
                'parent_id' => $isparent,
            ]);
            $newId = Category::where('name', $name)->value('id');
            Category::where('id', $id)->update(['parent_id' => $newId]);
        }

        return redirect('/');
    }
}
