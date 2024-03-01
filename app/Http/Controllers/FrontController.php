<?php

namespace App\Http\Controllers;

use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function terms()
    {
        return view('frontend.terms');
    }

    public function privacy()
    {
        return view('frontend.privacy');
    }

    public function return_policy()
    {
        return view('frontend.return-policy');
    }

    public function help()
    {
        return view('frontend.help');
    }

    public function product_details($product_slug)
    {
        $repo = app(ProductRepository::class);
        $data = $repo->getBySlug($product_slug);

        if ($data == null) {
            abort(404, 'Product Not Found');
        }

        return view('frontend.product_detail', compact('data'));
    }
}
