<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreProductRequest;





class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataProduct = Product::with('type')->get();

        //     response()->json([
        //     'success' => true,
        //     'message' => 'Ini adalah Data Product ', 
        //     'data' => $dataProduct
        // ], 200);
        

        return view('table-product', compact('dataProduct'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type = Type::all();

        // if($type){
        //     return response()->json([
        //         'success' => true,
        //         'message' => 'Data berhasil disimpan!',
        //         'data' => $type

        //     ],201);
        // }

        // return response()->json([
        //     'success' => false,
        //     'message' => 'Data tidak berhasil disimpan'
        // ], 409);
        return view('product_create', ['type' => $type]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store (Request $request)
    {

                $data = Product::create($request->all());
                if($request->hasFile('foto')){
                    $request->file('foto')->move('fotoproduct', $request->file('foto')->getClientOriginalName());
                    $data->foto = $request->file('foto')->getClientOriginalName();
                    $data->save();
                }
                 return redirect('table-product')->with('success','Product Data created succesfully');



                // $imageName = time().'.'.$request->foto->extension();
                // $uploadedImage = $request->foto->move(public_path('fotoproduct'), $imageName);
                // $imagePath = '' . $imageName;
        
                // $params = $request->validated();
                
                // if ($product = Product::create($params)) {
                //     $product->foto = $imagePath;
                //     $product->save();
                // }
                // return redirect ('table-product');


                
        
        
    }   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('product_show',['product'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $idx
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);

        $type =  Type::all();
        return view('edit_product',['product'=> $product, 'type' => $type]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $products = Product::find($id);
        $products->update([
            'name' => $request->name,
            'type_id' => $request->type_id,
        ]);

        if($request->hasFile('foto'))
        {
            $destination = 'fotoproduct/' . $products->foto;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('foto');
            $extension = $file->getClientOriginalName();
            $filename = time(). '.' . $extension;
            $file->move('fotoproduct/', $filename);
            $products->foto = $filename;
        }
        $products->update();
        

      

        return redirect('table-product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect('table-product')->with('success','Product Data Deleted Successfully');
    }
}
