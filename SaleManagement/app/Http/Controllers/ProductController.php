<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function index()
    {
        $category = Category::paginate(13);
        $product = Product::all();
        return view('product',compact('category','product'));
    }
    public function getProductDetail($ProductId){
        $product = Product::where('id', $ProductId)->first();
        
        return view('productDetail',compact('product'));
    }
    public function addProduct(){
        $category = Category::All();
        $pro= Product::paginate(30);
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
            'category_id' => $request -> category_id,
            'num' => $request -> num,
            'active' => 1, 
        ]);
        $product = Product::All();
        Return \Redirect::back()->with('addsuccess','Thêm sản phẩm thành công!' );;
    }
    public function deletePro($ProductId){
        $record = Product::where('id', $ProductId)->first();
        if(file_exists(public_path("images/".$record->image ))){
            unlink(public_path("images/".$record->image));

        }
        Product::where('id', $ProductId)->delete();
        $product = Product::All();
        Return \Redirect::back()->with('thongbao','Xóa sản phẩm thành công!' );
    }
    public function editPro($ProductId)
    {
        $category = Category::All();
        $product = Product::where('id', $ProductId)->first();
        return view('editProduct', compact('category','product'));
    }
   
    public function editPro2(Request $request, $ProductId){
      
        $sp = Product::where('id', $ProductId)->first();
        $sp->name = $request -> name;
        $sp->description = $request -> description;
        $sp->price = $request -> price;
        $sp->manufacturer = $request -> manufacturer;
        $sp->created_date  = now();
        $sp->category_id = $request -> category_id;
        $sp->num = $request -> num;
        $sp->active = 1; 
        $sp->update();
        return redirect()->route('prodAdd');
    }
    public function Stars (){
        $countpro = Category::select("id", "name")
        ->withCount('Product')
        ->get()
        ->toArray();
        // dd($countpro);
        return view('Stars', compact('countpro'));
    }
    
    
}
