@extends('backend.layout.master')
@section('title', 'Blogs')
@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-6 text-left">
                    <h4 class="card-title">Blogs</h4>
                </div>
                <div class="col-md-6 text-right">
                <a href="{{route('blog.create')}}" class="btn btn-outline-primary">Add Blog<span class="ml-2"><i class="ti-plus menu-icon"></i></span></a>
                </div>
            </div>
            <div class="table-responsive">
            <table id="table" class="table table-hover">
                <thead>
                <tr>
                    <th>Tile</th>
                    <th>Author</th>
                    <th>Tags</th>
                    <th>Content</th>
                    <th>Pulished Date</th>
                    <th>Response Rate</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Title</td>
                    <td>Author one</td>
                    <td>Tag one</td>
                    <td>Lorem Ipsum....</td>
                    <td>11-01-22</td>
                    <td class="text-danger"> 28.76% <i class="ti-arrow-down"></i></td>
                    <td>
                        <div class="row">
                            <div class="col-4">
                                <a class="btn btn-sm btn-info rounded"><i class="ti-eye menu-icon"></i></a>
                            </div>
                            <div class="col-4">
                                <a class="btn btn-sm btn-warning rounded"><i class="ti-pencil-alt menu-icon"></i></a>
                            </div>
                            <div class="col-4">
                                <a class="btn btn-sm btn-danger rounded"><i class="ti-trash menu-icon"></i></a>
                            </div>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
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