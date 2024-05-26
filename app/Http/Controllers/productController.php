<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
use App\Models\productModel;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pro = productModel::all()->sortBy('id');
        return view('admin.product.index', compact('pro'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pro = Catagory::all();
        return view('admin.product.create', compact('pro'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {



        $requestData = $request->all();


        
        $fileName = time() . $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images', $fileName, 'public');
        $requestData["image"] = '/storage/' . $path;
        productModel::create($requestData);

        return redirect('/product')->with('status', "sucessfull");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function  edit(string $id)
    {
        // $pro=productModel::find($id);
        // return view('admin.product.index');
        $product = productModel::find($id);
        return view('admin.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'cate_id' => 'required',
            'productName' => 'required',
            'pricein' => 'required',
            'priceout' => 'required',
            'stock' => 'required',
            'image' => 'required|image',
        ]);

        $fileName = time() . $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images', $fileName, 'public');
        $requestData["image"] = '/storage/' . $path;

        $product = productModel::updateOrCreate(
            ['id' => $id],
            $request->all()
        );

        return redirect('/product')->with('status', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        productModel::find($id)->delete();
        return Redirect('/product')->with('status', "product Deleted successfull");
    }
}
