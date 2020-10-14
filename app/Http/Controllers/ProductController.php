<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        $products = Product::get();

        return response()->json([
            'data' => $products
        ]);
    }

    public function show($id)
    {
        $product = Product::where('id', $id)->first();

        return response()->json([
            'data' => $product
        ]);
    }

    public function store(Request $request)
    {
        $product = new Product();

        $product->name = $request->name;
        $product->price = $request->price;
        $product->rating = $request->rating;
        $product->quantity = $request->quantity;

        try {
            $product->save();

            return response()->json([
                'data' => $product
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => $e
            ], 500);
        }
    }

    public function update(Request $request, $id)
    {
        $product = Product::where('id', $id)->first();

        $product->name = $request->name ?? $product->name;
        $product->price = $request->price ?? $product->price;
        $product->rating = $request->rating ?? $product->rating;
        $product->quantity = $request->quantity ?? $product->quantity;

        try {
            $product->save();

            return response()->json([
                'data' => $product
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => $e
            ], 500);
        }
    }

    public function destroy($id)
    {
        Product::where('id', $id)->delete();

        return response()->json([], 204);
    }
}
