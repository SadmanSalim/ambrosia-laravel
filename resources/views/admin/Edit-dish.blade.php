@extends('admin.layouts.common-layout')
@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-12">
                <a class="btn btn-primary btn-sm mb-2" href="{{ route('alldish') }}">Back</a>
                <div class="card">
                    <div class="card-header">Add Dish</div>
                    <div class="card-body">
                        <form action="{{ route('UpdateDish',$dish->id) }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="name">Enter Dish Name <span class="text-danger">*</span></label>
                                <input value="{{ $dish->name }}" type="text" name="name" id="name" class="form-control">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
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
                                    style="max-width: 150px; margin-top: 10px; display: none;">
                                    <p>Old Image:</p>
                                    <img src="{{ asset($dish->image) }}" style="max-width: 150px; margin-top: 10px;" alt="">
                            </div>
                            <button class="btn btn-primary btn-sm">Submit</button>
                            @if (Session::has('msg'))
                                    <span class="text-success">{{session('msg')}}</span>
                            @endif
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