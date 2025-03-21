@extends('admin.layouts.common-layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">All Dishes</div>
                <div class="card-body">
                    <table class="table table-responsive">
                        <thead>
                            <tr class="text-center">
                                <td>Sl</td>
                                <td>Name</td>
                                <td>Image</td>
                                <td class="text-center">Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dishes as $index=>$dish)
                                <tr class="text-center">
                                    <td>{{ ++$index }}</td>
                                    <td>{{ $dish->name }}</td>
                                    <td><img src="{{ $dish->image }}" alt="$dish->image"></td>
                                    <td class="text-center">
                                        <a href="{{ route('edit-dish', $dish->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="{{ route('DeleteDish', $dish->id) }}" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection