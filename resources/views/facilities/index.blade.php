@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Facilities</h4>

                        <h4 data-bs-toggle="modal" data-bs-target="#create" data-bs-target=".bs-example-modal-center"
                            class="btn btn-sm btn-outline-primary waves-effect waves-light " type="button"> Add Facilities
                        </h4>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            @include('facilities.create')

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- Add Facility Button -->
                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Facility Name</th>
                                        <th>Room</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($facilities as $facility)
                                        <tr data-id="1" style="cursor: pointer;">
                                            <td> {{ $facility->facilities_name }} </td>
                                            <td> {{ $facility->facilities_room }} </td>
                                            <td>

                                                @include('facilities.edit')
                                                <button type="button"
                                                    class="btn btn-sm btn-outline-primary waves-effect waves-light"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#edit{{ $facility->id }}">Edit</button>

                                                <button type="button"
                                                    class="btn btn-sm btn-outline-danger waves-effect waves-light"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#delete{{ $facility->id }}">Delete</button>
                                            </td>

                                            {{-- Delete Modal --}}

                                            <div class="modal fade" id="delete{{ $facility->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="delete{{ $facility->id }}Label"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="delete{{ $facility->id }}Label">
                                                                Delete
                                                                Facility</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Are you sure you want to delete
                                                                {{ $facility->facilities_name }}?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Cancel</button>
                                                            <form action="{{ route('facilities.destroy', $facility->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="btn btn-danger">Delete</button>
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
