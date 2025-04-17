@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Productos</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('admin.productos.create') }}" class="btn btn-success mb-3">Agregar nuevo producto</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($productos as $producto)
                <tr>
                    <td>
                        @if($producto->imagen)
                            <img src="{{ asset('storage/' . $producto->imagen) }}" alt="imagen" width="100">
                        @else
                            Sin imagen
                        @endif
                    </td>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->descripcion }}</td>
                    <td>
                        <form action="{{ route('admin.productos.destroy', $producto) }}" method="POST" onsubmit="return confirm('¿Eliminar este producto?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="4">No hay productos aún.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
