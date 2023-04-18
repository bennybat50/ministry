@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default card-view">
            <div class="panel-heading">
                <div class="pull-left">

                    <a href="{{ route('pages.create') }}" class="btn btn-primary">Create New Page</a>
                </div>
                <div class="pull-right">
                    <label for="">Search For Pages</label>
                    <form action="{{ route('pages.index') }}" method="get">
                        <div class="row">
                            <div class="col-md-8">
                                <input type="text" name="search" placeholder="Name, url" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-success" type="submit">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
                <div class="panel-body">

                    <div class="table-wrap">
                        <div class="table-responsive">
                            <table   class="table table-hover display  pb-30">
                                <thead class="data-table-head">
                                    <tr class="data-table-head">
                                        <th class="hd">S / N</th>
                                        <th class="hd">Title</th>
                                        <th class="hd">Url</th>
                                        <th class="hd">Actions</th>

                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th class="hd">S / N</th>
                                        <th class="hd">Title</th>
                                        <th class="hd">Url</th>
                                        <th class="hd">Actions</th>

                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($pages as $key=> $page )
                                    <tr>
                                        <td>{{  $key+1}}</td>
                                        <td><a href="{{ route('pages.edit', ['page'=>$page->id]) }}">{{ $page->title }}</a></td>
                                        <td>{{ $page->url }}</td>
                                        <td><a href="{{ route('pages.edit', ['page'=>$page->id]) }}"> <button class="btn btn-warning btn-rounded ">
                                                    <span class="btn-label"><i class="fa fa-pencil"></i>
                                                    </span></button>
                                            </a> | <button data-toggle="modal" class="btn btn-danger btn-rounded"
                                            data-target="#delete-active-modal{{ $page->id }}" ><i class="fa fa-trash"></i></button></td>
                                    </tr>

                                    <div id="delete-active-modal{{ $page->id }}" class="modal fade"
                                    tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
                                    style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header bg-warning txt-light"
                                                style="background-color: #EE826D">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">×</button>
                                                <h5 class="modal-title font-20">Delete Page?</h5>
                                            </div>
                                            <form id=""
                                                action="{{ route('pages.destroy', $page->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('delete')
                                                <div class="modal-body">
                                                   <input type="hidden" value="{{ $page->id }}" name="id"/>
                                                    <h4>Are you sure you want to delete this  Page?</h4>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default btn-rounded"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-danger btn-rounded">Delete
                                                        Page
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $pages->links() }}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
