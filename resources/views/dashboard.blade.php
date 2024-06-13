<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard Denpasar Tourism') }}
        </h2>
    </x-slot>

    <div class="container py-12" >
        <div class="card shadow">
            <div class="card-header" style="background-color: #F0FFFF;">
                <h3 class="card-title" >Data</h3>
            </div>
            <div class="card-body" style="background-color: #F0FFFF;">
                <div class="row">
                    <div class="col">
                        <div class="alert alert-primary" role="alert">
                            <h4><i class="fa-solid fa-location-dot"></i> Total Points</h4>
                            <p style="font-size: 20pt">{{$total_points}}</p>
                        </div>
                    </div>
                    </div>
                    <div class="col">
                        <div class="alert alert-danger" role="alert">
                            <h4><i class="fa-solid fa-draw-polygon"></i> Total Polygons</h4>
                            <p style="font-size: 20pt">{{$total_polygon}}</p>
                        </div>
                    </div>
                </div>
                <hr>
                <p> Anda login sebagai <b>{{Auth::user()->name}}</b> dengan email <i>{{Auth::user()->email}}</p>
            </div>
        </div>
    </div>
</x-app-layout>
