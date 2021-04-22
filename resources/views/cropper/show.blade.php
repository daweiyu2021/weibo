<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="/css/cropper.css">
    <title>cropper</title>
    <!--在头部把样式文件导入，也可以自己修改样式控制裁剪框-->
<style>
    .img-container {
        width: 240px;
        height: 240px;
        float:left;
    }
    .img-container #pre_image {
        width: 100%;
    }
    .img-preview {
        float: left;
        overflow: hidden;
        margin-left: 20px;
    }

    .preview-lg {
        width: 240px;
        height: 240px;
    }

    .preview-md {
        width: 80px;
        height: 80px;
    }

    .preview-sm {
        width: 35px;
        height: 35px;
    }
</style>
</head>
<body>
<form action="" method="POST" enctype="multipart/form-data">
  {{ csrf_field() }}
    <div class="form-div">
        <input type="file" name="face">
    </div>
    <!-- 预览图片区域 -->
    <div class="img-container">
        <img id="pre_image">
    </div>
    <!-- 三个缩略图预区域 -->
    <div class="docs-preview clearfix">
        <div class="img-preview preview-lg"></div>
        <div class="img-preview preview-md"></div>
        <div class="img-preview preview-sm"></div>
    </div>
    <!-- 保存裁切参数的四个框 -->
    <input type="hidden" name="x">
    <input type="hidden" name="y">
    <input type="hidden" name="w">
    <input type="hidden" name="h">

    <div class="form-div">
        <input type="submit" value="确认">
    </div>
</form>
<div class="btn-group">
  <button type="button" class="btn btn-primary" data-method="setDragMode" data-option="move" title="Move">
    <span class="docs-tooltip" data-toggle="tooltip" title="cropper.setDragMode(&quot;move&quot;)">
      <span class="fa fa-arrows-alt"></span>setDragModeMove
    </span>
  </button>
  <button type="button" class="btn btn-primary" data-method="setDragMode" data-option="crop" title="Crop">
    <span class="docs-tooltip" data-toggle="tooltip" title="cropper.setDragMode(&quot;crop&quot;)">
      <span class="fa fa-crop-alt"></span>setDragModeCrop
    </span>
  </button>
</div>
<div class="btn-group">
          <button type="button" class="btn btn-primary" data-method="zoom" data-option="0.1" title="Zoom In">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.zoom(0.1)">
              <span class="fa fa-search-plus"></span>Zoom In
            </span>
          </button>
          <button type="button" class="btn btn-primary" data-method="zoom" data-option="-0.1" title="Zoom Out">
            <span class="docs-tooltip" data-toggle="tooltip" title="cropper.zoom(-0.1)">
              <span class="fa fa-search-minus"></span>Zoom Out
            </span>
          </button>
        </div>

<script src="{{ mix('js/app.js') }}"></script>
<script src="/js/cropper.js"></script>
<script>
var preImg = $("#pre_image");
// 获取裁切时的四个框
var x = $("input[name=x]");
var y = $("input[name=y]");
var w = $("input[name=w]");
var h = $("input[name=h]");
// 选择图片时预览图片 并 调用cropper插件
$("input[name=face]").change(function(){
    // 先消毁，清除一下插件，否则连续调用插件时会失败
    preImg.cropper("destroy");
    // this.files[0]：获取当前图片并转成URL地址
    var url = getObjectUrl( this.files[0] );
    console.log( url )
    // 设置url到预览图片上
    preImg.attr('src', url);
    // 调出插件
    preImg.cropper({
        aspectRatio: 3/4,         // 裁切的框形状
        preview:'.img-preview',    // 显示预览的位置
        viewMode:3,                // 显示模式：图片不能无限缩小，但可以放大
        autoCrop:true,
        // 裁切时把参数保存到表单中
        crop: function(event) {
            x.val( event.detail.x );
            y.val( event.detail.y );
            w.val( event.detail.width );
            h.val( event.detail.height );
        }
    });
});
// 预览时需要使用下面这个函数转换一下
function getObjectUrl(file) {
    var url = null;
    if (window.createObjectURL != undefined) {
        url = window.createObjectURL(file)
    } else if (window.URL != undefined) {
        url = window.URL.createObjectURL(file)
    } else if (window.webkitURL != undefined) {
        url = window.webkitURL.createObjectURL(file)
    }
    return url
}

</script>
</body>
</html>
