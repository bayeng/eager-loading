@extends('dashboard.layouts.main')

@section('container')
    <div class="flex-wrap pt-3 pb-2 mb-3 d-flex justify-content-between flex-md-nowrap align-items-center border-bottom">
        <h1 class="h2">Create New Post</h1>
    </div>

    <div class="col-lg-8">
        <form method="POST" enctype="multipart/form-data" action="/dashboard/posts/{{ $post->slug }}">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                    value="{{ old('title', $post->title) }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"
                    value="{{ old('slug', $post->slug) }}">
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" id="category" name="category_id">
                    @foreach ($categories as $category)
                        @if (old('category_id', $post->category_id) == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label @error('image') is-invalid @enderror">Change Your Thumbnail</label>
                <input type="hidden" name="oldImage" value="{{ $post->image }}">
                @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" class="mt-3 d-block img-preview img-fluid col-sm-5">
                @else
                    <img class="mt-3 img-preview img-fluid col-sm-5">
                @endif
                <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="grid flex-row gap-3 mb-3 d-flex">
                <div><label for="image" class="form-label @error('image') is-invalid @enderror">Change Your
                        Image 1</label>
                    <input type="hidden" name="oldImage2" value="{{ $post->image2 }}">
                    @if ($post->image2)
                        <img src="{{ asset('storage/' . $post->image2) }}"
                            class="mt-3 d-block img-preview img-fluid col-sm-5">
                    @else
                        <img class="mt-3 img-preview img-fluid col-sm-5">
                    @endif
                    <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div><label for="image" class="form-label @error('image') is-invalid @enderror">Change Your
                        Image 2</label>
                    <input type="hidden" name="oldImage3" value="{{ $post->image3 }}">
                    @if ($post->image3)
                        <img src="{{ asset('storage/' . $post->image3) }}"
                            class="mt-3 d-block img-preview img-fluid col-sm-5">
                    @else
                        <img class="mt-3 img-preview img-fluid col-sm-5">
                    @endif
                    <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div><label for="image" class="form-label @error('image') is-invalid @enderror">Change Your
                        Image 3</label>
                    <input type="hidden" name="oldImage4" value="{{ $post->image4 }}">
                    @if ($post->image4)
                        <img src="{{ asset('storage/' . $post->image4) }}"
                            class="mt-3 d-block img-preview img-fluid col-sm-5">
                    @else
                        <img class="mt-3 img-preview img-fluid col-sm-5">
                    @endif
                    <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="">
                <label for="slogan" class="form-label">Slogan</label>
                <input type="text" class="form-control" id="slogan" name="slogan"
                    value="{{ old('slogan', $post->slogan) }}">
                @error('slogan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="">
                <label for="video" class="form-label">Link Youtube</label>
                <input type="text" class="form-control" id="video" name="video"
                    value="{{ old('video', $post->video) }}">
                @error('video')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                @error('body')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
                <trix-editor input="body"></trix-editor>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script>
        const title = document.querySelector("#title");
        const slug = document.querySelector("#slug");

        title.addEventListener("keyup", function() {
            let preslug = title.value;
            preslug = preslug.replace(/ /g, "-");
            slug.value = preslug.toLowerCase();
        });

        function previewImage() {

            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const ofReader = new FileReader();
            ofReader.readAsDataURL(image.files[0]);

            ofReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
