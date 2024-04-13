<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function dashboard()
    {
        // $categories = Category::all();

        // $categorieTops = Category::orderBy('id', 'desc')->paginate(4);

        // $oeuvreTops = Oeuvre::orderBy('id', 'desc')->paginate(3);

        $page = 'Dashboard';

        return view('admin.pages.dashboard')->with('page', $page);
    }
}
