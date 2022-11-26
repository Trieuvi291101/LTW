<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view('product',compact('product'));
    }
    public function getProductDetail($ProductId){
        $product = Product::where('id', $ProductId)->first();
        
        return view('productDetail',compact('product'));
    }
    public function addProduct(){
       $category = Category::All();
       $pro = Product::All();
       return view('addProduct',compact('category', 'pro'));
    }
    public function insertProduct(Request $request)
    {
        $this->validate(request(), ['name'=>'required']);
        $filename ="";
        if($request->file('fileUpload')->isValid())
        {
            $filename= $request -> fileUpload -> getClientOriginalName();
            $request -> fileUpload -> move('images/', $filename);
        }
        $product = Product::create([

            'name' => $request -> name,
            'description' => $request -> description,
            'price' => $request -> price,
            'manufacturer' => $request -> manufacturer,
            'image' => $filename,
            'created_date' => now(),
            'categoryId' => $request -> categoryId,
            'num' => $request -> num,
            'active' => 1, 
        ]);
        $product = Product::All();
        return view('product',compact('product'));


    }
}
