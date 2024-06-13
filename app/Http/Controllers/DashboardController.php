<?php

namespace App\Http\Controllers;

use App\Models\Points;
use App\Models\Polylines;
use App\Models\Polygon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->points = new Points();
        $this->polylines = new Polylines();
        $this->polygon = new Polygon();
    }

    public function index()
    {
        $data =[
            "title" => "Dashboard Denpasar Tourism",
        "total_points" => $this->points->count(),
        "total_polylines" => $this->polylines->count(),
        "total_polygon" => $this->polygon->count(),
        ];

        return view('dashboard', $data);
        
    }
}
