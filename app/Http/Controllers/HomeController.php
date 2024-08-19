<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData = ["title" => "Home Page - Store With Honey"];
        $viewData["products"] = Product::all();
        return view('home.index')->with("viewData", $viewData);
    }

    public function about()
    {
        $viewData = [];
        $viewData["title"] = "About Us - Online Stor for Bazarnichki-Medovichki";
        $viewData["subtitle"] = "About Us";
        $viewData["description"] = "This is about page ... ";
        $viewData["author"] = "Developed by: Kyrylo Papazov";
        return view('home.about')->with("viewData", $viewData);
    }
}
