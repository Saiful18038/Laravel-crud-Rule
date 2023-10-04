<x-backend.layouts.master>

    <div class="container roboto">
        <div class="row">
            <div class="col-sm-8 col-md-6 col-lg-6 my-5 rounded-1 m-auto" style="background-color: #f1f1f1">
                <div class="text-center">
                    <h5>Create Batch</h5>
                </div>
                <form class="p-2" action="{{ route('batch.create') }}" method="post">
                    @csrf
                    <div class="input-group w-75 m-auto pb-3">
                        <label for="tid" class=""><b>Choose a Teacher:</b></label>
                        <select class="mx-3" name="tid" id="tid">
                            <option value="Select">Select</option>
                            @foreach ($tname as $name)
                                <option value="{{ $name['id'] }}">{{ $name['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- ===== Batch Number ===== --}}
                    <div class="input-group py-3 w-75 m-auto">
                        <label class="input-group-text rounded-start">Batch</label>
                        <input type="text" class="form-control rounded-end rounded-1" placeholder="Enter Batch"
                            name="batchNo" value="{{ old('batchNo') }}" />
                    </div>
                    <span class="m-0 p-0 w-75 m-auto text-danger d-flex justify-content-start">
                        @error('batchNo')
                            {{ $message }}
                        @endError
                    </span>
                    <div class="input-group w-75 m-auto">
                        <input type="submit" class="form-control btn btn-secondary rounded-1" value="Create" />
                    </div>
                </form>
            </div>
        </div>
        <table class="table border-1 mt-5">
            <thead>
                <tr>
                    <th colspan="3" class="text-center m-auto">
                        <h3 class="">Batch-Teacher Table</h3>
                    </th>
                    <th class="text-right">
                        <a href="{{ route('teacher.index') }}" type="submit" class="btn btn-outline-secondary">Add
                            Teacher</a>
                    </th>
                </tr>
                <tr>
                    <th>#</th>
                    <th>Batch</th>
                    <th>Teacher Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($batchData as $batch)
                    {{-- @dd($batch->teacher()) --}}
                    <tr>
                        <td> {{ $batch->id }} </td>
                        <td> {{ $batch->batchNo }} </td>
                        <td> {{ $batch->teacher->name }} </td>
                        <td>
                            <a href="#" class="text-secondary mx-1">Edit</a>
                            <a href="#" class="text-secondary mx-1">Show</a>
                            <a href="#" class="text-danger mx-1">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-backend.layouts.master>

