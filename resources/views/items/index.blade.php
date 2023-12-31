@extends('admin.admin_master')
@section('admin')


<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Item List</h4>

                    <h4 data-bs-toggle="modal" data-bs-target="#create"
                    class="btn btn-sm btn-outline-primary waves-effect waves-light" type="button"> Add Item</h4>

                </div>
            </div>
        </div>
        <!-- end page title -->

        @include('items.create')

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">


                        <!-- Add Category Button -->
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Item Name</th>
                                    <th>Item Description</th>
                                    <th>Item Specification</th>
                                    <th>Category</th>
                                    <th >Quantity</th>




                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $item)
                                <tr>
                                    <td>{{$item->item_name}}</td>
                                    <td>{{$item->item_description}}</td>
                                    <td>{{$item->item_specification}}</td>
                                    <td>{{$item->category->category_name}}</td>
                                    <td> <a href="{{ route('item.show', $item->id) }}" >{{$item->item_instances_count}}</a>
                                    </td>

                                    <td>

                                        @include('items.edit')
                                        <button type="button"
                                            class="btn btn-sm btn-outline-primary waves-effect waves-light"
                                            data-bs-toggle="modal"
                                            data-bs-target="#edit{{ $item->id }}">Edit</button>

                                        <button type="button"
                                            class="btn btn-sm btn-outline-danger waves-effect waves-light"
                                            data-bs-toggle="modal"
                                            data-bs-target="#delete{{ $item->id }}">Delete</button>
                                    </td>

                                    {{-- Delete Modal --}}

                                    <div class="modal fade" id="delete{{ $item->id }}" tabindex="-1" role="dialog"
                                        aria-labelledby="delete{{ $item->id }}Label" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="delete{{ $item->id }}Label">Delete
                                                       Item</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Are you sure you want to delete {{$item->item_name}}?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Cancel</button>
                                                    <form action="{{ route('item.destroy', $item->id) }}"
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
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- container-fluid -->
</div>

@endsection
