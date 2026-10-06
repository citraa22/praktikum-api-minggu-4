<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::query()->get([
            'id',
            'name',
            'description',
            'price',
            'stock',
            'category',
            'created_at',
        ]);

        return response()->json([
            'data' => $products,
        ]);
    }

    public function show(int $product)
    {
        $productData = Product::find($product);

        if (!$productData) {
            return response()->json([
                'message' => 'Product not found',
                'errors' => null,
            ], 404);
        }

        return response()->json([
            'data' => [
                'id' => $productData->id,
                'name' => $productData->name,
                'description' => $productData->description,
                'price' => $productData->price,
                'stock' => $productData->stock,
                'category' => $productData->category,
                'created_at' => $productData->created_at,
            ],
        ]);
    }
}