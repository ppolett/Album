<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Nette\Utils\Image;

class GaleriaController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $images = Image::all();
        $sortedImage = [];

        foreach ($categories as $category){
            $sortedImage[$category['id']] = [];
        }

        foreach ($images as $image){
            $sortedImage[$image['categoryId']][] = $image['url'];
        }
        return view("galeria.index")->with("categories", $categories)->with("images", $sortedImage);
    }

    public function create()
    {
        return view("galeria.create")->with("categories", Category::all()->pluck("name", "id"));
    }

    public function store(StoreGaleriaRequest $request)
    {
        $data = $request->validated();
        $category = Category::where("id", "=", $data["category"]);
        if($category === null)
        {
            abort(404, "Category not found");
        }
        $filename = $data["image"]->store("images");
        $img = Images::create([
            "url" => $filename,
            "categoryId" => $data["category"]
        ]);
        return back();
    }
}
