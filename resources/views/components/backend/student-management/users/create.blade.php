<x-backend.layouts.master>
    {{-- <pre>
    @php
        print_r($roleData);
        print_r($userData);
    @endphp
    </pre> --}}
    <div class="container roboto">
        <div class="row">
            <div class="col-sm-8 col-md-6 col-lg-6 my-5 rounded-1 m-auto" style="background-color: #f1f1f1">
                <div class="text-center mt-3">
                    <h5>User Ragistration</h5>
                </div>
                <form class="p-2" action="{{ route('user.store') }}" method="post">
                    @csrf
                    {{-- ===== User Name ===== --}}
                    <div class="input-group pt-2 w-75 m-auto">
                        <label class="input-group-text rounded-start">Name
                            <span class="text-danger px-1">*</span>
                        </label>

                        <input type="text" class="form-control rounded-end rounded-1" placeholder="Enter Name"
                            name="name" value="{{ old('name') }}" />
                    </div>
                    <span class="m-0 p-0 w-75 m-auto text-danger d-flex justify-content-start">
                        @error('name')
                            {{ $message }}
                        @endError
                    </span>
                    {{-- ===== Email ===== --}}
                    <div class="input-group pt-2 w-75 m-auto">
                        <label class="input-group-text rounded-start">Email
                            <span class="text-danger px-1">*</span>
                        </label>
                        <input type="email" class="form-control rounded-end rounded-1" placeholder="Enter Email"
                            name="email" value="{{ old('email') }}" />
                    </div>
                    <span class="m-0 p-0 w-75 m-auto text-danger d-flex justify-content-start">
                        @error('email')
                            {{ $message }}
                        @endError
                    </span>
                    {{-- ===== Phone ===== --}}
                    <div class="input-group pt-2 w-75 m-auto">
                        <label class="input-group-text rounded-start">Phone
                            {{-- <span class="text-danger px-1">*</span> --}}
                        </label>
                        <input type="text" class="form-control rounded-end rounded-1" placeholder="Enter Phone"
                            name="phone" value="{{ old('phone') }}" />
                    </div>
                    <span class="m-0 p-0 w-75 m-auto text-danger d-flex justify-content-start">
                        @error('phone')
                            {{ $message }}
                        @endError
                    </span>
                    {{-- ===== Date of Birth ===== --}}
                    <div class="input-group pt-2 w-75 m-auto">
                        <label class="input-group-text rounded-start">Date of Birth
                            <span class="text-danger px-1">*</span>
                        </label>
                        <input type="date" class="form-control rounded-end rounded-1" placeholder="Enter Phone"
                            name="dob" value="{{ old('dob') }}" />
                    </div>
                    <span class="m-0 p-0 w-75 m-auto text-danger d-flex justify-content-start">
                        @error('dob')
                            {{ $message }}
                        @endError
                    </span>
                    {{-- ===== Password ===== --}}
                    <div class="input-group pt-2 w-75 m-auto">
                        <label class="input-group-text rounded-start">Password
                            <span class="text-danger px-1">*</span>
                        </label>
                        <input type="password" class="form-control rounded-end rounded-1" placeholder="Enter Password"
                            name="password" />
                    </div>
                    <span class="m-0 p-0 w-75 m-auto text-danger d-flex justify-content-start">
                        @error('password')
                            {{ $message }}
                        @endError
                    </span>
                    {{-- ===== Confirm Password ===== --}}
                    <div class="input-group pt-2 w-75 m-auto">
                        <label class="input-group-text rounded-start">Confirm Password
                            <span class="text-danger px-1">*</span>
                        </label>
                        <input type="password" class="form-control rounded-end rounded-1" placeholder="Confirm Password"
                            name="confirm_password" />
                    </div>
                    <span class="m-0 p-0 w-75 m-auto text-danger d-flex justify-content-start">
                        @error('confirm_password')
                            {{ $message }}
                        @endError
                    </span>
                    <div class="row pt-2 w-75 m-auto">
                        <div class="col-md-3">
                            {{-- ===== Gender ===== --}}
                            <label for="gender" class="form-label">
                                <span class="text-danger">* </span>
                                <b>Gender:</b>
                            </label>
                        </div>
                        <div class="col-md-3">
                            {{-- ===== Gender: Male ===== --}}
                            <input class="form-check-input" type="radio" name="gender" id="male" value="Male"
                                {{ old('gender') == 'Male' ? 'checked' : '' }}>
                            <label class="form-check-label" for="male">
                                Male
                            </label>
                        </div>
                        <div class="col-md-3">
                            {{-- ===== Gender: Female ===== --}}
                            <input class="form-check-input" type="radio" name="gender" id="female" value="Female"
                                {{ old('gender') == 'Female' ? 'checked' : '' }}>
                            <label class="form-check-label" for="female">
                                Female
                            </label>
                        </div>
                        <div class="col-md-3">
                            {{-- ===== Gender: Others ===== --}}
                            <input class="form-check-input" type="radio" name="gender" id="others" value="Others"
                                {{ old('gender') == 'Others' ? 'checked' : '' }}>
                            <label class="form-check-label" for="others">
                                Others
                            </label>
                        </div>
                    </div>
                    <div class="input-group w-75 m-auto pb-3">
                        <label for="tid" class="">
                            <span class="text-danger">* </span>
                            <b>Register As:</b>
                        </label>
                        <select class="mx-3" name="rid" id="rid">
                            <option value="Select">Select</option>
                            @foreach ($roleData as $role)
                                <option value="{{ $role->id }}">{{ $role->role_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-group my-3 w-75 m-auto pb-2">
                        <input type="submit" class="form-control btn btn-secondary rounded-1" value="Create User" />
                    </div>
                </form>
                <div class="pb-4" style="text-align: center">
                    <a href="{{ route('course.create') }}" class="btn btn-outline-secondary">Create Course</a>
                </div>
            </div>
        </div>
    </div>
</x-backend.layouts.master>
