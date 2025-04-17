@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Crear nuevo producto</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.productos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del producto</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label for="imagen" class="form-label">Imagen del producto</label>
            <input type="file" class="form-control" id="imagen" name="imagen">
        </div>

        <button type="submit" class="btn btn-primary">Guardar producto</button>
        <a href="{{ route('admin.productos.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>
@endsection