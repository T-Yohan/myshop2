<?php

namespace App\Http\Controllers;


use App\Models\Cart;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    //la méthode index reçoit $cathégory initialisée à 0
    public function index($category=0) //index permet de lister les catégories et les produits
    {
        if ($category!=0) {
            $products=Product::where('category_id',$category)->orderBy('created_at');
        }
        //liste de mes produits
        $products = Product::orderBy('created_at', 'asc')->paginate(10);
        //liste de mes categories
        $categories = Category::orderBy('name', 'asc')->get();

        return view('welcome',compact('products','categories'));
    }

    public function detail(Product $product) /*la méthode détail permet d'afficher le détail du produit
    mais aussi les produits similaires*/
    {
        // dd($product->category_id);

        $products=Product::where('category_id',$product->category_id)->inRandomOrder()->limit(4)->get();
        //selectionner 4 produits aléatoirement
        // dd($products);
        return view ('detail',compact('product','products'));

    }
    /*Ajouter au caddie , contrôler l'existence du produit */
    public function addToCart(Product $product)
    {
        //verifier l'existence du produit dans le panier
        //selectionner le produit : SELECT*FROM CART WHERE user_id="?"  AND $product->id="?"->limit(0,1)

        $cart=Cart::where('user_id',Auth::user()->id)
                    ->where('product_id',$product->id)
                    ->limit(1)->get();

    }
}
