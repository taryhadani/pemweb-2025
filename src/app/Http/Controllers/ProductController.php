<?php

namespace App\Http\Controllers;

use App\Models\Productt; // Assuming the model is named Productt
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data = Productt::all();
        return response()->json([
            'message' => 'List of clients',
            'data' => $data,
        ], 200);
    }
}
