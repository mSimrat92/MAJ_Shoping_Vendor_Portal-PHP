@extends('layouts.app')

@section('title', 'Sub Category')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">
            <h2>Sub Category</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{route('dashboard')}}">Dashboard</a>
                </li>
                <li class="active">
                    <strong>Sub Category</strong>
                </li>
            </ol>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Delete Sub Category</h5>
                        <div class="ibox-tools">
                        <span id="goBack" title="Click here to go back to Sub Category List">
                            <a href="{{route('subcategory')}}">Back to list</a>
                        </span>
                        </div>
                    </div>
                    <div class="ibox-content">
                        @include('errors.error')
                        <form method="post" action="{{route('subcategory.delete.post')}}" autocomplete="off">
                            <input type="hidden" id="hidSubCategoryId" name="subcategoryId"
                                   value="{{$subcategory->id}}">
                            <div class="alert alert-danger" role="alert">
                                <h4>You are about to delete a master record do you wish to continue?</h4>
                                <input type="submit" value="Delete" name="delete" class="btn btn-danger">
                            </div>
                            {{csrf_field()}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
