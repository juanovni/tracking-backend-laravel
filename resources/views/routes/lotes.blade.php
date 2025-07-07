@extends('layouts.app-master')

@section('content')
<div class="row flex-row-fluid">
    <div class="col-lg-3">
        <div class="d-flex flex-stack gap-5 flex-wrap" id="kt_app_search_filter">
            <div class="fs-6 fw-semibold text-gray-500">
                Showing <span class="text-gray-800">65</span>&nbsp; search results
            </div>

            <div class="d-flex gap-5">
                <select class="form-select form-select-sm form-select-solid border h-35px w-150px" data-control="select2" data-placeholder="Select" data-hide-search="true">
                    <option value="0">All</option>
                    <option value="1" selected>Popular</option>
                    <option value="2">Top Rated</option>
                    <option value="3">Best Match</option>
                </select>

                <ul class="nav nav-tabs nav-tabs-switch h-35px flex-shrink-0 rounded">
                    <li class="nav-item d-flex align-items-stretch">
                        <a class="nav-link" data-bs-toggle="tab" href="#kt_search_results_1">
                            <i class="ki-outline ki-element-11 fs-5 lh-0"></i> </a>
                    </li>
                    <li class="nav-item d-flex align-items-stretch">
                        <a class="nav-link active" data-bs-toggle="tab" href="#kt_search_results_2">
                            <i class="ki-outline ki-row-horizontal fs-5 lh-0"></i> </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="separator separator-dashed my-5"></div>

        <div class="hover-scroll me-n2" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_header, #kt_app_footer, #kt_app_hero, #kt_app_search_filter" data-kt-scroll-wrappers="#kt_app_content" data-kt-scroll-offset="35px">
            <div class="tab-content">
                <div class="tab-pane fade" id="kt_search_results_1" role="tabpanel">
                </div>
                <div class="tab-pane fade show active" id="kt_search_results_2" role="tabpanel">
                    <div class="d-flex flex-column flex-grow-1 gap-6">
                        @foreach ($datos as $i => $d)
                        <div class="card card-hover-border p-5 flex-lg-row align-items-lg-center gap-5 ">
                            <div class="d-flex flex-column flex-grow-1">
                                <div class="d-flex flex-stack gap-5">
                                    <div class="d-flex flex-stack gap-2 mb-1">
                                        <i class="ki-outline ki-magnifier text-gray-500 fs-3"></i>
                                        <a href="#" class="text-primary text-hover-primary-active fw-semibold">
                                            Paquete #{{ $d['package']['id'] }} </a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center gap-2 mb-3">
                                    <i class="ki-duotone ki-car-2 fs-4 text-black">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                        <span class="path6"></span>
                                    </i>
                                    <div class="text-gray-500">Vehículo Asignado: </div>
                                    <div class="text-gray-700 fw-bold">{{ $d['vehicle']['number_plate'] ?? 'N/A' }}</div>
                                </div>
                                <div class="d-flex gap-4 mb-3 fw-semibold">
                                    <div class="d-flex align-items-center gap-1 text-gray-700">
                                        <i class="ki-duotone ki-geolocation-home fs-4">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        {{ round($d['distance'] / 1000, 2) }} km
                                    </div>
                                    <div class="d-flex align-items-center gap-1 text-gray-700">
                                        <i class="ki-duotone ki-time fs-4">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        {{ round($d['duration'] / 60, 1) }} min
                                    </div>
                                </div>

                                <div class="d-flex align-items-center gap-4">
                                    <div class="text-gray-500 mb-2">Costo Combustible</div>
                                    <div class="text-gray-800 mb-3 fs-2 fw-bold">
                                        ${{ number_format($d['fuel_cost'], 2) }} </div>
                                </div>

                                <button class="btn btn-light w-100 border mt-2">
                                    <i class="bi bi-person-plus me-1"></i> Asignar Conductor
                                </button>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-9">
        <div id="kt_search_map" class="card-rounded w-100 h-100 " style="width: 100%;"></div>
    </div>
</div>

<!-- Modal de propiedad -->
<div class="modal fade" id="propertyModal" tabindex="-1" aria-labelledby="propertyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header" id="propertyModalHeader">
            </div>
            <div class="modal-body">
                <form id="form">
                    <div class="table-responsive">
                        <table class="table align-middle table-row-dashed fs-6 gy-2" id="tableTracks">
                            <tbody id="propertyModalBody" class="fw-semibold text-gray-600">
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
            <button
                type="button"
                class="btn btn-lg btn-light w-full m-6 d-none border mt-2"
                style="margin-top: -15px !important;"
                id="handlerSubmit"
                data-kt-stepper-action="next">
                <i class="bi bi-person-plus me-1 fs-2"></i>
                Asignar Conductor
            </button>
        </div>
    </div>
</div>
@endsection

@section('top_js_page')
<script src="https://unpkg.com/@mapbox/polyline@1.1.1"></script>
<script>
    const rutas = @json($datos);
    const multipolygonGeoJSON = @json($geojson);
    console.log(rutas);
    let packageId = null;
    const map = L.map('kt_search_map').setView([-2.21147, -79.9319], 13); // Centrado en Guayaquil aprox
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 20
    }).addTo(map);
    const customIcon = new L.Icon({
        iconUrl: 'https://static.thenounproject.com/png/3754610-200.png',
        iconSize: [48, 48],
        iconAnchor: [18, 40],
        popupAnchor: [0, -32],
    });

    const packageIcon = new L.Icon({
        iconUrl: 'https://cdn-icons-png.flaticon.com/512/8/8210.png',
        iconSize: [48, 48],
        iconAnchor: [18, 40],
        popupAnchor: [0, -32],
        html: `<div title="aaaaaaa" class="marker-content">📍</div>`,
        className: 'custom-marker',
    });

    const clientIcon = new L.Icon({
        iconUrl: 'https://cdn-icons-png.flaticon.com/256/6009/6009864.png',
        iconSize: [42, 42],
        iconAnchor: [18, 40],
        popupAnchor: [0, -32],
    });

    rutas.forEach((item, index) => {
        const iconoTruckMarker = L.divIcon({
            className: 'custom-icon-jc',
            html: `<div class="circle-truck-map">${item.vehicle.number_plate}</div>`,
            iconSize: [42, 42],
            iconAnchor: [18, 40],
            popupAnchor: [0, -32],
        });
        const truck = [item.vehicle.lat, item.vehicle.lng];
        L.marker(truck, {
            icon: iconoTruckMarker
        }).addTo(map).bindPopup(`Vehículo: ${item.vehicle.number_plate}`);

        const coordinatePackagePickup = [item.package.pickup_lat, item.package.pickup_lng];
        const iconoPackagePickup = L.divIcon({
            className: 'custom-icon-jc',
            html: `<div class="circle-package-map">PQ.#${item.package.id}</div>`,
            iconSize: [42, 42],
            iconAnchor: [18, 40],
            popupAnchor: [0, -32],
        });
        const marker = L.marker(coordinatePackagePickup, {
            icon: iconoPackagePickup,
        }).addTo(map).bindPopup(`Paquete #${item.package.id}<br>Recogida: ${item.vehicle.number_plate}`);

        const encoded = item.ruta.routes[0].geometry;
        const decodedCoords = polyline.decode(encoded);
        L.polyline(decodedCoords, {
            color: 'black',
            weight: 4
        }).addTo(map).bindPopup(`Paquete #${item.package.id}<br>Camión: ${item.vehicle.number_plate}`);
        marker.on('click', function() {
            document.getElementById('handlerSubmit').classList.add('d-none');
            packageId = item.package.id;
            const modalBHeader = `
                        <h5 class="modal-title" id="propertyModalLabel">
                        <div class="d-flex align-items-center me-3 gap-2">
                        <i class="ki-duotone ki-dropbox fs-2x">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                            <span class="path5"></span>
                        </i>
                        Paquete #${item.package.id}</h5>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    `;
            document.getElementById('propertyModalHeader').innerHTML = modalBHeader;
            const modal = new bootstrap.Modal(document.getElementById('propertyModal'));
            modal.show();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "/routes/vehicles/package/" + item.package.id,
                type: "GET",
                cache: true,
                processData: false,
                contentType: false,
                beforeSend: function() {
                    const loading = `
                        <svg class="truck" viewBox="0 0 48 24" width="48px" height="24px">
                            <g fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" transform="translate(0,2)">
                                <g class="truck__body">
                                    <g stroke-dasharray="105 105">
                                        <polyline class="truck__outside1" points="2 17,1 17,1 11,5 9,7 1,39 1,39 6" />
                                        <polyline class="truck__outside2" points="39 12,39 17,31.5 17" />
                                        <polyline class="truck__outside3" points="22.5 17,11 17" />
                                        <polyline class="truck__window1" points="6.5 4,8 4,8 9,5 9" />
                                        <polygon class="truck__window2" points="10 4,10 9,14 9,14 4" />
                                    </g>
                                    <polyline class="truck__line" points="43 8,31 8" stroke-dasharray="10 2 10 2 10 2 10 2 10 2 10 26" />
                                    <polyline class="truck__line" points="47 10,31 10" stroke-dasharray="14 2 14 2 14 2 14 2 14 18" />
                                </g>
                                <g stroke-dasharray="15.71 15.71">
                                    <g class="truck__wheel">
                                        <circle class="truck__wheel-spin" r="2.5" cx="6.5" cy="17" />
                                    </g>
                                    <g class="truck__wheel">
                                        <circle class="truck__wheel-spin" r="2.5" cx="27" cy="17" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <span class="fw-bold text-gray-800 fs-6 d-flex justify-content-center mt-3">
                            Estamos buscando los vehículos óptimos
                        </span>
                    `;
                    document.getElementById('propertyModalBody').innerHTML = loading;
                },
                success: function(data) {
                    document.getElementById('propertyModalBody').innerHTML = '';
                    let modalBody = "";
                    jQuery(data.datos).each(function(i, obj) {
                        const distance = parseFloat((obj.distance / 1000).toFixed(2));
                        const duration = parseFloat((obj.duration / 60).toFixed(2));
                        const fuelCost = number_format(obj.fuel_cost, 2);

                        modalBody += `
                            <tr class="cursor-pointer">
                                <td>
                                    <input class="form-check-input" type="radio" name="truck" value="${obj.vehicle.id}">
                                </td>
                                <td>
                                    <div class="d-flex align-items-center me-3">
                                        <div class="symbol symbol-circle symbol-50px">
                                            <img src="https://preview.keenthemes.com/metronic8/demo1/assets/media/avatars/300-3.jpg" class="me-3" alt="">                  
                                        </div>                         

                                        <div class="flex-grow-1">
                                            <a href="javascript:void(0);" class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Juan Constantine M.</a>
                                            <span class="text-gray-500 fw-semibold d-block fs-6">${obj.vehicle.number_plate}</span>
                                        </div>                   
                                    </div>  
                                </td>
                                <td>
                                    <div class="d-flex align-items-center w-100 mw-150px">  
                                        <span class="text-gray-500 fw-semibold fs-6">
                                            ${distance} km (${duration} min)
                                        </span>
                                    </div>
                                </td>
                            </tr>
                        `;
                    });
                    document.getElementById('propertyModalBody').innerHTML = modalBody;
                    setTableTracksClicks();
                },
            });
        });
    });

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

    function number_format(number, decimals = 0, dec_point = '.', thousands_sep = ',') {
        const fixed = number.toFixed(decimals);

        const parts = fixed.split('.');
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, thousands_sep);

        return parts.join(dec_point);
    }

    $("#handlerSubmit").on("click", function() {
        let vehicleId = $('input[name=truck]:checked', '#form').val();

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            method: "POST",
            url: "/trucks/assign-truck",
            data: {
                'truck_id': vehicleId,
                'package_id': packageId,
            },
            datatype: 'json',
            success: function(data) {
                Swal.fire({
                    text: "Vehículo asignado correctamente!.",
                    icon: "success",
                    buttonsStyling: false,
                    confirmButtonText: "Ok!",
                    customClass: {
                        confirmButton: "btn fw-bold btn-primary",
                    }
                }).then(function() {
                    window.location.reload(true);
                });
            }
        });
    });

    function setTableTracksClicks() {
        document.querySelectorAll('#tableTracks tbody tr').forEach(tr => {
            tr.addEventListener('click', function() {
                document.getElementById('handlerSubmit').classList.remove('d-none');
                const radio = this.querySelector('input[type="radio"]');
                if (radio) {
                    radio.checked = true;
                }

                document.querySelectorAll('#tableTracks tbody tr').forEach(row => {
                    row.classList.remove('selected-row');
                });
                this.classList.add('selected-row');
            });
        });
    }
</script>
@endsection