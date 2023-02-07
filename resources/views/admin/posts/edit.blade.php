@extends('layouts.app')



@section('content')
    <h1>{{ 'Modifica progetto #' . $posts->id }}</h1>


    <form action="{{ route('admin.posts.update', $posts->id) }}" method="POST">
        @csrf()
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Titolo</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                value="{{ old('name', $posts->name) }}">
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Contenuto</label>
            <textarea name="description" cols="30" rows="5"
                class="form-control @error('description') is-invalid @enderror">{{ old('description', $posts->description) }}</textarea>
            @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Immagine di copertina</label>
            <input type="text" class="form-control @error('cover_img') is-invalid @enderror" name="cover_img"
                value="{{ old('cover_img', $posts->cover_img) }}">
            @error('cover_img')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Tipologia</label>
            <input class="form-control @error('type_id') is-invalid @enderror" name="type_id" "
                  type="text"
                  @foreach ($posts->types as $type)
          value="{{ $type->id }}{{ $type->typeName }}" @endforeach>
              @error('type_id')
        <div class="invalid-feedback">
                              {{ $message }}
                          </div>
    @enderror
          
      </div>

        <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary">Annulla</a>
        <button class="btn btn-primary">Salva</button>
      </form>
@endsection
