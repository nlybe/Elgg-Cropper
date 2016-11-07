define(function (require) {
    var elgg = require('elgg');
    var $ = require('jquery');
    require('cropper_js');

    $(document).ready(function() {

        var imageBox = $('#image');

        var X1 = Number($( "input[name='x1']" ).val()),
            X2 = Number($( "input[name='x2']" ).val()),
            Y1 = Number($( "input[name='y1']" ).val()),
            Y2 = Number($( "input[name='y2']" ).val());

        var options = {
            aspectRatio: 1 / 1,
            preview: '.img-preview',
            autoCropArea: 0.99,
            //strict: false,
            highlight: true,
            viewMode: 1,
            //scalable: false,
            //zoomable: false,
            crop: function (e) {
                $( "input[name='x1']" ).val(Math.round(e.x));
                $( "input[name='x2']" ).val(Math.round(e.x)+Math.round(e.width));
                $( "input[name='y1']" ).val(Math.round(e.y));
                $( "input[name='y2']" ).val(Math.round(e.y)+Math.round(e.height));
            },
            built: function() {
                var canvasData = imageBox.cropper('getCanvasData');
                
                var DefaultCropBoxOptionObj = {
                    left: X1+canvasData.left,
                    top: Y1+canvasData.top,
                    width: X2-X1,
                    height: Y2-Y1
                };            
                imageBox.cropper('setCropBoxData', DefaultCropBoxOptionObj);
                imageBox.cropper('setCanvasData', canvasData);
            }
        };

        imageBox.cropper(options);
    });
    
});