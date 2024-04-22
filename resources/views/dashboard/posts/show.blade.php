@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="my-3 row">
            <div class="col-lg-8">
                <h2>{{ $post->title }}</h2>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"
                        class="align-text-bottom"></span>Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="border-0 btn btn-danger" onclick="return confirm('are you sure ?')"><span
                            data-feather="trash-2" class="align-text-bottom"></span>Delete</button>
                </form>
                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"
                        class="align-text-bottom"></span> Back to My Post</a>
                @if ($post->image)
                    <div style="max-height: 350px; overflow:hidden;">
                        <img class="mt-3 img-fluid ratio ratio-21x9" src="{{ asset('storage/' . $post->image) }}"
                            alt="{{ $post->category->name }}">
                    </div>
                @else
                    <img class="mt-3 img-fluid ratio ratio-21x9"
                        src="https://source.unsplash.com/700x200?{{ $post->category->name }}"
                        alt="{{ $post->category->name }}">
                @endif
                <article>
                    <div class="flex-row gap-4 d-flex">
                        @if ($post->image2)
                            <div style="max-height: 350px; overflow:hidden;">
                                <img class="m-3 img-fluid ratio ratio-1x1" src="{{ asset('storage/' . $post->image2) }}"
                                    alt="{{ $post->category->name }}">
                            </div>
                        @else
                            <div style="max-height: 350px; overflow:hidden;">
                                <img class="m-3 img-fluid ratio ratio-1x1"
                                    src="https://source.unsplash.com/800x800?{{ $post->category->name }}"
                                    alt="{{ $post->category->name }}">
                            </div>
                        @endif
                        @if ($post->image3)
                            <div style="max-height: 350px; overflow:hidden;">
                                <img class="m-3 img-fluid ratio ratio-1x1" src="{{ asset('storage/' . $post->image3) }}"
                                    alt="{{ $post->category->name }}">
                            </div>
                        @else
                            <div style="max-height: 350px; overflow:hidden;">
                                <img class="m-3 img-fluid ratio ratio-1x1"
                                    src="https://source.unsplash.com/800x800?{{ $post->category->name }}"
                                    alt="{{ $post->category->name }}">
                            </div>
                        @endif
                        @if ($post->image4)
                            <div style="max-height: 350px; overflow:hidden;">
                                <img class="m-3 img-fluid ratio ratio-1x1" src="{{ asset('storage/' . $post->image4) }}"
                                    alt="{{ $post->category->name }}">
                            </div>
                        @else
                            <div style="max-height: 350px; overflow:hidden;">
                                <img class="m-3 img-fluid ratio ratio-1x1"
                                    src="https://source.unsplash.com/800x800?{{ $post->category->name }}"
                                    alt="{{ $post->category->name }}">
                            </div>
                        @endif
                    </div>
                    <div class="row align-items-start">
                        <div class="col">
                            <p>{!! $post->body !!}</p>
                        </div>
                        <div class="col">
                            <div class="ratio ratio-16x9">
                                <iframe src="{{ $post->video }}" title="YouTube video" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </article>

            </div>
        </div>
    </div>
@endsection
