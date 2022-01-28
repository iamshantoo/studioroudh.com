@extends('backend.layout.master')
@section('title', 'Add Portfolio')
@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-12 text-left">
                        <h4 class="card-title">Add New Portfolio</h4>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-12">
                        <form class="" action="" method="" enctype="multipart/form-data">
                            <input type="text" class="form-control" placeholder="Title" name="title">
                            <input type="text" class="form-control" placeholder="Client Name" name="client_name">
                            <input type="text" class="form-control" placeholder="Title" name="title">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection