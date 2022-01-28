@extends('backend.layout.master')
@section('title', 'Portfolios')
@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-6 text-left">
                    <h4 class="card-title">All Portfolios</h4>
                </div>
                <div class="col-md-6 text-right">
                <a href="{{route('portfolio.create')}}" class="btn btn-outline-primary">Add Portfolio<span class="ml-2"><i class="ti-plus menu-icon"></i></span></a>
                </div>
            </div>
            <div class="table-responsive">
            <table id="table" class="table table-hover">
                <thead>
                <tr>
                    <th>SL</th>
                    <th>Thumbnail</th>
                    <th>Category</th>
                    <th>Response</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>img</td>
                    <td>Category one</td>
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