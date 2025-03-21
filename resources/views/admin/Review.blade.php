@extends('admin.layouts.common-layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @if (Session::has('msg'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('msg') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">Add Review</div>
                    <div class="card-body">
                        <form action="{{ route('storeReview') }}" method="post">
                            @csrf
                            <label for="link">Enter Link</label>
                            <input type="text" name="link" class="form-control mb-2" id="link">
                            <button class="btn btn-primary btn-sm">Sumbit</button>
                        </form>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-header text-center">All Reviews</div>
                    <div class="card-body">
                        <table class="table table-responsive">
                            <thead>
                                <tr class="text-center">
                                    <td>Sl</td>
                                    <td>Link</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reviews as $index => $review)
                                    <tr class="text-center">
                                        <td>{{ ++$index }}</td>
                                        <td>{{ $review->link }}</td>
                                        <td>
                                            <a href="{{ route('deleteReview', $review->id) }}"
                                                class="btn btn-danger btn-sm">Delete</a>
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