<?php

namespace App\Repository;

use App\Models\Product;

class ProductRepository implements IProductRepository {

    public function getAllProducts()
    {
       return Product::all();
    }

    public function getSingleProduct($id)
    {


        return  Product::find($id);

        //return Product::with('comments')->get();

        //return Product::with('comments')->find($id);
    }

    public function createProduct(array $data)
    {
        // Product::create([
        //     'picture' => $data['pciture'],
        //     'title' => $data['title'],
        //     'price' => $data['price'],
        //     'description' => $data['description']
        // ]);

        $product = new Product();
        $product->name = $data['name'];
        $product->major = $data['major'];
        $product->level = $data['level'];
        $product->cost = $data['cost'];
        $product->time = $data['time'];
        $product->tel = $data['tel'];
        $product->picture = $data['picture'];



        $product->save();

    }

    public function editProduct($id)
    {
        return Product::find($id);
    }

    public function updateProduct($id, array $data)
    {
       Product::find($id)->update([
            'name' => $data['name'],
            'major' => $data['major'],
            'level' => $data['level'],
            'cost' => $data['cost'],
            'time' => $data['time'],
            'tel' => $data['tel'],
            'picture' => $data['picture'],

        ]);
    }

}



?>
