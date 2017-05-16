<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     * GET /pmcheese
     *
     * @return Response
     */
    public function index()
    {
        return view('newPage');
    }
}
