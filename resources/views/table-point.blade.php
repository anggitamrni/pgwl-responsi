@extends('layouts.template')

@section('content')
    <div class="container mt-4">
        <div class="card shadow">
            <div class="card-header" style="background-color:#B6BDDA;">
                <h3 style="margin: 0; color: #4D5885;">Data Point</h3>
            </div>
            <div class="card-body" style="background-color:#DBDEED;">
                <table class="table table-bordered table-striped" style="background-color:#E5E7F4" id="example">
                    <thead>
                        <tr>
                            <th style="text-align: center;">No</th>
                            <th style="text-align: center;">Name</th>
                            <th style="text-align: center;">Description</th>
                            <th style="text-align: center;">Coordinates</th>
                            <th style="text-align: center;">Image</th>
                            <th style="text-align: center;">Created at</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1 @endphp
                        @foreach ($points as $p)
                            @php
                                $geometry = json_decode($p->geom);
                            @endphp
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $p->name }}</td>
                                <td style="text-align: justify;">{{ $p->description }}</td>
                                <td style="text-align: justify;">
                                    {{ $geometry->coordinates[1] . ', ' . $geometry->coordinates[0] }}</td>
                                <td><img src="{{ asset('storage/images/' . $p->image) }}" alt="" width="200">
                                </td>
                                <td>{{ date_format($p->created_at, 'D, d M Y, H:i:s') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">
    <title>Table Centered Header</title>
    <title>Centered Data Point</title>
    <style>
        body {
            background-color: #E8F8FC;
        }
        th {
            text-align: center;
        }
        .card-header {
            background-color: #B6BDDA;
            text-align: center;
        }
        .card-header h3 {
            margin: 0; /* Remove default margin to perfectly center the text */
        }
    </style>
@endsection

@section('script')
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.js"></script>
    <script>
        new DataTable('#example');
    </script>
@endsection
