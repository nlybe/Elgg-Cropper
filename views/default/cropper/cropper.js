define(function (require) {
    var elgg = require('elgg');
    var $ = require('jquery');
    require('cropper_js');
    
    // get plugin settings
    var cropper_settings = require("cropper/settings");
    var viewmode = cropper_settings['viewmode'],
        dragmode = cropper_settings['dragmode'],
        aspectratio_1 = cropper_settings['aspectratio_1'],
        aspectratio_2 = cropper_settings['aspectratio_2'],
        responsive = cropper_settings['responsive'],
        restore = cropper_settings['restore'],
        modal = cropper_settings['modal'],
        guides = cropper_settings['guides'],
        center = cropper_settings['center'],
        highlight = cropper_settings['highlight'],
        background = cropper_settings['background'],
        autocrop = cropper_settings['autocrop'],
        autocroparea = cropper_settings['autocroparea'],
        movable = cropper_settings['movable'],
        rotatable = cropper_settings['rotatable'],
        scalable = cropper_settings['scalable'],
        zoomable = cropper_settings['zoomable'],
        zoomontouch = cropper_settings['zoomontouch'],
        zoomonwheel = cropper_settings['zoomonwheel'],
        wheelzoomratio = cropper_settings['wheelzoomratio'],
        cropboxmovable = cropper_settings['cropboxmovable'],
        cropboxresizable = cropper_settings['cropboxresizable'],
        toggledragmodeondblclick = cropper_settings['toggledragmodeondblclick'];
   
    $(document).ready(function() {

        var imageBox = $('#image');

        var X1 = Number($( "input[name='x1']" ).val()),
            X2 = Number($( "input[name='x2']" ).val()),
            Y1 = Number($( "input[name='y1']" ).val()),
            Y2 = Number($( "input[name='y2']" ).val());

        var options = {
            preview: '.img-preview',
            viewMode: parseInt(viewmode),
            dragMode: dragmode,
            aspectRatio: aspectratio_1/aspectratio_2,
            responsive: responsive==='on'?true:false,
            restore: restore==='on'?true:false,
            modal: modal==='on'?true:false,
            guides: guides==='on'?true:false,
            center: center==='on'?true:false,
            highlight: highlight==='on'?true:false,
            background: background==='on'?true:false,
            autoCrop: autocrop==='on'?true:false,
            autoCropArea: Number(autocroparea),
            movable: movable==='on'?true:false,
            rotatable: rotatable==='on'?true:false,
            scalable: scalable==='on'?true:false,
            zoomable: zoomable==='on'?true:false,
            zoomOnTouch: zoomontouch==='on'?true:false,
            zoomOnWheel: zoomonwheel==='on'?true:false,
            wheelZoomRatio: Number(wheelzoomratio),
            cropBoxMovable: cropboxmovable==='on'?true:false,
            cropBoxResizable: cropboxresizable==='on'?true:false,
            toggleDragModeOnDblclick: toggledragmodeondblclick==='on'?true:false,
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