<x-backend.layouts.master>
    <div class="container roboto">
        <div class="row">
            <div class="col-sm-8 col-md-6 col-lg-6 my-5 rounded-1 m-auto" style="background-color: #f1f1f1">
                <div class="text-center">
                    <h5>Create Role</h5>
                </div>
                <form class="p-2" action="{{ route('role.store') }}" method="post">
                    @csrf
                    {{-- ===== Role ===== --}}
                    <div class="input-group w-75 m-auto">
                        <label class="input-group-text rounded-start">Role
                            <span class="text-danger px-1">*</span>
                        </label>
                        <input type="text" class="form-control rounded-end rounded-1" placeholder="Enter Role"
                            name="role_name" value="{{ old('role_name') }}" />
                    </div>
                    <span class="m-0 p-0 w-75 m-auto text-danger d-flex justify-content-start">
                        @error('role_name')
                            {{ $message }}
                        @endError
                    </span>
                    <div class="input-group pt-3 w-75 m-auto">
                        <input type="submit" class="form-control btn btn-secondary rounded-1" value="Create Role" />
                    </div>
                </form>
                <div class="pb-4" style="text-align: center">
                    <a href="{{ route('user.create') }}" class="btn btn-outline-secondary">Add User</a>
                </div>
            </div>
        </div>
    </div>
</x-backend.layouts.master>

