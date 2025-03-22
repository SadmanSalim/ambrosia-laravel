@extends('admin.layouts.common-layout')
@section('content')
    <div class="container">
        @if (Session::has('msg'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('msg') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="card mb-3">
            <div class="card-header">Services</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form action="{{ route('UpdateService', 1) }}" method="post">
                            @csrf
                            <label for="disc">Enter Description</label>
                            <textarea name="disc" id="disc"
                                class="form-control mb-2">{{ old('disc', $services->service) }}</textarea>
                            <button class="btn btn-primary btn-sm" type="submit">Update</button>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <h3>Add Services</h3>
                        <form action="{{ route('serviceDetails') }}" method="post">
                            @csrf
                            <label for="services">Enter Service Details</label>
                            <input type="text" name="service" id="services" class="form-control mb-2">
                            <button class="btn btn-primary btn-sm" type="submit">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header text-center">All Services</div>
            <div class="card-body">
                <table class="table table-responsive">
                    <thead>
                        <tr class="text-center">
                            <th>Sl</th>
                            <th>Service</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($service_details as $index=>$service_detail)
                            <tr class="text-center">
                                <td>{{ ++$index }}</td>
                                <td>{{ $service_detail->service }}</td>
                                <td>
                                    <a href="{{ route('serviceDelete', $service_detail->id) }}" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection