@extends('layouts.template')

@section('styles')
    <link rel="stylesheet" href="{{ url('leaflet-search/leaflet-search.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
    <style>
        html,
        body {
            height: 100%;
            width: 100%;
        }

        #map {
            height: calc(100vh - 56px);
            width: 100%;
            margin: 0%
        }
    </style>
    <style>
        .justify-text {
            text-align: justify;
        }
    </style>
@endsection
</head>

<body>
    @section('content')
        <div id="map"></div>
    @endsection

    @section('script')
        <script src="{{ url('leaflet-search/leaflet-search.js') }}"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/fuse.js/1.2.2/fuse.min.js"></script>
        <script src="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.43.0/L.Control.Locate.min.js">
        </script>
        <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
        <script>
            //Map
            var map = L.map('map').setView([-8.6500, 115.2167], 12);

            // Basemap
            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);


            /* GeoJSON Point */
            var point = L.geoJson(null, {
                onEachFeature: function(feature, layer) {
                    var popupContent =
                        "<div style='font-weight: bold; font-size: larger; text-align: center;'> " + feature
                        .properties.name + "</div>" + "<br>" +
                        "<div class='justify-text'>" +
                        feature.properties.description + "<br>" +
                        "</div>" + "<br>" +
                        "<img src='{{ asset('storage/images/') }}/" + feature.properties.image +
                        "'class='img-thumbnail' alt='...'>" + "<br>" +
                        "<div class='d-flex flex-row mt-3'>"

                    layer.on({
                        click: function(e) {
                            point.bindPopup(popupContent);
                        },
                        mouseover: function(e) {
                            point.bindTooltip(feature.properties.name);
                        },
                    });
                },
            });
            $.getJSON("{{ route('api.points') }}", function(data) {
                point.addData(data);
                map.addLayer(point);

                /* var restLayers = L.geoJson(data, {
                    pointToLayer: function(feature, latlng) {

                        var props = L.Util.extend({
                                'name': '',
                                'description': '',
                                'image': ''
                            }, feature.properties),
                            textPopup = L.Util.template(
                                "<div style='font-weight: bold; font-size: larger; text-align: center;'> " +
                                feature.properties.name + "</div>" + "<br>" +
                                "<div class='justify-text'>" +
                                feature.properties.description + "<br>" +
                                "</div>" + "<br>" +
                                "<img src='{{ asset('storage/images/') }}/" + feature.properties.image +
                                "'class='img-thumbnail' alt='...'>" + "<br>" +
                                "<div class='d-flex flex-row mt-3'>",
                                props),
                            style = {
                                radius: 5,
                                opacity: 0.8,
                                fillColor: '#ddd',
                                fillOpacity: 0.8
                            };

                        return L.circleMarker(latlng, style).bindPopup(textPopup);
                    }
                }).addTo(map);

                var fuse = new Fuse(data.features, {
                    keys: [
                        'properties.name',
                    ]
                });

                L.control.search({
                        layer: restLayers,
                        propertyName: 'name',
                        filterData: function(text, records) {
                            var jsons = fuse.search(text),
                                ret = {},
                                key;

                            for (var i in jsons) {
                                key = jsons[i].properties.name;
                                ret[key] = records[key];
                            }

                            return ret;
                        }
                    })
                    .on('search:locationfound', function(e) {
                        e.layer.openPopup();
                    })
                    .addTo(map); */
            });

            /* GeoJSON Polyline */
            var polyline = L.geoJson(null, {
                onEachFeature: function(feature, layer) {
                    var popupContent = "Name: " + feature.properties.name + "<br>" +
                        "Description : " + feature.properties.description + "<br>" +
                        "Photo: <img src='{{ asset('storage/images/') }}/" + feature.properties.image +
                        "'class='img-thumbnail' alt='...'>" + "<br>" +
                        "<div class='d-flex flex-row mt-3'>";

                    layer.on({
                        click: function(e) {
                            polyline.bindPopup(popupContent);
                        },
                        mouseover: function(e) {
                            polyline.bindTooltip(feature.properties.name);
                        },
                    });
                },
            });
            $.getJSON("{{ route('api.polylines') }}", function(data) {
                polyline.addData(data);
                map.addLayer(polyline);
            });

            /* GeoJSON Polygon */
            var polygon = L.geoJson(null, {
                onEachFeature: function(feature, layer) {
                    var popupContent = "Name: " + feature.properties.name + "<br>" +
                        "Description: " + feature.properties.description + "<br>" +
                        "Photo: <img src='{{ asset('storage/images/') }}/" + feature.properties.image +
                        "'class='img-thumbnail' alt='...'>" + "<br>" +
                        "<div class='d-flex flex-row mt-3'>";

                    layer.on({
                        click: function(e) {
                            polygon.bindPopup(popupContent);
                        },
                        mouseover: function(e) {
                            polygon.bindTooltip(feature.properties.name);
                        },
                    });
                },
            });
            $.getJSON("{{ route('api.polygons') }}", function(data) {
                polygon.addData(data);
                map.addLayer(polygon);
            });

            //layer group and layer controll
            var overlayMaps = {
                "Point": point,
                "Polyline": polyline,
                "Polygon": polygon
            };

            var layerControl = L.control.layers(null, overlayMaps).addTo(map);
            /* var locateControl = L.control
                .locate({
                    position: "topleft",
                    drawCircle: true,
                    follow: true,
                    setView: true,
                    keepCurrentZoomLevel: false,
                    markerStyle: {
                        weight: 1,
                        opacity: 0.8,
                        fillOpacity: 0.8,
                    },
                    circleStyle: {
                        weight: 1,
                        clickable: false,
                    },
                    icon: "fas fa-crosshairs",
                    metric: true,
                    strings: {
                        title: "Click for Your Location",
                        popup: "You're here. Accuracy {distance} {unit}",
                        outsideMapBoundsMsg: "Not available",
                    },
                    locateOptions: {
                        maxZoom: 16,
                        watch: true,
                        enableHighAccuracy: true,
                        maximumAge: 10000,
                        timeout: 10000,
                    },
                })
                .addTo(map); */
        </script>
    @endsection
</body>

</html>
