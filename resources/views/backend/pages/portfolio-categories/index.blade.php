@extends('backend.layout.master')
@section('title', 'Portfolio Categories')
@section('content')
<div class="row">
    <div class="col-lg-8 grid-margin stretch-card">
        <div class="card">
            <div class="pt-3">
                @if (\Session::has('delete_success'))
                    <div class="alert alert-danger">
                        <ul class="list-unstyled">
                            <li>{!! \Session::get('delete_success') !!}</li>
                        </ul>
                    </div>
                @endif
            </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-12 text-left">
                    <h4 class="card-title">Portfolio Categories</h4>
                </div>
            </div>
            <div class="table-responsive">
            <table id="table" class="table table-hover">
                <thead>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Portfolio Count</th>
                    <th>Response</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($portfolio_categories as $key => $portfolio_category)
                    <tr>
                        <td>{{  $key+1 }}</td>
                        <td>{{ $portfolio_category->category_name }}</td>
                        <td>5</td>
                        <td class="text-danger"> 28.76% <i class="ti-arrow-down"></i></td>
                        <td>
                            <div class="row d-flex align-items-center justify-content-center">
                                <div class="col-4">
                                    <a href="{{ route('portfolio-category.show', $portfolio_category->id) }}" class="btn btn-sm btn-info"><i class="ti-eye menu-icon"></i></a>
                                </div>
                                <div class="col-4">
                                    <a href="{{ route('portfolio-category.edit', $portfolio_category->id) }}" class="btn btn-sm btn-warning"><i class="ti-pencil-alt menu-icon"></i></a>
                                </div>
                                <div class="col-4">
                                    <form action="{{ route('portfolio-category.destroy', $portfolio_category->id) }}" method="POST" >
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"><i class="ti-trash menu-icon"></i></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>
    <div class="col-lg-4 mx-auto">
        <div class="card auth-form-light bg-white text-left py-5 px-4 px-sm-5">
            <div class="pt-3">
                @if (\Session::has('store_success'))
                    <div class="alert alert-success">
                        <ul class="list-unstyled">
                            <li>{!! \Session::get('store_success') !!}</li>
                        </ul>
                    </div>
                @endif
            </div>
          <h4 class="pt-3">Add New</h4>
          <form class="pt-3" method="post" action="{{ route('portfolio-category.store') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
              <input type="text" name="category_name" class="form-control @error('category_name') is-invalid @enderror" placeholder="Category Name" required>
              @error('category_name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="text-center mt-4 font-weight-light">
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </form>
        </div>
      </div>
</div>
@endsection
@push('child-script')
    <script>
        $(document).ready(function () {
            $('#table').DataTable();
        });
    </script>
@endpush
