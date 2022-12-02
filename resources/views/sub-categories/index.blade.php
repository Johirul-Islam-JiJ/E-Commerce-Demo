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
                                        <th scope="col">Sub Category Name</th>
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
                                    @foreach ($sub_categories as $sub_category)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $sub_category->category_id }}</td>
                                            <td>{{ $sub_category->name }}</td>
                                            <td>{{ $sub_category->slug }}</td>
                                            <td>{{ $sub_category->description }}</td>
                                            <td>{{ $sub_category->status }}</td>
                                            <td>{{ $sub_category->popular }}</td>
                                            <td>{{ $sub_category->meta_title }}</td>
                                            <td>{{ $sub_category->meta_description }}</td>
                                            <td>{{ $sub_category->meta_keywords }}</td>
                                            <td class="align-middle">
                                                <a href="{{ route('sub-categories.edit', $sub_category->id) }}"
                                                    class="btn btn-link text-dark px-3 mb-0">
                                                    <i class="material-icons text-sm me-2">edit</i>
                                                    Edit
                                                </a>

                                                <form action="{{ route('sub_category.destroy', $csub_category->id) }}"
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
                            <a class="btn btn-primary" href="{{ route('sub-categories.create') }}">Create Sub Category</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
