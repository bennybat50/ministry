<link href="{{ asset('admin-assets/vendors/bower_components/dropify/dist/css/dropify.min.css') }}" rel="stylesheet" type="text/css" />

<style>
    #container {
        width: 100%;
        margin:  auto;
    }
    .ck-editor__editable[role="textbox"] {
        /* editing area */
        min-height: 200px;
    }
    .ck-content .image {
        /* block images */
        max-width: 80%;
        margin:  auto;
    }
</style>
@csrf

@if(! $errors ->isEmpty())
<div class="alert alert-danger">
    @foreach ( $errors->all() as $message )
    <li>{{ $message }}</li>
    @endforeach
</div>
@endif
<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <label for="">Upload Page Image.</label>
                    <div class="mt-2">
                        <input type="file" id="input-file-now" name="page_img" class="dropify" />
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $model->title }}" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="url">Url</label>
                    <input type="text" class="form-control" id="url" name="url" value="{{ $model->url }}" required>
                </div>
            </div>
        </div>
        <div class="for-group row">
            <div class="col-md-12">
                <label for="">Order</label>

            </div>
            <div class="col-md-3">
                <select name="order" id="order" class="form-control" required >
                    <option value="">Choose Order</option>
                    <option value="before">Before</option>
                    <option value="after">After</option>
                    <option value="child">Child Of</option>
                </select>
            </div>
            <div class="col-md-5">
                <select name="orderPage" id="orderPage" class="form-control" required >
                    <option value="">Select Pages</option>
                    @foreach ($orderPages as $page)
                    <option value="{{ $page->id }}">{{ $page->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4">
                <select name="main_content" id="main_content" class="form-control" required >
                    <option value="">Select Content Type</option>
                    <option value="page_content">Page Content</option>
                    <option value="post">Post</option>
                    <option value="gallery">Gallery</option>
                    <option value="document">Document</option>
                </select>
            </div>
        </div>
        <hr>
        <h4>ROW 1 CONTENTS</h4>
        <div class="col-md-12">
            <div class="form-group">
                <label for="row_1_title">Row 1 Title</label>
                <input type="text" class="form-control" id="row_1_title" name="row_1_title" value="{{ $model->row_1_title }}">
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="content">Content</label>
                <textarea type="text" class="form-control" id="content" name="row_1_content" rows="9">{{ $model->row_1_content }}</textarea>
            </div>
        </div>

        <hr>
        <h4>ROW 2 CONTENTS</h4>
        <div class="col-md-12">
            <div class="form-group">
                <label for="row_2_title">Row 2 Title</label>
                <input type="text" class="form-control" id="row_2_title" name="row_2_title" value="{{ $model->row_2_title }}">
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="content">Content</label>
               <div class="container" id="container">
                <textarea type="text" class="form-control" id="row2-editor" name="row_2_content" rows="9">{{ $model->row_2_content }}</textarea>
               </div>
            </div>
        </div>

        <br>
        <div class="clear-fix"></div>
        <div class="form-group">
            @if ($model->url !=null && $model->url !="")
            <input type="submit" class="btn btn-warning" value="Update Page">
            @else
            <input type="submit" class="btn btn-primary" value="Publish  Page">
            @endif
        </div>
    </div>

    <div class="col-md-4">

        <h2>Side Section</h2>
        <hr>

        <div class="form-group">
            <label for="side_title">Title</label>
            <input type="text" class="form-control" id="side_title" name="side_title" value="{{ $model->side_title }}"  >
        </div>
        <div class="form-group">
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <label for="">Upload Side Image.</label>
                    <div class="mt-2">
                        <input type="file" id="input-file-now" name="side_img" class="dropify" />
                    </div>
                </div>
            </div>
        </div>

        <label for="side_sub">Side  Sub</label>
        <select name="side_sub" id="side_sub" class="form-control"  >
            <option value="">Select Content Type</option>
            <option value="small_slider">Services</option>
            <option value="image">Image</option>
        </select>
        <div class="form-group">
            <label for="side_content">Content</label>
            <textarea type="text" class="form-control" id="side_content" name="side_content" rows="10">{{ $model->side_content }}</textarea>
        </div>


    </div>
</div>

<script src="https://cdn.ckeditor.com/4.20.1/full/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'row_1_content' );
    CKEDITOR.replace( 'row_2_content' );
    CKEDITOR.replace( 'side_content' );
</script>
