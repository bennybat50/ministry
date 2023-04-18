<link href="{{ asset('admin-assets/vendors/bower_components/dropify/dist/css/dropify.min.css') }}" rel="stylesheet" type="text/css" />

@csrf

<div class="modal-body">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="title" class="control-label mb-10">Title:</label>
                <input type="text" class="form-control" name="title" placeholder="Enter title" id="title" value="{{  $post['title'] }}" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="published_at" class="control-label mb-10">Date:</label>
                <input type="date" class="form-control" name="published_at" placeholder="Enter date" id="published_at" value="{{  $post['published_at'] }}" required>
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="slug" class="control-label mb-10">Page Url
                </label>
                @if($post['slug']=="permanent-secretary" || $post['slug']=="minister-of-health")
                <input type="text" class="form-control" name="slug" placeholder="e.g /health-news" disabled="true" id="slug" value="{{  $post['slug'] }}">
                @else
                <input type="text" class="form-control" name="slug" placeholder="Enter /health-news" id="slug" value="{{  $post['slug'] }}">
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="excerpt" class="control-label mb-10">Excerpt
                </label>
                <input type="text" class="form-control" name="excerpt" placeholder="Enter excerpt" id="excerpt" value="{{  $post['excerpt'] }}">
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="body" class="control-label mb-10">Content Body </label>

        <textarea type="text" class="form-control" name="body" id="body" rows="10" required> {{ $post['body'] }}</textarea>
    </div>


    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <p class="text-dark" id="payment_method_label">Attach Banner.</p>
                        <div class="mt-10">

                            <input type="file" id="input-file-now{{ $post['id'] }}" name="banner" class="dropify" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <p class="text-dark" id="payment_method_label">Attach Thumnail.</p>
                        <div class="mt-10">

                            <input type="file" id="input-file-now{{ $post['id'] }}" name="thumbnail" class="dropify" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<div class="modal-footer">
    @if ($post->title !=null && $post->title !="")
    <input type="submit" class="btn btn-warning" value="Update Post">
    @else
    <input type="submit" class="btn btn-primary" value="Publish  Post">
    @endif
    </button>
</div>

<script src="https://cdn.ckeditor.com/4.20.1/full/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'body' );
</script>
