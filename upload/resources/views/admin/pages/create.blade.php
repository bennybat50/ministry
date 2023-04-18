@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default card-view">
            <div class="panel-heading">
                <div class="pull-left">
                    <h1><b>Create Page</b></h1>
                </div>
                <div class="pull-right">
                    <h6 class="panel-title txt-dark"><a href="/admin/pages">Back to Pages</a></h6>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
                <div class="panel-body">

                    <form action="{{ route('pages.store') }}" method="post" enctype="multipart/form-data">
                    
                        @include('admin.pages.partials.fields')
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
