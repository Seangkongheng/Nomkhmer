<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image;
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

        $images = [];
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $file) {
                $newImageName = time() . '-' . $file->getClientOriginalName();
                $imgx = Image::make($file->getRealPath());
                $imgx->resize(360, 360, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $file->move(public_path('storage/images'), $newImageName);
                $images[] = $newImageName;
            }
        }
        $requestData['image'] = json_encode($images);
        productModel::create($requestData);
        return redirect('/product')->with('status', 'successful');
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
