@extends('layouts.app-master')

@section('content')
<div class="container">
    <h3 class="mb-4">Eficiencia de combustible por entrega</h3>

    <table class="table table-bordered table-striped align-middle">
        <thead class="table-light">
            <tr>
                <th>Placa</th>
                <th>Km recorridos</th>
                <th>Entregas</th>
                <th>Litros usados</th>
                <th>Litros por entrega</th>
                <th>Clasificación</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($report as $item)
            <tr>
                <td>{{ $item['plate'] }}</td>
                <td>{{ $item['total_km'] }} km</td>
                <td>{{ $item['deliveries'] }}</td>
                <td>{{ $item['fuel_used'] }} L</td>
                <td>{{ $item['fuel_per_delivery'] }} L</td>
                <td>
                    @if ($item['fuel_per_delivery'] < 0.3)
                        <span class="badge bg-success">Eficiente</span>
                        @elseif ($item['fuel_per_delivery'] < 0.6)
                            <span class="badge bg-warning text-dark">Promedio</span>
                            @else
                            <span class="badge bg-danger">Ineficiente</span>
                            @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection