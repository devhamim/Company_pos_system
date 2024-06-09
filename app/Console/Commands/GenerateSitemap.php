<?php

namespace App\Console\Commands;

use App\Models\Product;
use App\Models\protfolio;
use App\Models\ShopProduct;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $sitemap = Sitemap::create();

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
        }

        // Add dynamic shop products
        $shopproducts = ShopProduct::all();
        foreach ($shopproducts as $product) {
            $sitemap->add(Url::create(route('product.details', $product->slug)));
        }

        // Add dynamic products
        $products = Product::all();
        foreach ($products as $product) {
            $sitemap->add(Url::create(route('services.product.details', $product->slug)));
        }

        // Add dynamic products
        $protfolios = protfolio::all();
        foreach ($protfolios as $protfolio) {
            $sitemap->add(Url::create(route('portfolio.details', $protfolio->slug)));
        }

        // Write the sitemap to a file
        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated successfully.');

        return 0;
    }
}
