@extends('layouts.admin')

@section('content')
    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h5 class="text-white text-capitalize ps-3">
                                Category
                            </h5>
                        </div>
                    </div>

                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">

                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">S.I</th>
                                        <th scope="col">Category Name</th>
                                        <th scope="col">Slug</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">popular</th>
                                        <th scope="col">meta_title</th>
                                        <th scope="col">meta_description</th>
                                        <th scope="col">meta_keywords</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->slug }}</td>
                                            <td>{{ $category->description }}</td>
                                            <td>{{ $category->status }}</td>
                                            <td>{{ $category->popular }}</td>
                                            <td>{{ $category->meta_title }}</td>
                                            <td>{{ $category->meta_description }}</td>
                                            <td>{{ $category->meta_keywords }}</td>
                                            <td class="align-middle">
                                                <a href="{{ route('categories.edit', $category->id) }}"
                                                    class="btn btn-link text-dark px-3 mb-0">
                                                    <i class="material-icons text-sm me-2">edit</i>
                                                    Edit
                                                </a>

                                                <form action="{{ route('categories.destroy', $category->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn">
                                                        <a class="btn btn-link text-danger text-gradient px-3 mb-0"><i
                                                                class="material-icons text-sm me-2">delete</i>Delete</a>

                                                    </button>

                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <a class="btn btn-primary" href="{{ route('categories.create') }}">Create category</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
