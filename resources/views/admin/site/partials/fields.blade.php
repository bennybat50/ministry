<link href="{{ asset('admin-assets/vendors/bower_components/dropify/dist/css/dropify.min.css') }}" rel="stylesheet" type="text/css" />
@csrf
<div class=" ">

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="title" class="control-label mb-10">Content:</label>
                @if ($site_item['category']=="address"||$site_item['category']=="phone"||$site_item['category']=="email"||$site_item['category']=="departments" )
                <input type="text" class="form-control" name="text" value="{{ $site_item['text'] }}" placeholder="Enter title" id="text" required>

                @elseif ($site_item['category']=="links"||$site_item['category']=="quick_links" || $site_item['site_area']=="info_center" )
                <input type="text" class="form-control" name="text" value="{{ $site_item['text'] }}" placeholder="Enter title" id="text" required>

                @else
                <div class="form-group">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <p class="text-dark" id="payment_method_label">Image Content</p>
                            <div class="mt-10">
                                <input type="file" id="input-file-now{{ $site_item['id'] }}" name="text"  class="dropify"    />
                            </div>
                        </div>
                    </div>
                </div>

                @endif

                <input type="hidden" name="site_area" value="{{ $site_item['site_area'] }}" >
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="link" class="control-label mb-10">Url
                </label>
                <input type="text" class="form-control" name="url" value="{{ $site_item['url'] }}" placeholder="Enter url" id="link" required >
            </div>


        </div>
    </div>

   <div class="row">
    <div class="col-md-6">
        @if($site_item['sub_text'])
        <div class="form-group">
            @if ($site_item['site_area']=="gallery")
            <label for="descp" class="control-label mb-10">Title </label>
            @else
            <label for="descp" class="control-label mb-10">Brief Subtitle </label>
            @endif

             <textarea type="text" class="form-control" id="sub_text" name="sub_text" required rows="3">{{ $site_item['sub_text'] }}</textarea>
        </div>
        @endif
    </div>
    <div class="col-md-6">
        @if ($site_item['site_area']=="gallery")
        <label for="descp" class="control-label mb-10">Brief Subtitle </label>
        <textarea type="text" class="form-control" id="category" name="category" required rows="3">{{ $site_item['category'] }}</textarea>
        @else
        <input type="hidden" name="category" value="{{ $site_item['category'] }}" >
        @endif
    </div>

   </div>


   <br>
   <div class="clear-fix"></div>
   <div class="form-group">
       @if ($site_item->text !=null && $site_item->text !="")
       <input type="submit" class="btn btn-warning" value="Update Item">
       @else
       <input type="submit" class="btn btn-primary" value="Publish Item">
       @endif
   </div>

</div>

<script src="https://cdn.ckeditor.com/4.20.1/full/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'sub_text' );
    CKEDITOR.replace( 'category' );
</script>
