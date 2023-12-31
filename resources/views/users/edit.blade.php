<!-- Modal -->
<div class="modal fade" id="edit{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="editUserModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editUserModalLabel">Edit User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{ route('users.update', $user->id) }}" method="POST">
                @csrf

                @method('PUT')

                <div class="modal-body">
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-md-12">
                                <div class="mb-0 position-relative">
                                    <label class="form-label">User Name</label>
                                    <div class="col-sm-12">
                                        <input name='user_name' class="form-control" type="text"
                                            value="{{ $user->user_name }}" required>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="col-md-12">
                                <div class="mb-0 position-relative">
                                    <label class="form-label"> Email </label>
                                    <div class="col-sm-12">
                                        <input name='user_email' class="form-control" type="text"
                                            value="{{ $user->user_email }}" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-12">
                            <div class="mb-0 position-relative">
                                <label class="form-label">User Type</label>
                                <select name="user_type" class="form-control" required>
                                    <option value="" disabled selected>Select User Type</option>
                                    <option value="Admin">Administrator</option>
                                    <option value="Property Custodian">Property Custodian</option>
                                    <option value="Teacher">Teacher</option>
                                </select>
                                @error('user_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    {{-- save changes button --}}
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info waves-effect waves-light"
                            data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Save Changes</button>
                    </div>
                </div>
        </div>
        </form>
    </div>
</div>
</div>
