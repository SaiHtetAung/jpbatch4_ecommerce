<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Order;
use Auth;
use App\Category;

class FrontendController extends Controller
{
  public function home($value='')
  {
    $items = Item::orderBy('id','desc')->get();
    return view('frontend.home',compact('items'));
  }

  public function about($value='')
  {
    return view('frontend.about');
  }

  public function post($id)
  {
    $item = Item::find($id);
    return view('frontend.postdetail',compact('item'));
  }

  public function contact($value='')
  {
    return view('frontend.contact');
  }

  public function cart($value='')
  {
    return view('frontend.cart');
  }

  public function order_history($value='')
  {
    $orders = Order::where('user_id',Auth::id())->get();
    return view('frontend.order_history',compact('orders'));
  }

  public function bycategory($id)
  {
    $category = Category::find($id);
    return view('frontend.bycategory',compact('category'));
  }

  public function eloading($value='')
  {
    return view('frontend.eloading');
  }

  public function getItems($value='')
  {
    $items = Item::with('brand')->with('subcategory.category')->get();
    return $items;
  }
}
