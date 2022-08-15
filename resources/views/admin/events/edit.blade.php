@extends('admin.layouts.app')
@section('title', 'Modifier une events')
@section('content')


    <div class="col-md-6 offset-md-3">
        <div class="card mt-5 shadow">
            <div class="card-body">
                <form action="{{ route('event.update', $events->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label for="titre">titre</label>
                        <input type="text" value="{{ $events->titre }}"
                            class="form-control @error('titre') is-invalid @enderror" id="titre" name="titre">
                        @error('titre')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="category">category</label>
                        <input type="text" value="{{ $events->category->name  }}"
                            class="form-control @error('category') is-invalid @enderror" id="category" name="category_id">
                        @error('category_id')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="ville">ville</label>
                        <input type="text" value="{{ $events->villes->name }}"
                            class="form-control @error('villes_id') is-invalid @enderror" id="ville" name="villes_id">
                        @error('villes_id')
                        <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="content">Content</label>
                        <input type="text" value="{{ $events->content }}"
                            class="form-control @error('content') is-invalid @enderror" id="content" name="content">
                        @error('content')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="prix">Prix</label>
                        <input type="text" value="{{ $events->prix }}"
                        class="form-control @error('prix') is-invalid @enderror" id="prix" name="prix">
                        @error('prix')
                        <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="start">start</label>
                        <input type="text" value="{{ $events->date_debut }}"
                        class="form-control @error('start') is-invalid @enderror" id="start" name="date_debut">
                        @error('date_debut')
                        <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="end">end</label>
                        <input type="text" value="{{ $events->date_end }}"
                        class="form-control @error('end') is-invalid @enderror" id="end" name="date_end">
                        @error('date_end')
                        <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="sponsors">sponsors</label>
                        <input type="text" value="{{ $events->sponsor }}"
                        class="form-control @error('sponsors') is-invalid @enderror" id="sponsors" name="sponsor">
                        @error('sponsor')
                        <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="admin">admin</label>
                        <input type="text" value="{{ $events->user_type }}"
                            class="form-control @error('admin') is-invalid @enderror" id="admin" name="user_type">
                        @error('user_type')
                            <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"
                        name="image">
                        @error('image')
                        <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="form-group mb-4">
                        <button class="btn btn-primary w-100">Sauvegarder</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
