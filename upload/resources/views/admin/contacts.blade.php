@extends('layouts.app')

@section('content')

@if ($category=="message")
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default card-view">
            <div class="panel-heading">
                <div class="pull-left">
                    <h6 class="panel-title txt-dark">All Messages</h6>
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
                                    <table id=" " class="table table-hover display  pb-30">
                                        <thead class="data-table-head">
                                            <tr class="data-table-head">
                                                <th class="hd">S / N</th>
                                                <th class="hd">Name</th>
                                                <th class="hd">Email</th>
                                                <th class="hd">Phone</th>
                                                <th class="hd">Message</th>
                                                <th class="hd">Date</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th class="hd">S / N</th>
                                                <th class="hd">Name</th>
                                                <th class="hd">Email</th>
                                                <th class="hd">Phone</th>
                                                <th class="hd">Message</th>
                                                <th class="hd">Date</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach ($contacts as $key=> $con)
                                            <tr>
                                                <td>{{ $key+1 }}</td>
                                                <td>{{ $con['name'] }}</td>
                                                <td>{{ $con['email'] }}</td>
                                                <td>{{ $con['phone'] }}</td>
                                                <td>{{ $con['report'] }}</td>
                                                <td> {{ Carbon\Carbon::parse($con['created_at'])->format('d F Y')  }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{ $contacts->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@else
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default card-view">
            <div class="panel-heading">
                <div class="pull-left">
                    <h6 class="panel-title txt-dark">All Reports</h6>
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
                                    <table id=" " class="table table-hover display  pb-30">
                                        <thead class="data-table-head">
                                            <tr class="data-table-head">
                                                <th class="hd">S / N</th>
                                                <th class="hd">Name</th>
                                                <th class="hd">Email</th>
                                                <th class="hd">Phone</th>
                                                <th class="hd">Message</th>
                                                <th class="hd">Image</th>
                                                <th class="hd">Date</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th class="hd">S / N</th>
                                                <th class="hd">Name</th>
                                                <th class="hd">Email</th>
                                                <th class="hd">Phone</th>
                                                <th class="hd">Message</th>
                                                <th class="hd">Image</th>
                                                <th class="hd">Date</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach ($contacts as $key=> $con)
                                            <tr>
                                                <td>{{ $key+1 }}</td>
                                                <td>{{ $con['name'] }}</td>
                                                <td>{{ $con['email'] }}</td>
                                                <td>{{ $con['phone'] }}</td>
                                                <td>{{ $con['report'] }}</td>
                                                <td><a href="/uploads/{{ $con['iamge'] }}"><img src="/uploads/{{ $con['iamge'] }}" alt="" width="60"></a></td>
                                                <td> {{ Carbon\Carbon::parse($con['created_at'])->format('d F Y')  }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{ $contacts->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<!-- /Row -->
@endsection
