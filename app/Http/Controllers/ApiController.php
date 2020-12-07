<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        // $response = Http::get('https://api.kawalcorona.com/indonesia/provinsi');
        $response = Http::get('http://cktamu.flinsetyadi.com/Restapi.php');
        $api = $response->json();
        $data = $api['data'];
        // dd($data);
        return view('data_tamu.index', compact('data'));
    }
}