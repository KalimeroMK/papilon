<?php

namespace App\Http\Controllers;

use App\Category as Category;
use App\Product as Product;
use App\Referral as Refferal;
use App\Services as Services;
use App\Settings as Settings;
use App\Slider;
use App\Sliders;
use App\StaticPage as StaticPage;
use DB;

use Request;

class HomePageController extends Controller {

	public function index() {
		$settings    = Settings::firstOrFail();
		$staticpages = StaticPage::all();
		$services    = Services::get();
		$slides      = Slider::all();
		$referrals   = Refferal::all();
		$categories  = Category::roots()->get();
		$products    = Product::all()->where('workflow_id', '=', '1');
		$products1   = Product::where('recomend', 'yes')->limit(3)->where('workflow_id', '=', '1')->get();
		$products2   = Product::all()->random(1)->where('workflow_id', '=', '1');
		$products3   = Product::all()->random(1)->where('workflow_id', '=', '1');
		$products4   = Product::all()->random(1)->where('workflow_id', '=', '1');
		$products5   = Product::all()->random(1)->where('workflow_id', '=', '1');
		$products6   = Product::all()->random(1)->where('workflow_id', '=', '1');
		$products7   = Product::all()->random(1)->where('workflow_id', '=', '1');
		$products8   = Product::all()->random(1)->where('workflow_id', '=', '1');
		$products9   = Product::where('recomend', 'yes')->limit(3)->where('workflow_id', '=', '1')->get();

		$tree          = Category::getTreeHP($categories);
		$allcategories = DB::table('product')->join('categories', 'product.category', '=', 'categories.id')->groupBy('categories.id')->take(8)->get();
		$data          = ["referrals" => $referrals, "settings" => $settings, "slides" => $slides, "services" => $services, "staticpages" => $staticpages, "allcategories" => $allcategories, "status" => "success", "products" => $products, "categories" => $categories, "tree" => $tree, "products1" => $products1, "products2" => $products2, "products3" => $products3, "products4" => $products4, "products5" => $products5, "products6" => $products6, "products7" => $products7, "products8" => $products8, "products9" => $products9];
		//        dd($products1);
		return view('main.homepage')->with($data);
	}

	public function staticpages($slug) {
		$settings      = Settings::firstOrFail();
		$services      = Services::all();
		$staticpage    = StaticPage::where("slug", "=", $slug)->first();
		$staticpages   = StaticPage::all();
		$categories    = Category::roots()->get();
		$products      = Product::all()->where('workflow_id', '=', '1');
		$tree          = Category::getTreeHP($categories);
		$allcategories = Category::get();
		$data          = ["settings" => $settings, "services" => $services, "staticpage" => $staticpage, "staticpages" => $staticpages, "allcategories" => $allcategories, "status" => "success", "products" => $products, "categories" => $categories, "tree" => $tree];
		return view('main.staticpage')->with($data);
	}

	public function services($slug) {
		$settings      = Settings::firstOrFail();
		$services      = Services::all();
		$service       = Services::where('slug', '=', $slug)->first();
		$allcategories = Category::get();
		$categories    = Category::roots()->get();
		$tree          = Category::getTreeHP($categories);
		$staticpages   = StaticPage::all();
		$data          = ["service" => $service, "services" => $services, "staticpages" => $staticpages, "settings" => $settings, "tree" => $tree, "categories" => $categories, "allcategories" => $allcategories];
		return view('main.services')->with($data);
	}

	public function product($slug) {

		$settings      = Settings::firstOrFail();
		$services      = Services::all();
		$product       = Product::where('slug', '=', $slug)->first();
		$product1      = Product::all()->random(3)->where('workflow_id', '=', '1');
		$sliders       = Sliders::where('product_id', '=', $product->id)->get();
		$allcategories = Category::get();
		$categories    = Category::roots()->get();
		$tree          = Category::getTreeHP($categories);
		$staticpages   = StaticPage::all();
		$data          = ["sliders" => $sliders, "product" => $product, "product1" => $product1, "services" => $services, "staticpages" => $staticpages, "settings" => $settings, "tree" => $tree, "categories" => $categories, "allcategories" => $allcategories];
		return view('main.product')->with($data);
	}

	public function referents($slug) {
		$settings = Settings::firstOrFail();
		$services = Services::all();
		$referral = Refferal::all();
		if ($slug == "all") {
			$products      = Product::all()->where('workflow_id', '=', '1');
			$allcategories = Category::get();
			$categories    = Category::roots()->get();
			$tree          = Category::getTreeHP($categories);
			$staticpages   = StaticPage::all();
			$data          = ["referral" => $referral, "products" => $products, "services" => $services, "staticpages" => $staticpages, "settings" => $settings, "tree" => $tree, "categories" => $categories, "allcategories" => $allcategories];
			return view('main.allreferral')->with($data);
		} else {
			$category = Category::where('slug', '=', $slug)->first();
			$referral = Refferal::where('slug', '=', $slug)->first();

		}

		$allcategories = Category::get();
		$categories    = Category::roots()->get();
		$tree          = Category::getTreeHP($categories);
		$staticpages   = StaticPage::all();
		$data          = ["referral" => $referral, "category" => $category, "services" => $services, "staticpages" => $staticpages, "settings" => $settings, "tree" => $tree, "categories" => $categories, "allcategories" => $allcategories];
		return view('main.referral')->with($data);

	}

	public function categories(Request $request, $slug) {
		$settings    = Settings::firstOrFail();
		$services    = Services::all();
		$currentPath = $request::url();

		if ($slug == "all") {
			$products      = Product::all();
			$allcategories = Category::get();
			$categories    = Category::roots()->get();
			$tree          = Category::getTreeHP($categories);
			$staticpages   = StaticPage::all();

			$data = ["path" => $currentPath, "products" => $products, "services" => $services, "staticpages" => $staticpages, "settings" => $settings, "tree" => $tree, "categories" => $categories, "allcategories" => $allcategories];
			return view('main.categories')->with($data);
		} else {
			$category = Category::where('slug', '=', $slug)->first();
			$products = Product::where('category', '=', $category->id)->paginate(12);
		}

		$sliders       = Sliders::where('category_id', '=', $category->id)->get();
		$allcategories = Category::get();
		$categories    = Category::roots()->get();
		$tree          = Category::getTreeHP($categories);
		$staticpages   = StaticPage::all();
		$data          = ["path" => $currentPath, "category" => $category, "sliders" => $sliders, "products" => $products, "services" => $services, "staticpages" => $staticpages, "settings" => $settings, "tree" => $tree, "categories" => $categories, "allcategories" => $allcategories];
		return view('main.categories')->with($data);
	}

	public function search() {
		$search   = Request::get('search');
		$products = Product::where('title', 'like', '%'.$search.'%')
			->orWhere('description', 'like', '%'.$search.'%')
			->where('workflow_id', '=', '1')
			->orderBy('id', 'desc')
			->get();
		//            ->paginate(12);

		//        dd($products);
		$settings = Settings::firstOrFail();
		$data     = ["products" => $products, "settings" => $settings];
		return view('main.search')->with($data);
	}

}
