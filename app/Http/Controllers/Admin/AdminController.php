<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Distributor;
use App\Models\FlashSale;
class AdminController extends Controller
{
    public function dashboard()
    {
        $users = User::count();
        $products = Product::count();
        $distributors = Distributor::count();
        $flash_sales = FlashSale::count();
    
        return view('pages.admin.index', compact('users', 'products', 'distributors', 'flash_sales'));
    }
    
}
