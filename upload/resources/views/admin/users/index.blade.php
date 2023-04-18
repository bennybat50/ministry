@extends('layouts.app')

@section('content')


<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default card-view">
            <div class="panel-heading">
                <div class="pull-left">
                    <h6 class="panel-title txt-dark"></h6>
                </div>
                <div class="pull-right">
                    <!-- /.modal -->
                    <a href="{{ route('users.create') }}" class="btn btn-primary">Create New User</a>

                </div>
                <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
                <div class="panel-body">

                    <div class="table-wrap">
                        <div class="table-responsive">
                            <table id="datable_1" class="table table-hover display  pb-30">
                                <thead class="data-table-head">
                                    <tr class="data-table-head">
                                        <th class="hd">Name</th>
                                        <th class="hd">Email</th>
                                        <th class="hd">Roles</th>
                                        <th class="hd">Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th class="hd">Name</th>
                                        <th class="hd">Email</th>
                                        <th class="hd">Roles</th>
                                        <th class="hd">Actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($model as $user )
                            <tr>
                                <td><a href="{{ route('users.edit', ['user'=>$user->id]) }}">{{ $user->name }}</a></td>
                                <td>{{ $user->email }}</td>
                                <td>{{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</td>
                                <td><a href="{{ route('users.edit', ['user'=>$user->id]) }}"> <button class="btn btn-warning btn-rounded ">
                                    <span class="btn-label"><i class="fa fa-pencil"></i>
                                    </span></button>
                            </a></td>
                            </tr>
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
<!-- /Row -->
@endsection
