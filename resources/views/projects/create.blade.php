@extends ('layout')

@section('title', 'Crear proyecto')

@section( 'content')
    <h1>Crear Nuevo Proyecto</h1>
    <form method="POST" action="{{ route('projects.store') }}">
        @csrf
        <label>
            Título del Proyecto<br>
            <input type="text" name="title">
        </label><br>
        <label>
            Descripción del Proyecto<br>
            <textarea name="description"></textarea>
        </label>
        <br>
        <button>Guardar</button>

    </form>
@endsection