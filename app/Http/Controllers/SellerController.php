<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Seller;
use App\Models\Rating;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreProductRequest;





class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataSeller = Seller::with('rating','product')->get();

        //     response()->json([
        //     'success' => true,
        //     'message' => 'Ini adalah Data Product ', 
        //     'data' => $dataProduct
        // ], 200);

        return view('table-seller', compact('dataSeller'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = Product::all();
        $rating = Rating::all();
        $seller = Seller::all();

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
        return view('seller_create', compact('product','rating','seller'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store (Request $request)
    {
                Schema::disableForeignKeyConstraints();
                $data = Seller::create($request->all());
                if($request->hasFile('foto')){
                    $request->file('foto')->move('fotoseller', $request->file('foto')->getClientOriginalName());
                    $data->foto = $request->file('foto')->getClientOriginalName();
                    $data->save();
                }
                Schema::enableForeignKeyConstraints();
                 return redirect('table-seller')->with('success','Seller Data created succesfully');



                // $imageName = time().'.'.$request->foto->extension();
                // $uploadedImage = $request->foto->move(public_path('fotoseller'), $imageName);
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
        $seller = Seller::findOrFail($id);
        return view('product_show',['seller'=>$seller]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $idx
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $seller = Seller::findOrFail($id);
        $product =  Product::where('id', '!=', $seller->product_id)->get();
        
        $rating =  Rating::all();
        return view('seller_edit', compact('product','rating','seller'));
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
        $seller = Seller::find($id);
        $seller->update([
            'username' => $request->username,
            'harga' => $request->harga,
            'product_1' => $request->product_1,
            'product_2' => $request->product_2,
            'product_3' => $request->product_3,
            'jenikelamin' => $request->jenikelamin,
            'rating_id' => $request->rating_id,
        ]);

        if($request->hasFile('foto'))
        {
            $destination = 'fotoseller/' . $seller->foto;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('foto');
            $extension = $file->getClientOriginalName();
            $filename = time(). '.' . $extension;
            $file->move('fotoseller/', $filename);
            $seller->foto = $filename;
        }
        $seller->update();
        

      

        return redirect('table-seller');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $seller = Seller::findOrFail($id);
        $seller->delete();

        return redirect('table-seller')->with('success','Seller Data Deleted Successfully');
    }
}
