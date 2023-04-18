@extends('layouts.app')

@section('content')
<link href="{{ asset('admin-assets/vendors/bower_components/dropify/dist/css/dropify.min.css') }}" rel="stylesheet" type="text/css" />

<!-- Row -->
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default card-view">
            <div class="panel-heading">
                <div class="pull-left">
                    <h6 class="panel-title txt-dark"></h6>
                </div>
                <div class="pull-right">
                    <!-- /.modal -->
                    <a class="btn btn-primary btn-rounded btn-lable-wrap"  href="{{ route("posts.create") }}"><span class="btn-text">Add Post</a>

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
                                        <th class="hd">S / N</th>
                                         <th class="hd">Thumbnail</th>
                                         <th class="hd">Banner</th>
                                        <th class="hd">Title</th>
                                        <th class="hd">Slug / Page Url</th>
                                        <th class="hd">Excerpt</th>
                                          <th class="hd">Actions</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th class="hd">S / N</th>
                                        <th class="hd">Thumbnail</th>
                                        <th class="hd">Banner</th>
                                        <th class="hd">Title</th>
                                        <th class="hd">Slug / Page Url</th>
                                        <th class="hd">Excerpt</th>
                                          <th class="hd">Actions</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($posts as $key=> $post)
                                    @if($post['slug']!="permanent-secretary" && $post['slug']!="minister-of-health")
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                         <td><img src="{{ asset('uploads/'.$post['thumbnail'] ) }} " width="40" alt=""></td>
                                         <td><img src="{{ asset('uploads/'.$post['banner'] ) }} " width="40" alt=""></td>
                                        <td>{{ $post['title'] }}</td>
                                        <td>{{ $post['slug'] }}</td>
                                        <td>{{ $post['excerpt'] }}</td>
                                          <td><a href="{{ route('posts.edit',['post'=>$post->id]) }}" > <button class="btn btn-warning btn-rounded ">
                                                    <span class="btn-label"><i class="fa fa-pencil"></i>
                                                    </span></button>
                                            </a> | <button data-toggle="modal" class="btn btn-danger btn-rounded"
                                            data-target="#delete-active-modal{{ $post['id'] }}" ><i class="fa fa-trash"></i></button></td>

                                    </tr>




                                    <div id="delete-active-modal{{ $post['id'] }}" class="modal fade"
                                        tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
                                        style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header bg-warning txt-light"
                                                    style="background-color: #EE826D">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">×</button>
                                                    <h5 class="modal-title font-20">Delete Post?</h5>
                                                </div>
                                                <form id=""
                                                    action="{{ route('posts.destroy', $post['id']) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <div class="modal-body">
                                                       <input type="hidden" value="{{ $post['id'] }}" name="id"/>
                                                        <h4>Are you sure you want to delete this  Content?</h4>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default btn-rounded"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-danger btn-rounded">Delete
                                                            post
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
                            {{ $posts->links() }}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
<!-- /Row -->

<script src="https://cdn.ckeditor.com/4.20.1/full/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'body' );
</script>
@endsection
