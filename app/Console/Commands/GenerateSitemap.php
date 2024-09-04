<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Models\Product;
use App\Models\Protfolio;
use App\Models\ShopProduct;
use Illuminate\Support\Facades\Storage;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate an automatic sitemap for the website';

    public function handle()
    {
        $sitemap = Sitemap::create();
        $urls = [];
        $urlCount = 0;
        $lastUpdated = now();

        // Add static routes
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
            $urls[] = $route;
            $urlCount++;
        }

        // Add dynamic shop products
        ShopProduct::chunk(100, function ($shopproducts) use ($sitemap, &$urls, &$urlCount) {
            foreach ($shopproducts as $product) {
                if ($product->slug) {
                    $url = route('product.details', $product->slug);
                    $sitemap->add(Url::create($url));
                    $urls[] = $url;
                    $urlCount++;
                }
            }
        });

        // Add dynamic products
        Product::chunk(100, function ($products) use ($sitemap, &$urls, &$urlCount) {
            foreach ($products as $product) {
                if ($product->slug) {
                    $url = route('services.product.details', $product->slug);
                    $sitemap->add(Url::create($url));
                    $urls[] = $url;
                    $urlCount++;
                }
            }
        });

        // Add dynamic portfolios
        Protfolio::chunk(100, function ($protfolios) use ($sitemap, &$urls, &$urlCount) {
            foreach ($protfolios as $protfolio) {
                if ($protfolio->slug) {
                    $url = route('portfolio.details', $protfolio->slug);
                    $sitemap->add(Url::create($url));
                    $urls[] = $url;
                    $urlCount++;
                }
            }
        });

        // Write the sitemap to a file
        $sitemap->writeToFile(public_path('sitemap.xml'));

        // Save sitemap data for the view
        $sitemapData = [
            'lastUpdated' => $lastUpdated,
            'urlCount' => $urlCount,
            'urls' => $urls,
        ];

        Storage::disk('local')->put('sitemap_data.json', json_encode($sitemapData));

        $this->info('Sitemap generated successfully.');
    }
}
