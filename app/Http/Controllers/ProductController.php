<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    private $file = 'products.json';

    private function getproducts(){
        // Reade Data from json file
        if(!Storage::exists($this->file)){
            Storage::put($this->file, json_encode([]));
        }
        return json_decode(Storage::get($this->file), true);
    }
    private function saveProducts($products){
        Storage::put($this->file, json_encode($products , JSON_PRETTY_PRINT));

    }
    public function index(){
        $products = $this->getproducts();
        return view('products.index', compact('products'));    
    }
    public function create(){
        return view('products.create');
    }
    public function store(Request $request){
        $request->validate([
            'nom' => 'required',
            'prix' => 'required|numeric|min:1'
        ]);
        $products = $this->getProducts();
        $newProduct = [
            'id' => time(),
            'nom' => $request->nom,
            'prix' => $request->prix
        ];
        $products[] = $newProduct;
        $this->saveProducts($products);
        return redirect()->route('products.index')->with('success', 'Product created successfully.');
        
    }
    public  function edit($id){
        $products= $this->getProducts();
        $product  = collect($products)->firstWher( 'id', $id);
        return view('products.edit', compact('product'));

    }
    public function update( Request $request , $id){
        $request->validate([
            'nom'=> 'required',
            'prix'=>'required|numeric|min:1'
        ]);

        $products = $this->getProducts();
        foreach($products as &$product){
            if($product['id'] == $id){
                $product['nom']=$request->nom;
                $product['prix']=$request->prix;
            }
            $this->saveProducts($products);
            return redirect()->route('products.index')->with('success', 'Product updated');


        }

    }
    public function destroy($id){
        $products=$this->getProducts();
        $productsn= array_filter($products , fn($p)=>$p['id'] != $id);
        $this->saveProducts(array_values($products));
        return redirect()->route('products.index')->with('success', 'product deleted');
    }
        
}





        
    

