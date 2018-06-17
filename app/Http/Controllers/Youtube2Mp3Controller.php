<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Youtube2Mp3Controller extends Controller
{
    public function index($url)
    {
        return response()->json([
            'status' => 'true',
            'url' => $url
        ], 200);
    }
}
