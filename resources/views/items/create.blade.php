{{-- Create Modal --}}
<div class="modal fade " id="create" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog"
    aria-labelledby="createUserLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="createUserLabel">
                    Add Item</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="{{ route('item.store') }}" method="POST">
                    @csrf

                    <div class="row">

                        {{-- category_id --}}
                        <div class="col-md-4">
                            <div class="mb-0 position-relative"><br>
                                <label class="form-label">Category</label>
                                <div class="col-sm-12">
                                    <select name="category_name" class="form-control" required>
                                        <option value="" disabled selected>Select Category</option>
                                        @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->category_name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        {{-- item_name --}}

                        <div class="col-md-4">
                            <div class="mb-0 position-relative"><br>
                                <label class="form-label">Item Name</label>
                                <input name='item_name' class="form-control" type="text" value="{{ old('item_name') }}">
                                @error('item_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{-- item_description --}}

                        <div class="col-md-4">
                            <div class="mb-0 position-relative"><br>
                                <label class="form-label">Description</label>
                                <input name='item_description' class="form-control" type="text"
                                    value="{{ old('item_description') }}">
                                @error('item_description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-0 position-relative"><br>
                                <label class="form-label">Specification</label>
                                <input name='item_specification' class="form-control" type="text"
                                    value="{{ old('item_specification') }}">
                                @error('item_specification')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{-- quantity --}}
                        <div class="col-md-4">
                            <div class="mb-0 position-relative"><br>
                                <label class="form-label">Quantity</label>
                                <input name='quantity' class="form-control" type="number" value="{{ old('quantity') }}">
                                @error('quantity')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <br>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-info waves-effect waves-light"
                            data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
