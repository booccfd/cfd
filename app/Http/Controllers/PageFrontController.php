<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Product;

class PageFrontController extends Controller
{
	public function index(){

		$menulist=$this->menulist();
        $category=$this->categorylist();

		//$menus = DB::table('menus')->get();
        return view('index', compact('menulist', 'category'));
    }

    public function login(){
        return view('admin/login');
    }

    public function category($menuLink){
    	$menulist=$this->menulist();
        $menupost = DB::table('menuposts')->where('menu_id', $menuLink)->get();
        $category=$this->categorylist();
        $allProducts = DB::table('products')->get();

    	if($menuLink=='1'){
    		return view('index', compact('menulist','category'), ['menuLink' => $menuLink]);
    	}elseif ($menuLink=='2') {
    		return view('aboutus', compact('menulist', 'menupost','category'), ['menuLink' => $menuLink]);
    	}elseif ($menuLink=='3') {
    		return view('ourprofessional', compact('menulist', 'menupost','category'), ['menuLink' => $menuLink]);
    	}elseif ($menuLink=='4') {
    		return view('ourproducts', compact('menulist','category', 'allProducts'), ['menuLink' => $menuLink, 'catId' => 'ALL', 'isDetail' => true]);
    	}
    }

    public function cate($menuLink, $catId){
        $menulist=$this->menulist();
        $menupost = DB::table('menuposts')->where('menu_id', $menuLink)->get();
        $category=$this->categorylist();
        $catProducts = DB::table('products')->where('menu_id', $catId)->get();

        return view('ourproducts', compact('menulist','category', 'catProducts'), ['menuLink' => $menuLink, 'catId' => $catId, 'isDetail' => true]);

    }

    public function detail($menuLink, $catId, $proId){
        $menulist=$this->menulist();
        $menupost = DB::table('menuposts')->where('menu_id', $menuLink)->get();
        $category=$this->categorylist();
        $productDetail = Product::findOrFail($proId);

        return view('ourproducts', compact('menulist','category'), ['menuLink' => $menuLink, 'catId' => $catId, 'isDetail' => false, 'productDetail' => $productDetail]);
    }

    public function menulist(){
	        $menus = DB::table('menus')->get();
	        return ($menus);
	}
    public function categorylist(){
        $category = DB::table('menus')
            ->join('subcates', 'menus.id', '=', 'subcates.menu_id')
            ->get();
        return ($category);
    }
}
