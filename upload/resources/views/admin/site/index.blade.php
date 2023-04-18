@extends('layouts.app')

@section('content')


<div class="row">
    <div class="col-sm-6">
        <div class="panel panel-default card-view">
            <div class="panel-heading">
                <div class="pull-left">
                    <h4 class="panel-title txt-dark">Header Section</h4>
                </div>

                <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <div class="table-wrap">
                        <div class="table-responsive">
                            <table  class="table table-hover display  pb-30">
                                <thead class="data-table-head">
                                    <tr class="data-table-head">
                                        <th class="hd">Content</th>
                                        <th class="hd">Url</th>
                                        <th class="hd">Category</th>
                                         <th class="hd">Area</th>
                                         <th class="hd">Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th class="hd">Content</th>
                                        <th class="hd">Url</th>
                                        <th class="hd">Category</th>
                                         <th class="hd">Area</th>
                                         <th class="hd">Actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($site_items as $item)
                                    @if ($item->site_area=="top_bar")
                                    <tr>
                                        <td>
                                            @if ($item->category=="logo")
                                            <img src="{{  asset('uploads/'.$item['text'] )}} " width="80" alt="">
                                            @else
                                            {{ $item['text'] }}
                                            @endif

                                        </td>
                                        <td>{{ $item['url'] }}</td>
                                        <td>{{ $item['category'] }}</td>
                                         <td>{{ $item['site_area'] }}</td>

                                        <td><a href="{{ route('site-items.edit',['site_item'=>$item->id]) }}"> <button class="btn btn-warning btn-rounded ">
                                                    <span class="btn-label"><i class="fa fa-pencil"></i>
                                                    </span></button>
                                            </a> </td>

                                    </tr>
                                    @endif
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="col-md-6">
        <div class="panel panel-default card-view">
            <div class="panel-heading">
                <div class="pull-left">
                    <h4 class="panel-title txt-dark">Resources Links / Publications                    </h4>
                </div>

                <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <div class="table-wrap">
                        <div class="table-responsive">
                            <table  class="table table-hover display  pb-30">
                                <thead class="data-table-head">
                                    <tr class="data-table-head">
                                        <th class="hd">Content</th>
                                        <th class="hd">Url</th>
                                        <th class="hd">Category</th>
                                         <th class="hd">Area</th>
                                         <th class="hd">Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th class="hd">Content</th>
                                        <th class="hd">Url</th>
                                        <th class="hd">Category</th>
                                         <th class="hd">Area</th>
                                         <th class="hd">Actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($site_items as $item)
                                    @if ($item->site_area=="resource_links" || $item->site_area=="publications")
                                    <tr>
                                        <td>
                                            @if ($item->category=="logo")
                                            <img src="{{  asset('uploads/'.$item['text'] )}} " width="80" alt="">
                                            @else
                                            {{ $item['text'] }}
                                            @endif

                                        </td>
                                        <td>{{ $item['url'] }}</td>
                                        <td>{{ $item['category'] }}</td>
                                         <td>{{ $item['site_area'] }}</td>

                                        <td><a href="{{ route('site-items.edit',['site_item'=>$item->id]) }}"> <button class="btn btn-warning btn-rounded ">
                                                    <span class="btn-label"><i class="fa fa-pencil"></i>
                                                    </span></button>
                                            </a> </td>

                                    </tr>
                                    @endif
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
<div class="row">
    <div class="col-sm-6">
        <div class="panel panel-default card-view">
            <div class="panel-heading">
                <div class="pull-left">
                    <h6 class="panel-title txt-dark">Minister Of State / Permanent Secetary</h6>
                </div>
                <div class="pull-right">
                    <!-- /.modal -->
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <div class="table-wrap">
                        <div class="table-responsive">
                            <table id=" " class="table table-hover display  pb-30">
                                <thead class="data-table-head">
                                    <tr class="data-table-head">
                                        <th class="hd">Thumbnail</th>
                                        <th class="hd">Title</th>
                                        <th class="hd">Slug / Page Url</th>
                                          <th class="hd">Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                         <th class="hd">Thumbnail</th>
                                        <th class="hd">Title</th>
                                        <th class="hd">Slug / Page Url</th>
                                          <th class="hd">Actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($posts as $key=> $post)
                                    @if($post['slug']=="permanent-secretary" || $post['slug']=="minister-of-health")
                                    <tr>

                                         <td><img src="{{ asset('uploads/'.$post['thumbnail'] ) }} " width="40" alt=""></td>
                                        <td>{{ $post['title'] }}</td>
                                        <td>{{ $post['slug'] }}</td>
                                          <td><a href="{{ route('posts.edit',['post'=>$post->id]) }}"  > <button class="btn btn-warning btn-rounded ">
                                                    <span class="btn-label"><i class="fa fa-pencil"></i>
                                                    </span></button>
                                            </a>  </td>

                                    </tr>


                                    <!-- /.Update modal -->
                                    <div id="update-modal{{ $post['id'] }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header bg-primary txt-light">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h5 class="modal-title font-20">Update Post</h5>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    @endif

                                    @endforeach
                                </tbody>
                            </table>
                            {{ $posts->links() }}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="col-sm-6">
        <div class="panel panel-default card-view">
            <div class="panel-heading">
                <div class="pull-left">
                    <h4 class="panel-title txt-dark">Home>>> Project Section</h4>
                </div>

                <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <div class="table-wrap">
                        <div class="table-responsive">
                            <table  class="table table-hover display  pb-30">
                                <thead class="data-table-head">
                                    <tr class="data-table-head">
                                        <th class="hd">Content</th>
                                        <th class="hd">Text</th>
                                        <th class="hd">Url</th>

                                         <th class="hd">Area</th>
                                         <th class="hd">Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th class="hd">Content</th>
                                        <th class="hd">Text</th>
                                        <th class="hd">Url</th>

                                         <th class="hd">Area</th>
                                         <th class="hd">Actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($site_items as $item)
                                    @if ($item->site_area=="project")
                                    <tr>
                                        <td>
                                            @if ($item->category=="images_text")
                                            <img src="{{  asset('uploads/'.$item['text'] )}} " width="80" alt="">
                                            @else
                                            {{ $item['text'] }}
                                            @endif

                                        </td>
                                        <td>{{ $item['sub_text'] }}</td>
                                        <td>{{ $item['url'] }}</td>
                                         <td>{{ $item['site_area'] }}</td>

                                        <td><a href="{{ route('site-items.edit',['site_item'=>$item->id]) }}"> <button class="btn btn-warning btn-rounded ">
                                                    <span class="btn-label"><i class="fa fa-pencil"></i>
                                                    </span></button>
                                            </a> </td>

                                    </tr>
                                    @endif
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
<div class="row">
    <div class="col-sm-6">
        <div class="panel panel-default card-view">
            <div class="panel-heading">
                <div class="pull-left">
                    <h4 class="panel-title txt-dark">Home>>> Promotion / Download Section</h4>
                </div>

                <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <div class="table-wrap">
                        <div class="table-responsive">
                            <table  class="table table-hover display  pb-30">
                                <thead class="data-table-head">
                                    <tr class="data-table-head">
                                        <th class="hd">Content</th>
                                        <th class="hd">Text</th>
                                        <th class="hd">Url</th>

                                         <th class="hd">Area</th>
                                         <th class="hd">Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th class="hd">Content</th>
                                        <th class="hd">Text</th>
                                        <th class="hd">Url</th>

                                         <th class="hd">Area</th>
                                         <th class="hd">Actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($site_items as $item)
                                    @if ($item->site_area=="promotions" || $item->site_area=="downloads")
                                    <tr>
                                        <td>
                                            @if ($item->category=="images_text")
                                            <img src="{{  asset('uploads/'.$item['text'] )}} " width="80" alt="">
                                            @else
                                            {{ $item['text'] }}
                                            @endif

                                        </td>
                                        <td>{{ $item['sub_text'] }}</td>
                                        <td>{{ $item['url'] }}</td>
                                         <td>{{ $item['site_area'] }}</td>

                                        <td><a href="{{ route('site-items.edit',['site_item'=>$item->id]) }}"> <button class="btn btn-warning btn-rounded ">
                                                    <span class="btn-label"><i class="fa fa-pencil"></i>
                                                    </span></button>
                                            </a> </td>

                                    </tr>
                                    @endif
                                    @endforeach
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
                    <h4 class="panel-title txt-dark">Home>>> Info Center Section</h4>
                </div>

                <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <div class="table-wrap">
                        <div class="table-responsive">
                            <table  class="table table-hover display  pb-30">
                                <thead class="data-table-head">
                                    <tr class="data-table-head">
                                        <th class="hd">Content</th>

                                        <th class="hd">Url</th>

                                         <th class="hd">Area</th>
                                         <th class="hd">Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th class="hd">Content</th>

                                        <th class="hd">Url</th>

                                         <th class="hd">Area</th>
                                         <th class="hd">Actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($site_items as $item)
                                    @if ($item->site_area=="info_center"  )
                                    <tr>
                                        <td>
                                            {{ $item['text'] }}

                                        </td>

                                        <td>{{ $item['url'] }}</td>
                                         <td>{{ $item['site_area'] }}</td>

                                        <td><a href="{{ route('site-items.edit',['site_item'=>$item->id]) }}"> <button class="btn btn-warning btn-rounded ">
                                                    <span class="btn-label"><i class="fa fa-pencil"></i>
                                                    </span></button>
                                            </a> </td>

                                    </tr>
                                    @endif
                                    @endforeach
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
                    <h4 class="panel-title txt-dark">Agency Carousel</h4>
                </div>
                <div class="pull-right">
                    <a href="{{ route('site-items.create') }}?carosel" class=" btn btn-success">Add Agency</a>
                </div>

                <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <div class="table-wrap">
                        <div class="table-responsive">
                            <table  class="table table-hover display  pb-30">
                                <thead class="data-table-head">
                                    <tr class="data-table-head">
                                        <th class="hd">Content</th>

                                        <th class="hd">Url</th>

                                         <th class="hd">Area</th>
                                         <th class="hd">Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th class="hd">Content</th>

                                        <th class="hd">Url</th>

                                         <th class="hd">Area</th>
                                         <th class="hd">Actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($site_items as $item)
                                    @if ($item->site_area=="carosel"  )
                                    <tr>
                                        <td>
                                            <img src="{{  asset('uploads/'.$item['text'] )}} " width="80" alt="">

                                        </td>

                                        <td>{{ $item['url'] }}</td>
                                         <td>{{ $item['site_area'] }}</td>

                                        <td><a href="{{ route('site-items.edit',['site_item'=>$item->id]) }}"> <button class="btn btn-warning btn-rounded ">
                                                    <span class="btn-label"><i class="fa fa-pencil"></i>
                                                    </span></button>
                                            </a><a href="#"  data-toggle="modal"
                                                data-target="#delete-active-modal{{ $item->id }}"> <button class="btn btn-danger btn-rounded ">
                                                <span class="btn-label"><i class="fa fa-trash"></i>
                                                </span></button>
                                        </a> </td>

                                    </tr>

                                    <div id="delete-active-modal{{$item->id }}" class="modal fade"
                                        tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
                                        style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header bg-warning txt-light"
                                                    style="background-color: #EE826D">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">×</button>
                                                    <h5 class="modal-title font-20">Delete Content?</h5>
                                                </div>
                                                <form id=""
                                                    action="{{ route('site-items.destroy', ["site_item"=>$item]) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <div class="modal-body">
                                                        <input type="hidden" value="{{ $item['id'] }}" name="item_id"/>
                                                        <h4>Are you sure you want to delete this Content?</h4>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default btn-rounded"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-danger btn-rounded">Delete

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

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="col-sm-6">

        <div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary txt-light">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h5 class="modal-title font-20">Add Links </h5>
                    </div>
                    <form action="{{ route('site-items.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="text" class="control-label mb-10">Text </label>
                                        <input type="text" class="form-control" name="text" id="text" placeholder="Enter Text" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="url" class="control-label mb-10">url </label>
                                        <input type="text" class="form-control" name="url" id="url" placeholder="Enter Url" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="category" class="control-label mb-10">Category </label>
                                        <select name="category" id="category" class="form-control status" required>
                                            <option value="">Choose Category</option>
                                            <option value="quick_links">Quick Links</option>
                                            <option value="departments">Departments</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default btn-rounded" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary btn-rounded">Save </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="panel panel-default card-view">
            <div class="panel-heading">
                <div class="pull-left">
                    <h4 class="panel-title txt-dark">Footer Section</h4>
                </div>

                <div class="pull-right">
                    <div class=" btn btn-success" data-toggle="modal" data-target="#responsive-modal"> <span class="btn-text">Add Links</span>

                    </div>
                </div>

                <div class="clearfix"></div>
            </div>
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <div class="table-wrap">
                        <div class="table-responsive">
                            <table  class="table table-hover display  pb-30">
                                <thead class="data-table-head">
                                    <tr class="data-table-head">
                                        <th class="hd">Content</th>
                                        <th class="hd">Url</th>
                                        <th class="hd">Category</th>
                                         <th class="hd">Area</th>
                                         <th class="hd">Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th class="hd">Content</th>
                                        <th class="hd">Url</th>
                                        <th class="hd">Category</th>
                                         <th class="hd">Area</th>
                                         <th class="hd">Actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($site_items as $item)
                                    @if ($item->site_area=="footer")
                                    <tr>
                                        <td>
                                            @if ($item->category=="logo" || $item->category=="social")
                                            <img src="{{  asset('uploads/'.$item['text'] )}} " width="80" alt="">
                                            @else
                                            {{ $item['text'] }}
                                            @endif

                                        </td>
                                        <td>{{ $item['url'] }}</td>
                                        <td>{{ $item['category'] }}</td>
                                         <td>{{ $item['site_area'] }}</td>

                                        <td><a href="{{ route('site-items.edit',['site_item'=>$item->id]) }}"> <button class="btn btn-warning btn-rounded ">
                                                    <span class="btn-label"><i class="fa fa-pencil"></i>
                                                    </span></button>
                                            </a> </td>

                                    </tr>
                                    @endif
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
