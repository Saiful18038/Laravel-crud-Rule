<x-backend.layouts.master>
    <div class="container roboto">
        <div class="row">
            <div class="col-sm-8 col-md-6 col-lg-6 my-5 rounded-1 m-auto" style="background-color: #f1f1f1">
                <div class="text-center">
                    <h5>Create Teacher</h5>
                </div>
                <form class="p-2" action="{{ route('teacher.registration') }}" method="post">
                    @csrf
                    {{-- ===== TeacherName ===== --}}
                    <div class="input-group py-3 w-75 m-auto">
                        <label class="input-group-text rounded-start">Name</label>
                        <input type="text" class="form-control rounded-end rounded-1"
                            placeholder="Enter Teacher Name" name="name" value="{{ old('name') }}" />
                    </div>
                    <span class="m-0 p-0 w-75 m-auto text-danger d-flex justify-content-start">
                        @error('name')
                            {{ $message }}
                        @endError
                    </span>
                    <div class="input-group my-3 w-75 m-auto pb-2">
                        <input type="submit" class="form-control btn btn-secondary rounded-1" value="Create" />
                    </div>
                </form>
                <div class="pb-4" style="text-align: center">
                    <a href="{{ route('batch.index') }}" class="btn btn-outline-secondary">Add Batch</a>
                </div>
            </div>
        </div>
    </div>
</x-backend.layouts.master>

