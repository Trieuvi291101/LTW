<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();
        $user = User::all();  //tv
        return view('product',compact('product','user'));
    }
    public function getProductDetail($ProductId){
        $product = Product::where('id', $ProductId)->first();
        $user = User::all();
        return view('productDetail',compact('product','user'));
    }
    public function addProduct(){
       $category = Category::All();
       $pro = Product::All();
       $user = User::all();  //tv
       return view('addProduct',compact('category', 'pro','user'));
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
        $user = User::all();  //tv
        return view('product',compact('product','user'));
    }
}
