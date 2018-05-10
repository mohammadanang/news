<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Province;
use Illuminate\Http\Request;

/**
 * Province controller.
 *
 * @author      mohammad.anang  <m.anangnur@gmail.com>
 * @package     news
 */

class ProvinceController extends Controller
{
    public function __construct()
    {
        $this->middleware(['api', 'cors']);
    }

    public function index()
    {
        $provinces = Province::all();

        return response()->json([
            'message' => 'success',
            'data' => $provinces,
            'status_code' => 200
        ], 200);
    }

    public function search(Request $request)
    {
        $provinces = Province::where('name', 'like', "%{$request->filter}%")->get();

        return response()->json([
            'message' => 'success',
            'data' => $provinces,
            'status_code' => 200
        ], 200);
    }

    public function store(Request $request)
    {
        $province = new Province([
            'name' => $request->name
        ]);

        if($province instanceof Province) {
            return response()->json([
                'message' => 'Insert Data Successful',
                'status' => 'success'
            ], 200);
        }

        return response()->json([
            'message' => 'Something Went Wrong',
            'status' => 'error'
        ], 400);
    }
}