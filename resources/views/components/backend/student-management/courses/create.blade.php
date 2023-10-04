<x-backend.layouts.master>
    {{-- <pre>
        @php
            print_r($userData);
        @endphp
    </pre> --}}
    <div class="container roboto">
        <div class="row">
            <div class="col-sm-8 col-md-6 col-lg-6 my-5 rounded-1 m-auto" style="background-color: #f1f1f1">
                <div class="text-center">
                    <h5>Create Course</h5>
                </div>
                <form class="p-2" action="{{ route('course.store') }}" method="post">
                    @csrf
                    {{-- ===== Course ===== --}}
                    <div class="input-group w-75 m-auto">
                        <label class="input-group-text rounded-start">Course Title
                            <span class="text-danger px-1">*</span>
                        </label>
                        <input type="text" class="form-control rounded-end rounded-1"
                            placeholder="Enter Course Title" name="course_title" value="{{ old('course_title') }}" />
                    </div>
                    <span class="m-0 p-0 w-75 m-auto text-danger d-flex justify-content-start">
                        @error('course_title')
                            {{ $message }}
                        @endError
                    </span>
                    <div class="input-group w-75 m-auto py-3">
                        <label for="student" class="" style="padding-right: 0px">
                            <span class="text-danger">* </span>
                            <b>Add Student:</b>
                        </label>
                        <select class="mx-3" name="uid" id="uid">
                            <option value="Select">Select</option>
                            @foreach ($userData as $user)
                                @if ($user->role_id == 3)
                                    <option value="{{ $user->role_id }}">{{ $user->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="input-group pt-3 w-75 m-auto">
                        <input type="submit" class="form-control btn btn-secondary rounded-1" value="Create Course" />
                    </div>
                </form>
                <div class="pb-4" style="text-align: center">
                    <a href="{{ route('role.create') }}" class="btn btn-outline-secondary">Add Role</a>
                </div>
            </div>
        </div>
    </div>
    {{-- <script>
        $(document).ready(function() {
            $("#test").CreateMultiCheckBox({
                width: '230px',
                defaultText: 'Select Below',
                height: '250px'
            });
        });
    </script> --}}



</x-backend.layouts.master>

