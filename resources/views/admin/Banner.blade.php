@extends('admin.layouts.common-layout')
@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-lg-12">
            <div class="card rounded-0">
                <div class="card-header">Update Banner</div>
                <div class="card-body">
                    <form action="{{ route('updatebanner', 1) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Enter Title</label>
                            <input value="{{ old('title', $banner->title) }}" type="text" name="title" id="title" class="form-control">
                        </div>

                        <div class="form-group">
                                <label for="img">Select Image</label>
                                <input type="file" class="form-control" name="image" id="img"
                                    onchange="previewImage(event)">
                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <br>
                                <p>Preview:</p>
                                <img id="preview" src="" alt="Image Preview"
                                    style="max-width: 250px; margin-top: 10px; display: none;">
                                    <p>old image:</p>
                                    <img src="{{ $banner->image }}" style="width: 200px;" alt="{{ $banner->image }}">
                            </div>
                            @if (Session::has('msg'))
                                <span class="text-success">{{ session('msg') }}</span>
                            @endif
                            <button class="btn btn-primary btn-sm">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script>
    function previewImage(event) {
        const preview = document.getElementById('preview');
        const file = event.target.files[0];

        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            };
            reader.readAsDataURL(file);
        } else {
            preview.src = '';
            preview.style.display = 'none';
        }
    }
</script>