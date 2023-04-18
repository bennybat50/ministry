@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default card-view">
            <div class="panel-heading">
                <div class="pull-left">
                 <h1><b>Edit Slide</b></h1>
                </div>
                <div class="pull-right">
                    <h6 class="panel-title txt-primary"><a href="/admin/sliders">Back to Sliders</a></h6>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
                <div class="panel-body">


                    <form action="{{ route('sliders.update', ['slider'=>$slider->id]) }}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @include('admin.sliders.partials.fields')
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
