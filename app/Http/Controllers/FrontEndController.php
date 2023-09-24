<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About_slide;
use App\Models\Client;
use App\Models\Home;
use App\Models\Slide;
use App\Models\Service;
use App\Models\Sub_brand;
use App\Models\Brand;
use App\Models\Menu;
use App\Models\Kategori_brand;
use App\Models\Content;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About_slide::all();
        $client = Client::all();
        $home = Home::all();
        $slide = Slide::all();
        $service = Service::all();
        $subbrand = Sub_brand::all();
        $menu = Menu::all();

        return view('pages.home', compact(
            'about',
            'client',
            'home',
            'slide',
            'service',
            'subbrand',
            'menu'
        ));
    }

    public function about()
    {
        $about = About_slide::all();
        $subbrand = Sub_brand::all();

        return view('pages.about', compact('about', 'subbrand'));
    }

    public function portfolio()
    {
        $client = Client::all();
        $brand = Brand::all();
        $kategori = Kategori_brand::all();

        return view('pages.portfolio', compact('client','brand','kategori'));
    }

    public function services() {
        $service = Service::all();

        return view('pages.services', compact('service'));
    }

    public function detailBrand($id)
    {
        $brand = Brand::uuid($id);
        $content = Content::all()->where('brand_id', 'like', $brand->uuid);
        
        return view('pages.portfolio-details',compact('brand', 'content'));
    }
}
