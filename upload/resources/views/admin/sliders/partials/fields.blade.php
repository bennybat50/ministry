<link href="{{ asset('admin-assets/vendors/bower_components/dropify/dist/css/dropify.min.css') }}" rel="stylesheet" type="text/css" />
@csrf
<div class=" ">
    <div class="form-group">
        <label for="title" class="control-label mb-10">Title:</label>
        <input type="text" class="form-control" name="title" value="{{ $slider['title'] }}" placeholder="Enter title" id="title" required>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="descp" class="control-label mb-10">Slide Category </label>
                <select name="category" id="order" class="form-control" required >
                    <option value="">Choose Category</option>
                    <option value="home_page">Home Page Top Slider</option>
                    <option value="placeholder">Side Animation</option>
                    <option value="statement">Statement Photo</option>
                    <option value="small_slider">Sub Page Slider</option>
                </select>
            </div>

        </div>

        <div class="col-md-6">

            <div class="form-group">
                <label for="link" class="control-label mb-10">Url
                </label>
                <input type="text" class="form-control" name="url" value="{{ $slider['url'] }}" placeholder="Enter url" id="link" required >
            </div>
        </div>
    </div>


   <div class="row">
    <div class="col-md-8">
        <div class="form-group">
            <label for="descp" class="control-label mb-10">Brief Subtitle </label>
             <textarea type="text" class="form-control" id="sub_title" name="sub_title" required rows="10">{{ $slider['sub_title'] }}</textarea>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <div class="panel-wrapper collapse in">
                <div class="panel-body">
                    <p class="text-dark" id="payment_method_label">Attach Image.</p>
                    <div class="mt-10">
                        <input type="file" id="input-file-now{{ $slider['id'] }}" name="image"  class="dropify"    />
                    </div>
                </div>
            </div>
        </div>

    </div>
   </div>

   <br>
   <div class="clear-fix"></div>
   <div class="form-group">
       @if ($slider->title !=null && $slider->title !="")
       <input type="submit" class="btn btn-warning" value="Update Slide">
       @else
       <input type="submit" class="btn btn-primary" value="Publish  Slide">
       @endif
   </div>

</div>

<script src="https://cdn.ckeditor.com/4.20.1/full/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'sub_title' );
</script>
