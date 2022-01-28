@extends('backend.layout.master')
@section('title', 'Portfolio Category Edit')
@section('content')
<div class="row d-flex align-items-center justify-content-center">
    <div class="col-4">
        <div class="card auth-form-light bg-white text-left py-5 px-4 px-sm-5">
            <div class="pt-3">
                @if (\Session::has('update_success'))
                    <div class="alert alert-success">
                        <ul class="list-unstyled">
                            <li>{!! \Session::get('update_success') !!}</li>
                        </ul>
                    </div>
                @endif
            </div>
          <h4 class="pt-3">Edit Name</h4>
          <form class="pt-3" method="post" action="{{ route('portfolio-category.update',$portfolio_category->id ) }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="form-group">
              <input type="text" name="category_name" class="form-control @error('category_name') is-invalid @enderror" placeholder="Category Name" value="{{ $portfolio_category->category_name }}" required>
              @error('category_name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="text-center mt-4 font-weight-light">
              <button type="submit" class="btn btn-warning">Update</button>
            </div>
          </form>
        </div>
    </div>
</div>
@endsection