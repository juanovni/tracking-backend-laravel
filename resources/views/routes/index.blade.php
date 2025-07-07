@extends('layouts.app-master')

@section('content')
<div class="col-lg-12 col-md-12 col-12 p-0">
    <div id="kt_search_map" class="card-rounded" style="width: 100%; height: 100vh;"></div>
</div>
@endsection


@section('top_js_page')
<script src="https://unpkg.com/@mapbox/polyline@1.1.1"></script>
<script>
    const multipolygonGeoJSON = @json($geojson);
    const truckJSON = @json($vehicle);
    let vehicleId = null;
    let marker;
    let markerPickup;
    let markerDelivery;
    let markerPolyline;
    const map = L.map('kt_search_map').setView([truckJSON.lat, truckJSON.lng], 14);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 20
    }).addTo(map);

    const iconVehicleMarker = (numberPlate) => {
        return L.divIcon({
            className: 'custom-icon-jc',
            html: `<div class="circle-truck-map">${numberPlate}</div>`,
            iconSize: [42, 42],
            iconAnchor: [18, 40],
            popupAnchor: [0, -32],
        });
    }

    L.geoJSON(multipolygonGeoJSON, {
        style: {
            color: 'red',
            weight: 2,
            fillColor: 'red',
            fillOpacity: 0.1
        },
        onEachFeature: function(feature, layer) {
            if (feature.properties && feature.properties.name) {
                layer.bindPopup(feature.properties.name);
            }
        }
    }).addTo(map);

    $('#proveedor').on('change', function() {
        let proveedorId = $(this).val();
        $('#tipo').prop('disabled', true).empty();
        $('#vehicle').prop('disabled', true).empty();
        if (!proveedorId) return;

        $.get(`/routes/types/${proveedorId}`, function(tipos) {
            $('#tipo').append(`<option value="">Seleccione</option>`);
            tipos.forEach(tipo => {
                $('#tipo').append(`<option value="${tipo.id}">${tipo.name}</option>`);
            });
            $('#tipo').prop('disabled', false);
        });
    });

    $('#tipo').on('change', function() {
        let proveedorId = $('#proveedor').val();
        let tipo = $(this).val();
        $('#vehicle').prop('disabled', true).empty();
        if (!tipo) return;

        $.get(`/routes/vehicle/${proveedorId}/${tipo}`, function(vehiculos) {
            $('#vehicle').append(`<option value="">Seleccione</option>`);
            vehiculos.forEach(v => {
                $('#vehicle').append(`<option data-vehicle_id="${v.id}" value="${v.lat},${v.lng}">${v.number_plate}</option>`);
            });
            $('#vehicle').prop('disabled', false);
        });
    });

    $('#handlerClickSearch').on('click', function() {
        const numberPlate = $("#vehicle option:selected").text();
        const coords = $("#vehicle option:selected").val().split(',');

        if (marker) {
            map.removeLayer(marker);
            map.removeLayer(markerPickup);
            map.removeLayer(markerDelivery);
            map.removeLayer(markerPolyline);
        }

        if (coords.length === 2 && vehicleId != null) {
            let [lat, lng] = coords;
            const iconoTruckMarker = iconVehicleMarker(numberPlate);
            map.setView([lat, lng], 15);
            fetch(`routes/api/ruta/${vehicleId}`)
                .then(res => res.json())
                .then(data => {
                    console.log(data);
                    const encodedRoute = data.route.routes[0].geometry;
                    const decodedCoords = polyline.decode(encodedRoute);

                    // Beging:: MARKER Vehicle
                    /* <b>Camión:</b> ${numberPlate}<br><b>Distancia:</b> ${distance} km (${duration} min) */
                    const smmary = data.route.routes[0].summary;
                    const distance = parseFloat((smmary.distance / 1000).toFixed(2));
                    const duration = parseFloat((smmary.duration / 60).toFixed(2));
                    const titleInfo = `
                    <div class="card-body text-start">
                        <h6 class="card-title fw-semibold card-title-leaflet">Ruta Paquete #${data.package.id}</h6>
                        <div class="text-muted small mb-6 mt-1">2 paradas • ${distance} km • ${duration} min</div>
                        <ul class="list-unstyled">
                            <li class="mb-3 d-flex align-items-start">
                                <i class="bi bi-house-door-fill me-2 text-black"></i>
                                <div>
                                <div class="fw-semibold">Vehículo: ${numberPlate}</div>
                                <div class="bg-light rounded mt-1" style="height: 6px; width: 120px;"></div>
                                </div>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <div class="me-2 text-success fw-bold">01</div>
                                <div>
                                <div class="fw-semibold">Andres Valencia - PQ.#${data.package.id}</div>
                                <div class="bg-light rounded mt-1" style="height: 6px; width: 100px;"></div>
                                </div>
                            </li>
                            <li class="mb-3 d-flex align-items-start">
                                <div class="me-2 text-success fw-bold">02</div>
                                <div>
                                <div class="fw-semibold">Juan Constantine</div>
                                <div class="bg-light rounded mt-1" style="height: 6px; width: 100px;"></div>
                                </div>
                            </li>
                        </ul>
                        <button class="btn btn-light w-100 border mt-2">
                            <i class="bi bi-person-plus me-1"></i> Asignar Conductor
                        </button>
                    </div>`;
                    marker = L.marker([lat, lng], {
                        icon: iconoTruckMarker
                    }).addTo(map).bindPopup(titleInfo, {
                        closeButton: !1
                    }).openPopup();
                    // End:: MARKER Vehicle

                    // Beging:: MARKER Pickup
                    const packageJSON = data.package;
                    const pickup = [packageJSON.pickup_lat, packageJSON.pickup_lng];
                    const iconPackagePickup = L.divIcon({
                        className: 'custom-icon-jc',
                        html: `<div class="circle-package-map">PQ.#${data.package.id}</div>`,
                        iconSize: [42, 42],
                        iconAnchor: [18, 40],
                        popupAnchor: [0, -32],
                    });
                    markerPickup = L.marker(pickup, {
                        icon: iconPackagePickup
                    }).addTo(map);
                    // End:: MARKER Pickup

                    // Beging:: MARKER Delivery
                    const delivery = [packageJSON.delivery_lat, packageJSON.delivery_lng];
                    const iconPackageDelivery = L.divIcon({
                        className: 'custom-icon-jc',
                        html: `<div class="circle-client-map">JC</div>`,
                        iconSize: [42, 42],
                        iconAnchor: [18, 40],
                        popupAnchor: [0, -32],
                    });
                    markerDelivery = L.marker(delivery, {
                        icon: iconPackageDelivery
                    }).addTo(map);
                    // End:: MARKER Delivery

                    markerPolyline = L.polyline(decodedCoords, {
                        color: 'black',
                        weight: 4
                    }).addTo(map);

                });
        }
    });

    function getVehicleInfo(selectElement) {
        const selectedOption = selectElement.options[selectElement.selectedIndex];
        vehicleId = selectedOption.getAttribute('data-vehicle_id');
    }
</script>
@endsection