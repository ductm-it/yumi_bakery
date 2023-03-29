<form role="form" action="" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="box-body">
        <div class="form-group {{ $errors->first('pro_name') ? ' has-error' : '' }}">
            <label for="name">Name<span class="text-danger">(*)</span></label>
            <input type="text" value="{{ $product->pro_name ?? old('pro_name') }}" name="pro_name" placeholder="Name..." class="form-control">
            @if ($errors->first('pro_name'))
                <span class="text-danger">{{ $errors->first('pro_name') }}</span>
            @endif
        </div>
    </div>
    <div class="box-body">
        <div class="col-md-6">
            <label for="inputCity">Giá sản phẩm</label>
            <input type="text"  value="{{ $product->pro_price ?? old('pro_price') }}" name="pro_price"  class="form-control" id="inputCity" placeholder="15.000.000">
            @if ($errors->first('pro_price'))
                <span class="text-danger">{{ $errors->first('pro_price') }}</span>
            @endif
        </div>
        <div class="col-md-6">
            <label for="inputCity">Giảm giá</label>
            <input type="number" class="form-control" value="{{ $product->pro_sale ?? old('pro_sale') }}" name="pro_sale" id="inputCity" placeholder="5">
        </div>
    </div>
        {{-- <div class="col-md-9">
          <label for="inputState">State</label>
          <select name="keywords" id="inputState" class="form-control">
            <option selected>Choose...</option>
            <option>...</option>
          </select>
        </div> --}}
        <div class="box-body">
            <label>Description</label>
            <textarea  class="form-control" name="pro_description" rows="3" placeholder="Enter ...">{{ $product->pro_description ?? old('pro_description') }}</textarea>
            @if ($errors->first('pro_description'))
                <span class="text-danger">{{ $errors->first('pro_description') }}</span>
            @endif
        </div>

        <div class="box-body">
            <label class="control-label">Danh mục <b class="col-red">(*)</b></label>
            <select name="pro_category_id" class="form-control">
              <option value="">---Choose---</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id}}" >
                        {{ $category->c_name }}
                    </option>
                @endforeach
            </select>
            @if ($errors->first('pro_category_id'))
                <span class="text-danger">{{ $errors->first('pro_category_id') }}</span>
            @endif
        </div>

        <div class="box-body">
            <label>Content</label>
            <textarea name="pro_content" id="my-editor" class="form-control" placeholder="Enter ...">{{ $product->pro_content ?? old('pro_content') }}</textarea>
            @if ($errors->first('pro_content'))
                <span class="text-danger">{{ $errors->first('pro_content') }}</span>
            @endif
        </div>
        <div class="box-body">
            <label for="avatar">Choose a profile picture:</label>
            <input type="file" id="avatar" name="pro_avatar">
        </div>
        {{-- <div class="box-body">
            <label>Avatar</label>
            <input type ="text" id="summernote-editor" name="pro_avatar" class="form-control"></textarea>
            @if ($errors->first('pro_avatar'))
                <span class="text-danger">{{ $errors->first('pro_avatar') }}</span>
            @endif
        </div> --}}
        {{-- <div class="input-group">
            <span class="input-group-btn">
              <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                <i class="fa fa-picture-o"></i> Choose
              </a>
            </span>
            <input id="thumbnail" class="form-control" type="text" name="filepath">
          </div>
          <img id="holder" style="margin-top:15px;max-height:100px;"> --}}
            {{-- <div class="col-md-6">
                <div class="form-group">
                    <div id="holder" class="img-fuild">
                        <img id="holder" style="margin-top:15px;max-height:100px;">
                    </div>
                </div>
            </div>
        </div> --}}


        {{-- <div class="box-body">
            <label for="exampleInputFile">Ảnh Đại Diện</label>
            <input type="file" id="exampleInputFile" name="pro_avatar">

            <p class="help-block">Input your avatar in here.</p>
        </div> --}}
    <div class="col-md-12">
        <div class="box-footer text-center" style="margin-top:20px">
            <a href=" {{ route('admin.product.index')}} " class="btn btn-danger">Quay Lại <i class="fa fa-undo"></i></a>
            <button type="submit" class="btn btn-success">Submit <i class="fa fa-save"></i></button>
        </div>
    </div>
</form>
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- dependencies (Summernote depends on Bootstrap & jQuery) -->
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>

<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.js"></script>
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>


 <script>
    var options = {
      filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
      filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
      filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
      filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
    };
  </script>
  <script>
    CKEDITOR.replace('my-editor', options);
    </script>
<script>
    $(document).ready(function(){

    // Define function to open filemanager window
    var lfm = function(options, cb) {
    var route_prefix = (options && options.prefix) ? options.prefix : '/laravel-filemanager';
    window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=900,height=600');
    window.SetUrl = cb;
    };

    // Define LFM summernote button
    var LFMButton = function(context) {
    var ui = $.summernote.ui;
    var button = ui.button({
        contents: '<i class="note-icon-picture"></i> ',
        tooltip: 'Insert image with filemanager',
        click: function() {

        lfm({type: 'image', prefix: '/laravel-filemanager'}, function(lfmItems, path) {
            lfmItems.forEach(function (lfmItem) {
            context.invoke('insertImage', lfmItem.url);
            });
        });

        }
    });
    return button.render();
    };

    // Initialize summernote with LFM button in the popover button group
    // Please note that you can add this button to any other button group you'd like
    $('#summernote-editor').summernote({
    toolbar: [
        ['popovers', ['lfm']],
    ],
    buttons: {
        lfm: LFMButton
    }
    })
    });
</script>
{{-- <script>
     $('#lfm').filemanager('image');

</script> --}}

