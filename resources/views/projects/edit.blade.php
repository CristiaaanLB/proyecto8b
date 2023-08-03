@extends ('layout')

@section('title', 'Editar proyecto')

@section( 'content')
    <h1>Editar Proyecto</h1>
    <form method="POST" action="{{ route('projects.update', $project) }}">
        @csrf @method('PATCH')
        <label>
            Título del Proyecto<br>
            <input type="text" name="title" value="{{ $project->title }}">
        </label><br>
        <label>
            Descripción del Proyecto<br>
            <textarea name="description">{{ $project->description }}</textarea>
        </label>
        <br>
        <button>Actualizar</button>

    </form>
@endsection