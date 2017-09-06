<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use App\Menu;
use App\Menupost;
use App\Product;
use App\User;
use App\Subcate;


class PagesController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function login(){

            return view('admin/login');
    }

  /*  public function home($index ){

        if($index == "home"){

            return view('admin/index', ['class' => strtolower($index)]);
        }
    }*/

    public function index($menuText){

        $menulist=$this->menulist();
        $menupost  = DB::table('menus')
            ->join('menuposts', 'menus.id', '=', 'menuposts.menu_id')
            ->get();
        $category = DB::table('menus')
            ->join('subcates', 'menus.id', '=', 'subcates.menu_id')
            ->get();
        $productpost = DB::table('subcates')
            ->join('products', 'subcates.id', '=', 'products.menu_id')
            ->get(); 

        //$category = DB::table('subcates')->get();

        if($menuText == "home"){
            return view('admin/index', ['class' => strtolower($menuText)]);
        }
        else if($menuText == "menu"){
            return view('admin/view_menu', compact('menulist'), ['class' => strtolower($menuText)]);
        }
        else if($menuText == "menupost"){
            return view('admin/view_menu_post', compact('menulist','menupost'), ['class' => strtolower($menuText)]);
        }
        else if($menuText == "product"){

            return view('admin/view_product', compact('category', 'productpost'), ['class' => strtolower($menuText)]);
        }
        else if($menuText == "procate"){

            return view('admin/view_procate', compact('menulist', 'category'), ['class' => strtolower($menuText)]);
        }
        else if($menuText == "user"){
            return view('admin/view_user', ['class' => strtolower($menuText)]);
        }
        else if($menuText == "setting"){
            return view('admin/view_setting', ['class' => strtolower($menuText)]);
        }

    }

    public function menulist(){
        $menus = DB::table('menus')->get();
        return ($menus);
    }

    public function insert(Request $request){
        $key = $request['key'];
        $data = $request['data'];
        
    /* menu */
        if($key == "menu"){
            if($data[0]==''){
                return "Please file data";
            }else{
                $menu = Menu::create([
                    'menuname' => $data[0],
                    'menustatus' => $data[1]
                ]);
                return 'insert success';
            }
    /* contentpost */
        }else if($key == 'contentpost'){
            $postcontent = Menupost::create([
                'dsc' => $data[0],
                'status' => $data[1],
                'menu_id' => $data[2]
            ]);
            return 'success insert';
    /* product category */
        }else if($key == 'procate'){
            if($data[0]==''){
                return "Please file data";
            }else{
                $postcate = Subcate::create([
                    'subcate_name' => $data[0],
                    'status' => $data[1],
                    'menu_id' => $data[2]
                ]);
                return "insert success";
            }
   /* product post */
        }

        if( $request->key == 'productpost'){

            /* 20170906 */
            
            /* //20170906 */
            $filenames = "";


            if( $request->hasFile('images') ){

                foreach ($request->images as $image) {
                    $filename = $image->getClientOriginalName();
                    $filenames .= $filename . "|";

                    $filename = $image->storeAs('', $filename);
                }
            }

            $product = Product::create([
                'pro_name' => $request->pro_name,
                'pro_img' => $filenames,
                'pro_dsc' => $request->pro_dsc,
                'pro_status' => $request->pro_status == null ? "0" : "1",
                'menu_id' => $request->menu_id
            ]);

            return View('admin/view_product');

        }
    }

    public function update(Request $request){
        $key    = $request['key'];
        $data   = $request['data'];

        if($key == "menu"){
            $menu = Menu::find($data[0]);
            $menu->menuname = $data[1];
            $menu->menustatus = $data[2];
            $menu->save();
            return "Success update";

        }elseif ($key == "contentpost") {
            $postcontent = Menupost::find($data[0]);
            $postcontent->dsc=$data[1];
            $postcontent->menu_id=$data[2];
            $postcontent->save();
            return "update success";

        }elseif ($key == "procate") {
            $procate = Subcate::find($data[0]);
            $procate->subcate_name=$data[1];
            $procate->status=$data[2];
            $procate->menu_id=$data[3];
            $procate->save();
            return "update success";
        }

    }

    public function delete(Request $request){
        $key    = $request['key'];
        $data   = $request['data'];

        if($key == "menu"){
            $menu = Menu::find($data[0]);
            $menu->delete();
            return 'Success delete';

        }elseif ($key == "contentpost") {
            $postcontent = Menupost::find($data[0]);
            $postcontent->delete();
            return 'Success delete';
            
        }elseif ($key == "procate") {
            $procate = Subcate::find($data[0]);
            $procate->delete();
            return 'Success delete';
        }elseif ($key == "productpost") {
            $pro = Product::find($data[0]);
            $pro->delete();
            return 'Success delete';
        }
    }



}
