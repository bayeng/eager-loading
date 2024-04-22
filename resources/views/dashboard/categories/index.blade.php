@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Posts</h1>
    </div>
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="table-responsive col-lg-8">
      <a href="/dashboard/categories/create" class="btn btn-primary mb-3"> Create New Categories</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Category Name</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($categories as $category)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $category->name }}</td>
              <td>
                <a class="badge bg-info" href="/dashboard/categories/{{ $category->slug }}"><span data-feather="eye" class="align-text-bottom"></a>
                <a class="badge bg-warning" href="/dashboard/categories/{{ $category->slug }}/edit"><span data-feather="edit" class="align-text-bottom"></a>
                <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('are you sure ?')"><span data-feather="trash-2" class="align-text-bottom"></button>
                </form>
              </td>
            </tr> 
            @endforeach
          </tbody>
        </table>
    </div>
@endsection