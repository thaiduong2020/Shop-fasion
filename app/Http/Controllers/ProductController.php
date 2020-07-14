<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Type_product;
use App\Product;
use App\User;
class ProductController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $user = User::all();
        $list = Product::orderBy('id', 'desc')->paginate(10);
        return view('admin.product.list-product', ['list' => $list,'user' => $user]);
    }
    public function getCreate(){
        $type = Type_product::all();
        return view('admin.product.add-product',[ 'type' => $type]);
    }

    public function postCreate(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'price' => 'required',
            'image' => 'required',
            'quantity' => 'required',
        ],[
            'name.required' => 'Vui lòng nhập tên sản phẩm',
            'price.required' => 'Vui lòng nhập giá sản phẩm',
            'image.required' => 'Vui lòng chọn ảnh sản phẩm',
            'quantity.required' => 'Vui lòng số lượng sản phẩm'
        ]
       
    );

    $product = new Product;
    $product->id_type = $request->id_type;
    $product->name =  $request->name;
    $product->description =  $request->description;
    $product->price =  $request->price;
    $product->quantity =  $request->quantity;
    if($request->hasFile('image')){
        $file = $request->file('image');
        $name = $file->getClientOriginalName();
        $image = Str::random(3)."_".$name;
        while(file_exists("upload/product/".$name)){
            $image = Str::random(3)."_".$name;
        }
        $file->move("upload/product/",$image);
    }
    $product->image = $image;

    $product->save();
    return redirect('admin/add-product')->with('thongbao', 'Thêm mới thành công');
    }

    public function getEdit($id){
        $product = product::find($id);
        $type = Type_product::all();
        return view('admin.product.edit-product',['product'=> $product ,'type' => $type , 'theloai' => $theloai]);
    }
    public function postEdit(Request $request, $id){
        $this->validate($request,[
            'name' => 'required',
            'price' => 'required',
            'quantity' => 'required',
        ],[
            'name.required' => 'Vui lòng nhập tên sản phẩm',
            'price.required' => 'Vui lòng nhập giá sản phẩm',
            'quantity.required' => 'Vui lòng số lượng sản phẩm'
        ]);

        $product = Product::find($id);
        $product->id_type = $request->id_type;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->save();

        return redirect('admin/edit-product/'.$product->id)->with('thongbao', 'Cập nhật thành công');
    }

    public function postDelete($id){
        $type = Product::find($id);
        $type->delete();
        return redirect('admin/list-product')->with('thongbao', 'Xóa thành công thành công');
    }

    public function getSearch(Request $request){
        $product = Product::where('name','like','%'.$request->key.'%')
                            ->orWhere('price',$request->key)
                            ->get();
        return view('admin.product.search-product',['product'=>$product]);
    }


    public function getView(){
        $product = Product::paginate(12);
        $type = Type_product::all();
        return view('client.home',compact('product','type'));
    }
    public function sanpham($id){
        $product = Product::where('id_type', $id)->get();
        $type = Type_product::all();
        return view('client.sanpham',compact('product','type'));
    }
 

}
