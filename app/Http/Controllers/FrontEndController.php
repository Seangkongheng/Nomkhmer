<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
use App\Models\customerModel;
use App\Models\order;
use App\Models\order_item;
use App\Models\OrderItemModel;
use App\Models\productModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\Return_;

class FrontEndController extends Controller
{
    public function index()  {
        $cus=customerModel::all('id');
        $cat=Catagory::all()->sortBy('id');
        $pro=productModel::all();
        return view('FrondEnd.index',compact('cus','pro','cat'));

    }

    public function detailProduct($id)
    {

        $product_detail=productModel::find($id);
        return view('FrondEnd.productDetail.index',compact('product_detail'));
    }

    public function cart($id)
    {

        $product=productModel::findOrFail($id);
        $cart=session()->get('cart',[]);

        if(isset($cart[$id])){

            $cart[$id]['qty']++;
        }
        else
        {
            $cart[$id]=[

                "id_product"=>$product->id,
                "productName"=> $product->productName,
                "image"=>$product->image,
                "priceout"=>$product->priceout,
                "stock"=>$product->stock,
                "qty"=>1,


            ];
        }

    session()->put('cart',$cart);
    return redirect()->back()->with('success','you cart has been add');

    }
    public function view()
    {
        return view('FrondEnd.card.index');
    }

    public function destroy(Request $request) {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product successfully removed!');

            Return view('FrondEnd.card.index');
        }
        else
        {
            echo "  ";
        }
    }


    public function checkout(){

         return view('FrondEnd.checkout.index');
    }

    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["qty"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart successfully updated!');
        }
    }
    public function placeOrder(Request $request) {
        $order = new order();

        $order->Fistname =$request->input('Fistname');
        $order->lastName =$request->input('lastName');
        $order->email =$request->input('email');
        $order->phoneNum =$request->input('phoneNum');
        $order->address1 =$request->input('address1');
        $order->address2 =$request->input('address2');
        $order->city =$request->input('city');
        $order->state =$request->input('state');
        $order->contry =$request->input('contry');
        $order->pincode =$request->input('pincode');
        $order->save();


     foreach( session('cart') as $detail)

         {


            $string = "";
            $afterTrim = "";
            foreach ($detail as $value){
                $string = implode(",",$detail);
                // echo $string."<br>";
                // Remove the leading comma (",") and split the string by commas
                $afterTrim = explode(',', ltrim($string, ','));
            }

            $productName = $afterTrim[0];
            $imageLocation = $afterTrim[1];
            $priceOut = $afterTrim[3];
            $stock = $afterTrim[4];
            $qty = $afterTrim[5];


            OrderItemModel::create([

                'order_id'=>$order->id,
                'product_id'=>$productName,//CAN'T FIND ID
                'qty'=>$qty,
                'price'=>$priceOut
            ]);
              $pro=productModel::where('id',$productName)->first();
              $pro->stock =$pro->stock - $qty;
              $pro->update();
        }



        //   if(Auth::user()->address1 == NULL)
        //    {
        //     $users= User::where('id',Auth::id())->first();
        //       $users->Fistname =$request->input('Fistname');
        //      $users->lastName =$request->input('lastName');
        //      $users->phoneNum =$request->input('phoneNum');
        //     $users->address1 =$request->input('address1');
        //    $users->address2 =$request->input('address2');
        //    $users->city =$request->input('city');
        //    $users->state =$request->input('state');
        //    $users->contry=$request->input('contry');
        //       $users->pincode =$request->input('pincode');
        //      $users->update();
        //      }

        session()->forget('cart');

        return redirect('/nomkhmer')->with('status',"Your Order successfull");

    }

    public function view_catagory($id)
    {
        if(Catagory::where('id',$id)->exists())
        {
            $cat=Catagory::all()->sortBy('id');
            $catagory= Catagory::where('id',$id)->first();
            $product=productModel::where('cate_id',$catagory->id)->get();
                 return view('FrondEnd.catagory.Baked_cakes',compact('catagory','product','cat'));

        }
        else{
            return redirect('/nomkhmer')->with('status','id not found');
        }

    }

public function cutomerlogin(){
    return view('FrondEnd.cutomer.Register');
}


public function registercustomer(Request $request){
    //  $this->validate($request, [
    //      'name' => 'required|string|max:255',
    //      'email' => 'required|string|email|max:255|unique:users',
    //    'password' => 'required|string|min:6|confirmed',
    // ]);

    $user = new customerModel();
     $user->name = $request->input('name');
     $user->email = $request->input('email');
     $user->password = bcrypt($request->input('password'));
     $user->save();

     return redirect('loginCustomer');

}
public function loginCustomer()
{
    return view('FrondEnd.cutomer.login');
}

public function loginCustomerbuy(Request $request)
{
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6|max:20',
        ]);

        $costomer =customerModel::where('email', $request->email)->first();

        if ($costomer && Hash::check($request->password, $costomer->password)) {
            session(['is_logged_in' => true, 'userId' => $costomer->id]);
        }
        return redirect('/nomkhmer');
        
    }

public function productlisst(){
    $product=productModel::select('productName');
    $data=[];
    foreach ($product as $item){
        $data=$item['productName'];
    }
    return $data;
}
}
