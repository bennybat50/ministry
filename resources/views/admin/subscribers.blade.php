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


                </div>
                <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <div class="table-wrap">
                                <div class="table-responsive">
                                    <table id="datable_1" class="table table-hover display  pb-30">
                                        <thead class="data-table-head">
                                            <tr class="data-table-head">
                                                <th class="hd">S / N</th>
                                                <th class="hd">Email</th>
                                                <th class="hd">Date</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th class="hd">S / N</th>
                                                <th class="hd">Email</th>
                                                <th class="hd">Date</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach ($subscribers as $key=> $sub)
                                            <tr>
                                                <td>{{ $key+1 }}</td>
                                                <td>{{ $sub['email'] }}</td>
                                                <td>{{ $sub['created_at'] }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{ $subscribers->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Row -->
@endsection
