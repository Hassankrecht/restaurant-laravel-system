<?php

namespace App\Http\Controllers;

use App\Models\Food\Checkout;
use App\Models\Food\CheckoutItem;
use App\Models\Food\cart; // Ensure you have the correct namespace for the Cart model
use App\Models\Food\CartItem; // Ensure you have the correct namespace for the Cart

use Illuminate\Http\Request;
use App\Models\Food\Food; // Ensure you have the correct namespace for the Food model
use Illuminate\Support\Facades\Auth;
use App\Models\Reviews; 
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    //{$this->middleware('auth');}

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    $breakfastFoods = Food::where('category', 'Breakfast')->take(4)->orderBy('id', 'desc')->get();
    $launchFoods    = Food::where('category', 'Launch')->take(4)->orderBy('id', 'desc')->get();
    $dinnerFoods    = Food::where('category', 'Dinner')->take(4)->orderBy('id', 'desc')->get();

     $reviews = reviews::select()->take(4)
    ->orderBy('id', 'desc')->get();

    return view('home', compact('breakfastFoods', 'launchFoods', 'dinnerFoods', 'reviews'));
    }

    public function about()
    {
   
    return view('about');
    }
   
    
    public function service()
    {

    return view('service');
    }

    public function contact()
    {
        return view('contact');
    }

   

public function count()
{
    $count = cart::where('user_id', Auth::id())
        ->selectRaw('SUM(price * quantity) as total_price')
        ->first();

    return view('home', compact('count'));
}

}