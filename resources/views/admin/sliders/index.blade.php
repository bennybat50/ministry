@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-8">
        <div class="panel panel-default card-view">
            <div class="panel-heading">
                <div class="pull-left">
                    <h6 class="panel-title txt-dark">All Sliders</h6>
                </div>
                <div class="pull-right">
                    <a href="{{ route('sliders.create') }}" class="btn btn-primary btn-rounded btn-lable-wrap" ><span class="btn-text">Add Slider</a>

                </div>
                <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <div class="table-wrap">
                        <div class="table-responsive">
                            <table id="" class="table table-hover display  pb-30">
                                <thead class="data-table-head">
                                    <tr class="data-table-head">
                                        <th class="hd">Img</th>
                                        <th class="hd">Title</th>
                                        <th class="hd">Link</th>
                                        <th class="hd">Category</th>
                                        <th class="hd">Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th class="hd">Img</th>
                                        <th class="hd">Title</th>
                                         <th class="hd">Link</th>
                                        <th class="hd">Category</th>
                                        <th class="hd">Actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($sliders as $slide)
                                    @if ($slide->category!="placeholder" && $slide->category!="statement")
                                    <tr>
                                        <td><img src="{{ asset('uploads/'.$slide['image'] ) }} " width="40" alt=""></td>
                                        <td>{{ $slide['title'] }}</td>
                                         <td>{{ $slide['url'] }}</td>
                                        <td>{{ $slide['category'] }}</td>
                                        <td><a href="{{ route('sliders.edit',['slider'=>$slide->id]) }}"> <button class="btn btn-warning btn-rounded ">
                                                    <span class="btn-label"><i class="fa fa-pencil"></i>
                                                    </span></button>
                                            </a> | <button data-toggle="modal" class="btn btn-danger btn-rounded"
                                            data-target="#delete-active-modal{{ $slide['id'] }}" ><i class="fa fa-trash"></i></button></td>

                                    </tr>



                                    <div id="delete-active-modal{{ $slide['id'] }}" class="modal fade"
                                        tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
                                        style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header bg-warning txt-light"
                                                    style="background-color: #EE826D">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">×</button>
                                                    <h5 class="modal-title font-20">Delete Slider?</h5>
                                                </div>
                                                <form id=""
                                                    action="{{ route('sliders.destroy', $slide['id']) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <div class="modal-body">
                                                       <input type="hidden" value="{{ $slide['id'] }}" name="id"/>
                                                        <h4>Are you sure you want to delete this  Content?</h4>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default btn-rounded"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-danger btn-rounded">Delete
                                                            Slide
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $sliders->links() }}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-default card-view">
            <div class="panel-heading">
                <div class="pull-left">
                    <h6 class="panel-title txt-dark">Minister Statement</h6>
                </div>

                <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <div class="table-wrap">
                        <div class="table-responsive">
                            <table id="" class="table table-hover display  pb-30">
                                <thead class="data-table-head">
                                    <tr class="data-table-head">
                                        <th class="hd">Img</th>
                                        <th class="hd">Title</th>
                                        <th class="hd">Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th class="hd">Img</th>
                                        <th class="hd">Title</th>
                                        <th class="hd">Actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td><img src="{{ asset('uploads/'.$statement['image'] ) }} " width="40" alt=""></td>
                                        <td>{{ $statement['title'] }}</td>
                                        <td><a href="{{ route('sliders.edit',['slider'=>$statement->id]) }}"> <button class="btn btn-warning btn-rounded ">
                                                    <span class="btn-label"><i class="fa fa-pencil"></i>
                                                    </span></button>
                                            </a> </td>

                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="panel panel-default card-view">
            <div class="panel-heading">
                <div class="pull-left">
                    <h6 class="panel-title txt-dark">Side Animation</h6>
                </div>
                <div class="pull-right">
                    <a href="{{ route('sliders.create') }}" class="btn btn-primary btn-rounded btn-lable-wrap" ><span class="btn-text">Add Slider</a>

                </div>

                <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <div class="table-wrap">
                        <div class="table-responsive">
                            <table id="" class="table table-hover display  pb-30">
                                <thead class="data-table-head">
                                    <tr class="data-table-head">
                                        <th class="hd">Img</th>
                                        <th class="hd">Title</th>
                                        <th class="hd">Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th class="hd">Img</th>
                                        <th class="hd">Title</th>
                                        <th class="hd">Actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($placeholders as $slide)
                                    <tr>
                                        <td><img src="{{ asset('uploads/'.$slide['image'] ) }} " width="40" alt=""></td>
                                        <td>{{ $slide['title'] }}</td>
                                        <td><a href="{{ route('sliders.edit',['slider'=>$slide->id]) }}"> <button class="btn btn-warning btn-rounded ">
                                                    <span class="btn-label"><i class="fa fa-pencil"></i>
                                                    </span></button>
                                            </a>| <button data-toggle="modal" class="btn btn-danger btn-rounded"
                                            data-target="#delete-active-modal{{ $slide['id'] }}" ><i class="fa fa-trash"></i></button> </td>

                                    </tr>

                                    <div id="delete-active-modal{{ $slide['id'] }}" class="modal fade"
                                        tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
                                        style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header bg-warning txt-light"
                                                    style="background-color: #EE826D">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">×</button>
                                                    <h5 class="modal-title font-20">Delete Slider?</h5>
                                                </div>
                                                <form id=""
                                                    action="{{ route('sliders.destroy', $slide['id']) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <div class="modal-body">
                                                       <input type="hidden" value="{{ $slide['id'] }}" name="id"/>
                                                        <h4>Are you sure you want to delete this  Content?</h4>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default btn-rounded"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-danger btn-rounded">Delete
                                                            Slide
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
