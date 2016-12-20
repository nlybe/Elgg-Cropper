define(function (require) {
    var elgg = require('elgg');
    var $ = require('jquery');
    require('cropper_js');
    
    // get plugin settings
    var cropper_settings = require("cropper/settings");
    var viewmode = cropper_settings['viewmode'],
        dragmode = cropper_settings['dragmode'],
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
   
    var aspectratio;
    if ($("input[name*='aspectratio']").length) {
        aspectratio = Number($("input[name*='aspectratio']").val());
    }
    else {
        var aspectratio_1 = cropper_settings['aspectratio_1'],
            aspectratio_2 = cropper_settings['aspectratio_2'];
        
        aspectratio = aspectratio_1/aspectratio_2;
    }
    //console.log(aspectratio);
    
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
            aspectRatio: aspectratio,
            responsive: getOptionValue(responsive),
            restore: getOptionValue(restore),
            modal: getOptionValue(modal),
            guides: getOptionValue(guides),
            center: getOptionValue(center),
            highlight: getOptionValue(highlight),
            background: getOptionValue(background),
            autoCrop: getOptionValue(autocrop),
            autoCropArea: Number(autocroparea),
            movable: getOptionValue(movable),
            rotatable: getOptionValue(rotatable),
            scalable: getOptionValue(scalable),
            zoomable: getOptionValue(zoomable),
            zoomOnTouch: getOptionValue(zoomontouch),
            zoomOnWheel: getOptionValue(zoomonwheel),
            wheelZoomRatio: Number(wheelzoomratio),
            cropBoxMovable: getOptionValue(cropboxmovable),
            cropBoxResizable: getOptionValue(cropboxresizable),
            toggleDragModeOnDblclick: getOptionValue(toggledragmodeondblclick),
            crop: function (e) {
                $( "input[name='x1']" ).val(Math.round(e.x));
                $( "input[name='x2']" ).val(Math.round(e.x)+Math.round(e.width));
                $( "input[name='y1']" ).val(Math.round(e.y));
                $( "input[name='y2']" ).val(Math.round(e.y)+Math.round(e.height));
            },
            built: function() {
                var canvasData = imageBox.cropper('getCanvasData');
//                console.log(X1+','+X2+','+Y1+','+Y2);

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

/**
 * Get option values as comes from settings and return the right value for using in JS Cropper option
 * 
 * @param {type} c_option
 * @returns {Boolean}
 */
function getOptionValue(c_option) {
    if (c_option) {
        return true;
    }
    else if (c_option === 'on') {
        return true;
    }    
    
    return false;
}