<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SitemapController extends Controller
{
    //show
    public function show()
    {
        $sitemapData = json_decode(Storage::disk('local')->get('sitemap_data.json'), true);

        // Ensure the array structure is correct
        $sitemapData = $sitemapData ?: [
            'urls' => [],
            'urlCount' => 0,
            'lastUpdated' => null,
        ];

        return view('sitemap-details', compact('sitemapData'));
    }

}
