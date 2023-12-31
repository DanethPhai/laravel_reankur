<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Repository\IProductRepository;
use Illuminate\Http\Request;

class ProductController extends Controller

{

    public $product;

    public function __construct(IProductRepository $product) {
        $this->product = $product;
    }



    public function index()
    {
        // return all products

        $products =  $this->product->getAllProducts();

        return view('product.index')->with('products', $products);

    }

    public function show($id)
    {
        // get single product

        $product = $this->product->getSingleProduct($id);
        return view('product.show')->with('product', $product);
    }


    public function create()
    {
        // create page
        return view('product.create');
    }


    public function store(Request $request)
    {

        // validate and store data
        $request->validate([
            'name' => 'required',
            'level' => 'required',
            'major' => 'required',
            'time' => 'required',
            'cost' => 'required',
            'tel' => 'required',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2047',
        ]);

        //image upload

        $data = $request->all();

        if($image = $request->file('picture')) {
            $name = time(). '.' .$image->getClientOriginalName();
            $image->move(public_path('images'), $name);
            $data['picture'] = "$name";
        }

        $this->product->createProduct($data);

        return redirect('/');

    }





    public function edit($id)
    {
        $product = $this->product->editProduct($id);
        return view('product.edit')->with('product', $product);
    }


    public function update(Request $request, $id)
    {

        // validate and store data
        $request->validate([
            'name' => 'required',
            'cost' => 'required',
            'time' => 'required',
            'tel' => 'required',
            'level' => 'required',
            'major' => 'required',
            'picture' => 'required|image|mimes:jpeg,png,jpg,pdf,gif,svg|max:2047',
        ]);

        //image upload

        $data = $request->all();

        if($image = $request->file('picture')) {
            $name = time(). '.' .$image->getClientOriginalName();
            $image->move(public_path('images'), $name);
            $data['picture'] = "$name";
        }

        $this->product->updateProduct($id, $data);

        return redirect('/products');

    }


    // add to cart

    public function addToCart(Product $product) {

        $cart = session()->get('cart');

        if(!$cart) {

            $cart = [

                $product->id => [

                    'name' =>  $product->name,
                    'quantity' => 1,
                    'time' => $product->time,
                    'cost' => $product->cost,
                    'tel' => $product->tel,
                    'level'=> $product->level,
                    'major' => $product->major,
                    'picture' => $product->picture,
                ]
            ];

            session()->put('cart', $cart);
            return redirect()->route('product.cart')->with('success', 'Added to Cart');
        }

        // if there is cart

        if(isset($cart[$product->id])) {
            $cart[$product->id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->route('product.cart')->with('success', 'Added to Cart');
        }


        $cart[$product->id] = [
            'name' =>  $product->name,
            'quantity' => 1,
            'time' => $product->time,
            'cost' => $product->cost,
            'tel' => $product->tel,
            'level'=> $product->level,
            'major' => $product->major,
            'picture' => $product->picture,
        ];

        session()->put('cart', $cart);
        return redirect()->route('product.cart')->with('success', 'Added to Cart');
    }





    // remove from cart

    public function deleteFromCart() {

    }





}
