@extends('admin.layouts.app')
@section('pageTitle',)

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card card-custom">
                    <div class="card-header">
                        {{--                        <h3 class="card-title">{{$pageTitle}}</h3>--}}
                        <div class="card-toolbar">
                            <div class="example-tools justify-content-center">
                                <a href="{{route('admin.departments.index')}}" class="btn btn-primary mr-3"><i class="flaticon-list-2"></i>Departments</a>
                            </div>
                        </div>
                    </div>
                    <!--begin::Form-->
                    <form action="{{ route('admin.departments.update', $department->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-2 col-md-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label class="form-control-label">Name<span class="text-danger">*</span></label>
                                            <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" value="{{ old('name', $department->name) }}" placeholder="Your Name" />
                                            @if ($errors->has('name'))
                                                <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-2 col-md-6">
                                    <div class="form-group">
                                        <label for="exampleSelect1">Status<span class="text-danger">*</span></label>
                                        <select class="form-control" name="status">
                                            <option value="1" {{$department->status == 1 ? 'selected' : ''}}>Active</option>
                                            <option value="0" {{$department->status == 0 ? 'selected' : ''}}>Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-success mr-3"> <i class="flaticon2-paperplane"></i>Save</button>
                            <button type="reset" class="btn btn-danger"><i class="flaticon-close"></i>Cancel</button>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
            </div>
        </div>
    </div>
@endsection
