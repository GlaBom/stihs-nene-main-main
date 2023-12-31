@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Categories</h4>

                    <h4 data-bs-toggle="modal" data-bs-target="#create" data-bs-target=".bs-example-modal-center"
                        class="btn btn-sm btn-outline-primary waves-effect waves-light " type="button"> Add Category
                    </h4>

                </div>
            </div>
        </div>
        <!-- end page title -->

        @include('categories.create')

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <!-- Add Category Button -->
                        <table id="datatable" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Category Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($categories as $category)
                                <tr data-id="1" style="cursor: pointer;">
                                    <td> {{$category->category_name}} </td>
                                    <td>
                                        {{--
                                        <a href="{{ route('categories.edit', $category->id) }}"
                                            class="btn btn-sm btn-outline-primary waves-effect waves-light">Edit</a>
                                        --}}
                                        @include('categories.edit')
                                        <button type="button"
                                            class="btn btn-sm btn-outline-primary waves-effect waves-light"
                                            data-bs-toggle="modal"
                                            data-bs-target="#edit{{ $category->id }}">Edit</button>

                                        <button type="button"
                                            class="btn btn-sm btn-outline-danger waves-effect waves-light"
                                            data-bs-toggle="modal"
                                            data-bs-target="#delete{{ $category->id }}">Delete</button>
                                    </td>

                                    {{-- Delete Modal --}}

                                    <div class="modal fade" id="delete{{ $category->id }}" tabindex="-1" role="dialog"
                                        aria-labelledby="delete{{ $category->id }}Label" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="delete{{ $category->id }}Label">Delete
                                                        Category</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Are you sure you want to delete {{$category->category_name}}?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Cancel</button>
                                                    <form action="{{ route('category.destroy', $category->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
