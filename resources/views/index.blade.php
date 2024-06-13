@extends('layouts.template')

@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.css">
<link rel="stylesheet" href="{{ url('leaflet-search/leaflet-search.css')}}">
<link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css"/>
<style>
        html, body {
            height: 100%;
            width: 100%;
        }
        #map {
            height: calc(100vh - 56px);
            width: 100%;
            margin: 0%
            }
            .justify-text {
        text-align: justify;
        }
            </style>

@endsection
</head>

<body>
    @section('content')
    <div id="map"></div>

    <!-- Modal Create Point -->
        <div class="modal fade" id="PointModal" tabindex="-1" aria-labelledby="PointModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Create Point</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('store-point') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Fill point name">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descirption</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="geom" class="form-label">Geometry</label>
                    <textarea class="form-control" id="geom_point" name="geom" rows="3" readonly></textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control" id="image_point" name="image"
                            onchange="document.getElementById('preview-image-point').src =
                            window.URL.createObjectURL(this.files[0])">
                        </div>
                <div class="mb-3">
                    <img src="" alt="Preview" id="preview-image-point"
                    class="img-thumbnail" width="400">
                </div>
            </div>
            <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
                </div>
            </div>
            </div>

        <!-- Modal Create Polyline -->
        </div>
        <div class="modal fade" id="PolylineModal" tabindex="-1" aria-labelledby="PolylineModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Create Polyline</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="{{ route('store-polyline') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Fill point name">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descirption</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="geom" class="form-label">Geometry</label>
                    <textarea class="form-control" id="geom_polyline" name="geom" rows="3" readonly></textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control" id="image_polyline" name="image"
                            onchange="document.getElementById('preview-image-polyline').src =
                            window.URL.createObjectURL(this.files[0])">
                        </div>
                <div class="mb-3">
                    <img src="" alt="Preview" id="preview-image-polyline"
                    class="img-thumbnail" width="400">
                </div>
            </div>
            <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
                </div>
            </div>
            </div>
        </div>

        <!-- Modal Create Polygon -->
        </div>
        <div class="modal fade" id="PolygonModal" tabindex="-1" aria-labelledby="PolygonModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Create Polygon</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="{{ route('store-polygon') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Fill point name">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descirption</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="geom" class="form-label">Geometry</label>
                    <textarea class="form-control" id="geom_polygon" name="geom" rows="3" readonly></textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control" id="image_polygon" name="image"
                            onchange="document.getElementById('preview-image-polygon').src =
                            window.URL.createObjectURL(this.files[0])">
                        </div>
                <div class="mb-3">
                    <img src="" alt="Preview" id="preview-image-polygon"
                    class="img-thumbnail" width="400">
                </div>
            </div>
            <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
                </div>
            </div>
            </div>
        </div>
    @endsection

    @section('script')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js"></script>
        <script src="https://unpkg.com/terraformer@1.0.7/terraformer.js"></script>
        <script src="https://unpkg.com/terraformer-wkt-parser@1.1.2/terraformer-wkt-parser.js"></script>
        <script src="{{ url('leaflet-search/leaflet-search.js') }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fuse.js/1.2.2/fuse.min.js"></script>
    <script src="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.43.0/L.Control.Locate.min.js">
    </script>
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
    <script>
        //Map
        var map = L.map('map').setView([-8.65, 115.22], 12);
        // Basemap
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

    /* Digitize Function */
        var drawnItems = new L.FeatureGroup();
        map.addLayer(drawnItems);

    var drawControl = new L.Control.Draw({
        draw: {
		position: 'topleft',
		polyline: true,
		polygon: true,
		rectangle: true,
		circle: false,
		marker: true,
		circlemarker: false
	},
	edit: false
});

map.addControl(drawControl);

map.on('draw:created', function(e) {
	var type = e.layerType,
		layer = e.layer;

	console.log(type);

	var drawnJSONObject = layer.toGeoJSON();
	var objectGeometry = Terraformer.WKT.convert(drawnJSONObject.geometry);

	console.log(drawnJSONObject);
	console.log(objectGeometry);

	if (type === 'polyline') {
		// Set value geometry to input geom
        $("#geom_polyline").val(objectGeometry);

        // Show modal
        $("#PolylineModal").modal('show');
	} else if (type === 'polygon' || type === 'rectangle') {
		// Set value geometry to input geom
        $("#geom_polygon").val(objectGeometry);

        // Show modal
        $("#PolygonModal").modal('show');
	} else if (type === 'marker') {
        // Set value geometry to input geom
        $("#geom_point").val(objectGeometry);

        // Show modal
        $("#PointModal").modal('show');
	} else {
		console.log('__undefined__');
	}

	drawnItems.addLayer(layer);
    });

    /* GeoJSON Point */
			var point = L.geoJson(null, {
				onEachFeature: function (feature, layer) {
					var popupContent = 
                        "<div style='font-weight: bold; font-size: larger; text-align: center;'> " + feature.properties.name + "</div>" + "<br>" +
                        "<div class='justify-text'>" +
						feature.properties.description + "<br>" +
                        "</div>" + "<br>" +
                        "<img src='{{ asset('storage/images/')}}/" + feature.properties.image + 
                        "'class='img-thumbnail' alt='...'>" + "<br>" +
                        "<div class='d-flex flex-row mt-3'>" +

                        "<a href='{{ url('edit-point') }}/" + feature.properties.id +
                        "' class='btn btn-warning me-2'><i class='fa-solid fa-edit'></i></a>" +

                        "<form action='{{ url('delete-point') }}/" + feature.properties.id +
                        "' method='POST'>" +
                        '{{ csrf_field() }}' +
                        '{{ method_field('DELETE') }}' +
                        "<button type='submit' class='btn btn-sm btn-danger' onClick='return confirm(\"Are You Sure to Delete?\")'><i class='fa-solid fa-trash-can'></i></button>" +
            "</form>" +

"</div>";
            
					layer.on({
						click: function (e) {
							point.bindPopup(popupContent);
						},
						mouseover: function (e) {
							point.bindTooltip(feature.properties.name);
						},
					});
				},
			});
			$.getJSON("{{ route('api.points') }}", function (data) {
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
                            "<h3>{name}</h3><p>{description}</p><img src='{{ asset('storage/images/') }}/{image}' class='img-thumbnail' alt='{name}'>",
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
				onEachFeature: function (feature, layer) {
					var popupContent = "Name: " + feature.properties.name + "<br>" +
                    " <p class='text-justify'> Description : " + feature.properties.description + "<br>" + 
                    "Photo: <img src='{{ asset('storage/images/')}}/" + feature.properties.image + "'class='img-thumbnail' alt='...'>" + "<br>" +
                    "<div class='d-flex flex-row mt-3'>" +

                    "<a href='{{ url('edit-polyline') }}/" + feature.properties.id +
                    "' class='btn btn-warning me-2'><i class='fa-solid fa-edit'></i></a>" +

                    "<form action='{{ url('delete-polyline') }}/" + feature.properties.id +
                    "' method='POST'>" +
                    '{{ csrf_field() }}' +
                    '{{ method_field('DELETE') }}' +
                    "<button type='submit' class='btn btn-sm btn-danger' onClick='return confirm(\"Yakin nih mau di hapus?\")'><i class='fa-solid fa-trash-can'></i></button>" +
                    "</form>" +

                    "</div>";
					layer.on({
						click: function (e) {
							polyline.bindPopup(popupContent);
						},
						mouseover: function (e) {
							polyline.bindTooltip(feature.properties.name);
						},
					});
				},
			});
			$.getJSON("{{ route('api.polylines') }}", function (data) {
				polyline.addData(data);
				map.addLayer(polyline);
			});

    /* GeoJSON Polygon */
			var polygon = L.geoJson(null, {
				onEachFeature: function (feature, layer) {
					var popupContent = "Name: " + feature.properties.name + "<br>" +
						"Description: " + feature.properties.description + "<br>" +
                        "Photo: <img src='{{ asset('storage/images/')}}/" + feature.properties.image + "'class='img-thumbnail' alt='...'>" + "<br>" +
                       

                        "<div class='d-flex flex-row mt-3'>" +

                    "<a href='{{ url('edit-polygon') }}/" + feature.properties.id +
                    "' class='btn btn-warning me-2'><i class='fa-solid fa-edit'></i></a>" +

                    "<form action='{{ url('delete-polygon') }}/" + feature.properties.id +
                    "' method='POST'>" +
                    '{{ csrf_field() }}' +
                    '{{ method_field('DELETE') }}' +
                    "<button type='submit' class='btn btn-sm btn-danger' onClick='return confirm(\"Yakin nih mau di hapus?\")'><i class='fa-solid fa-trash-can'></i></button>" +
                    "</form>" +

                    "</div>";
					layer.on({
						click: function (e) {
							polygon.bindPopup(popupContent);
						},
						mouseover: function (e) {
							polygon.bindTooltip(feature.properties.name);
						},
					});
				},
			});
			$.getJSON("{{ route('api.polygons') }}", function (data) {
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