<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\QueryException;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prods = Product::with('variants')->get();
        return response()->json($prods, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required|min:4',
            'price' => 'required|integer|min:1000000'
        ]);

        if($validate->fails()){
            return response()->json([
                'status' => false,
                'message'=> 'save error',
                'errors' => $validate->errors()
            ], 200);
        }

        $prod = new Product;
	    $prod->name = $request->name;
	    $prod->price = $request->price;
	    $prod->save();

        return response()->json([
                'status' => true,
                'message' => 'Save sucessfully',
        ], 201);


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);
        return response()->json($product, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required|min:4',
            'price' => 'required|integer|min:1000000'
        ]);

        if($validate->fails()){
            return response()->json([
                'status' => false,
                'message'=> 'update error',
                'errors' => $validate->errors()
            ], 200);
        }


            $prod = Product::find($id);
            $prod->name = $request->name;
            $prod->price = $request->price;
            $prod->save();

            return response()->json([
                'status' => true,
                'message' => 'Update sucessfully',
            ], 200);


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $isdelete = Product::destroy($id);

        if($isdelete) {
            return response()->json([
                'status' => true,
                'message' => 'Delete sucessfully',
            ], 200);
        } else {
            return response()->json([
                'status' => true,
                'message' => 'Delete error',
            ], 200);
        }

    }
}
