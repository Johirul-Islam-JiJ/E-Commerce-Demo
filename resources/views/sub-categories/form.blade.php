@extends('layouts.admin')

@section('content')

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card">
                    @if (isset($sub_categories))
                        <div class="card-header"> Update Sub Category
                            <a class="btn btn-success btn-sm float-end" href="{{ route('sub-categories.index') }}">Back</a>
                        </div>
                    @else
                        <div class="card-header"> Create Sub Category
                            <a class="btn btn-success btn-sm float-end" href="{{ route('sub-categories.index') }}">Back</a>
                        </div>
                    @endif
                    <div class="card-body">

                        @if (isset($sub_categories))
                            <form method="POST" action="{{ route('sub-categories.update', $subCategory->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                            @else
                                <form method="POST" action="{{ route('sub-categories.store') }}" enctype="multipart/form-data">
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

                        @if (isset($sub_categories))
                            <div class="input-group input-group-outline mb-3">
                                <label class="form-label" for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ $sub_categories->name }}">
                            </div>
                        @else
                            <div class="input-group input-group-outline mb-3">
                                <label class="form-label" for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ old('name') }}">
                            </div>
                        @endif

                        @if (isset($subCategory))
                        <div class="input-group input-group-outline mb-3">
                            <label class="form-label" for="category_id">Category</label>
                            <select class="form-select form-control mb-3" name="category_id" id="category_id">
                                <option selected></option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id}}">{{ $category->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        @else
                        <div class="input-group input-group-outline mb-3">
                            <label class="form-label" for="category_id">Category</label>
                            <select class="form-select form-control mb-3" name="category_id" id="category_id">
                                <option selected></option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        @endif

                        @if (isset($sub_categories))
                            <div class="input-group input-group-outline mb-3">
                                <label class="form-label" for="slug">Slug</label>
                                <input type="text" class="form-control mb-3" id="slug" name="slug"
                                    value="{{ $sub_categories->slug }}">
                            </div>
                        @else
                            <div class="input-group input-group-outline mb-3">
                                <label class="form-label" for="slug">Slug</label>
                                <input type="text" class="form-control mb-3" id="slug" name="slug"
                                    value="{{ old('slug') }}">
                            </div>
                        @endif

                        @if (isset($sub_categories))
                            <div class="input-group input-group-outline mb-3">
                                <label class="form-label" for="description">Description</label>
                                <input type="text" class="form-control mb-3" id="description" name="description"
                                    value="{{ $sub_categories->description }}">
                            </div>
                        @else
                            <div class="input-group input-group-outline mb-3">
                                <label class="form-label" for="description">Description</label>
                                <textarea type="text" class="form-control mb-3" cols="30" rows="5" id="description" name="description"
                                    value="{{ old('description') }}">
                                </textarea>

                                </div>
                        @endif

                        <div class="row">

                            <div class="col-md-4">
                                @if (isset($sub_categories))
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label" for="status">status</label>
                                        <input type="number" class="form-control mb-3" id="status" name="status"
                                            value="{{ $sub_categories->status }}">
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
                                @if (isset($sub_categories))
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label" for="popular">Popular</label>
                                        <input type="number" class="form-control mb-3" id="popular" name="popular"
                                            value="{{ $sub_categories->popular }}">
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
                                @if (isset($sub_categories))
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label" for="meta_titile">Meta Titile</label>
                                        <input type="text" class="form-control mb-3" id="meta_titile" name="meta_titile"
                                            value="{{ $sub_categories->meta_titile }}">
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

                        @if (isset($sub_categories))
                            <div class="input-group input-group-outline mb-3">
                                <label class="form-label" for="meta_description">Meta Description</label>
                                <input type="text" class="form-control mb-3" id="meta_description" name="meta_description"
                                    value="{{ $sub_categories->meta_description }}">
                            </div>
                        @else
                            <div class="input-group input-group-outline mb-3">
                                <label class="form-label" for="meta_description">Meta Description</label>
                                <input type="text" class="form-control mb-3" id="meta_description" name="meta_description"
                                    value="{{ old('meta_description') }}">
                            </div>
                        @endif

                        @if (isset($sub_categories))
                            <div class="input-group input-group-outline mb-3">
                                <label class="form-label" for="meta_keywords">Meta Keywords</label>
                                <input type="text" class="form-control mb-3" id="meta_keywords" name="meta_keywords"
                                    value="{{ $sub_categories->meta_keywords }}">
                            </div>
                        @else
                            <div class="input-group input-group-outline mb-3">
                                <label class="form-label" for="meta_keywords">Meta Keywords</label>
                                <input type="text" class="form-control mb-3" id="meta_keywords" name="meta_keywords"
                                    value="{{ old('meta_keywords') }}">
                            </div>
                        @endif

                        @if (isset($sub_categories))
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
