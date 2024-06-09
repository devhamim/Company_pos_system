<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index()
    {
        $sitemap = Sitemap::create();

        $staticRoutes = [
            '/',
            route('about'),
            route('our.services'),
            route('our.products'),
            route('our.protfolio'),
            route('our.blogs'),
            route('contact'),
            route('our.cliends'),
        ];

        foreach ($staticRoutes as $route) {
            $sitemap->add(Url::create($route));
        }

        // If you have dynamic routes (like blog posts, products, etc.)
        // Add them here, for example:
        // $products = Product::all();
        // foreach ($products as $product) {
        //     $sitemap->add(Url::create(route('product.show', $product->slug)));
        // }

        $sitemap->writeToFile(public_path('sitemap.xml'));

        return response()->view('sitemap.index')->header('Content-Type', 'application/xml');
    }
}
