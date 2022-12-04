@extends('layouts.admin')

@section('content')

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card">
                    @if (isset($category))
                        <div class="card-header"> Update Category
                            <a class="btn btn-success btn-sm float-end" href="{{ route('categories.index') }}">Back</a>
                        </div>
                    @else
                        <div class="card-header"> Create Category
                            <a class="btn btn-success btn-sm float-end" href="{{ route('categories.index') }}">Back</a>
                        </div>
                    @endif
                    <div class="card-body">

                        @if (isset($category))
                            <form method="POST" action="{{ route('categories.update', $category->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                            @else
                                <form method="POST" action="{{ route('categories.store') }}" enctype="multipart/form-data">
                                    @csrf
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if (isset($category))
                            <div class="input-group input-group-outline mb-3">
                                <label class="form-label" for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ $category->name }}">
                            </div>
                        @else
                            <div class="input-group input-group-outline mb-3">
                                <label class="form-label" for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ old('name') }}">
                            </div>
                        @endif

                        @if (isset($category))
                            <div class="input-group input-group-outline mb-3">
                                <label class="form-label" for="slug">Slug</label>
                                <input type="text" class="form-control mb-3" id="slug" name="slug"
                                    value="{{ $category->slug }}">
                            </div>
                        @else
                            <div class="input-group input-group-outline mb-3">
                                <label class="form-label" for="slug">Slug</label>
                                <input type="text" class="form-control mb-3" id="slug" name="slug"
                                    value="{{ old('slug') }}">
                            </div>
                        @endif

                        @if (isset($category))
                            <div class="input-group input-group-outline mb-3">
                                <label class="form-label" for="description">Description</label>
                                {{-- <input type="text" class="form-control mb-3" id="description" name="description"
                                    value="{{ $category->description }}"> --}}
                                <textarea name="description" id="description" cols="100"  rows="5"></textarea>
                            </div>
                        @else
                            <div class="input-group input-group-outline mb-3">
                                <label class="form-label" for="description">Description</label>
                                {{-- <input type="text" class="form-control mb-3" id="description" name="description"
                                    value="{{ old('description') }}"> --}}
                                <textarea name="description" id="description" cols="100"  rows="5" value="{{ old('description') }}"></textarea>

                            </div>
                        @endif

                        <div class="row">

                            <div class="col-md-4">
                                @if (isset($category))
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label" for="status">status</label>
                                        <input type="number" class="form-control mb-3" id="status" name="status"
                                            value="{{ $category->status }}">
                                    </div>
                                @else
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label" for="status">Status</label>
                                        <input type="number" class="form-control mb-3" id="status" name="status"
                                            value="{{ old('status') }}">
                                    </div>
                                @endif

                            </div>

                            <div class="col-md-4">
                                @if (isset($category))
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label" for="popular">Popular</label>
                                        <input type="number" class="form-control mb-3" id="popular" name="popular"
                                            value="{{ $category->popular }}">
                                    </div>
                                @else
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label" for="popular">Popular</label>
                                        <input type="number" class="form-control mb-3" id="popular" name="popular"
                                            value="{{ old('popular') }}">
                                    </div>
                                @endif

                            </div>

                            <div class="col-md-4">
                                @if (isset($category))
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label" for="meta_titile">Meta Titile</label>
                                        <input type="text" class="form-control mb-3" id="meta_titile" name="meta_titile"
                                            value="{{ $category->meta_titile }}">
                                    </div>
                                @else
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label" for="meta_titile">Meta Titile</label>
                                        <input type="text" class="form-control mb-3" id="meta_titile" name="meta_titile"
                                            value="{{ old('meta_titile') }}">
                                    </div>
                                @endif

                            </div>
                        </div>

                        @if (isset($category))
                            <div class="input-group input-group-outline mb-3">
                                <label class="form-label" for="meta_description">Meta Description</label>
                                {{-- <input type="text" class="form-control mb-3" id="meta_description" name="meta_description"
                                    value="{{ $category->meta_description }}"> --}}
                                <textarea name="meta_description" id="meta_description" cols="100"  rows="5"></textarea>

                            </div>
                        @else
                            <div class="input-group input-group-outline mb-3">
                                <label class="form-label" for="meta_description">Meta Description</label>
                                {{-- <input type="text" class="form-control mb-3" id="meta_description" name="meta_description"
                                    value="{{ old('meta_description') }}"> --}}
                                <textarea name="meta_description" id="meta_description" cols="100"  rows="5" value="{{ old('meta_description') }}"></textarea>

                            </div>
                        @endif

                        @if (isset($category))
                            <div class="input-group input-group-outline mb-3">
                                <label class="form-label" for="meta_keywords">Meta Keywords</label>
                                <input type="text" class="form-control mb-3" id="meta_keywords" name="meta_keywords"
                                    value="{{ $category->meta_keywords }}">
                            </div>
                        @else
                            <div class="input-group input-group-outline mb-3">
                                <label class="form-label" for="meta_keywords">Meta Keywords</label>
                                <input type="text" class="form-control mb-3" id="meta_keywords" name="meta_keywords"
                                    value="{{ old('meta_keywords') }}">
                            </div>
                        @endif

                        @if (isset($category))
                            <button type="submit" class="btn btn-primary">Update</button>
                        @else
                            <button type="submit" class="btn btn-primary">Submit</button>
                        @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
