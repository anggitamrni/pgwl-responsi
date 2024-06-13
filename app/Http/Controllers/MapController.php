<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index()
    {
        $data = [
            "title" => "Explore Denpasar Tourism",
        ];

        if (auth()->check()) {
            return view('index', $data);
        } else {
            return view('index-public', $data);
        }

        return view('index-public', $data);
    }

    public function table()
    {
        $data = [
        "title" =>"table",
        ];

        return view('table',$data);
    }

    public function getGeoJSONDenpasar()
{
    $geojsonPath = public_path('geojson/storage/denpasar.geojson'); // Ganti dengan path yang sesuai dengan file GeoJSON denpasar
    $geojson = file_get_contents($geojsonPath);
    return response()->json(json_decode($geojson));
}
}
