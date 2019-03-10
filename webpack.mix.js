const mix = require('laravel-mix');

mix.js([
    'resources/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js',
    'resources/plugins/bower_components/flot/excanvas.min.js',
    'resources/plugins/bower_components/flot/jquery.flot.js',
    'resources/plugins/bower_components/flot/jquery.flot.pie.js',
    'resources/plugins/bower_components/flot/jquery.flot.resize.js',
    'resources/plugins/bower_components/flot/jquery.flot.time.js',
    'resources/plugins/bower_components/flot/jquery.flot.stack.js',
    'resources/plugins/bower_components/flot/jquery.flot.crosshair.js',
    'resources/plugins/bower_components/flot.tooltip/js/jquery.flot.tooltip.min.js',
    'resources/plugins/bower_components/waypoints/lib/jquery.waypoints.js',
    'resources/plugins/bower_components/counterup/jquery.counterup.min.js',
    'resources/plugins/bower_components/nestable/jquery.nestable.js',
    'resources/bootstrap/dist/js/bootstrap.min.js',
    'resources/js/jquery.slimscroll.js',
    'resources/js/waves.js',
    'resources/js/custom.js',
    'resources/js/jasny-bootstrap.js',
    'resources/js/validator.js',
    'resources/plugins/bower_components/toast-master/js/jquery.toast.js',
    'resources/plugins/bower_components/morrisjs/morris.js',
    'resources/plugins/bower_components/custom-select/custom-select.min.js',
    'resources/plugins/bower_components/bootstrap-select/bootstrap-select.min.js',
    'resources/plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js',
    'resources/plugins/bower_components/multiselect/js/jquery.multi-select.js',
    'resources/plugins/bower_components/switchery/standalone/switchery.js',
    'resources/plugins/bower_components/dropify/dist/js/dropify.min.js',
    'resources/plugins/bower_components/dropzone-master/dist/dropzone.js',
    'resources/plugins/bower_components/clockpicker/dist/jquery-clockpicker.min.js',
    'resources/plugins/bower_components/jquery-asColorPicker-master/libs/jquery-asColor.js',
    'resources/plugins/bower_components/jquery-asColorPicker-master/libs/jquery-asGradient.js',
    'resources/plugins/bower_components/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js',
    'resources/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.js',
    'resources/plugins/bower_components/timepicker/bootstrap-timepicker.min.js',
    'resources/plugins/bower_components/html5-editor/wysihtml5-0.3.0.js',
    'resources/plugins/bower_components/html5-editor/bootstrap-wysihtml5.js',
    ], 'public/js/app.js')

    .less('resources/less/style-dark.less', 'public/css/style-dark.css')
    .less('resources/less/style-light.less', 'public/css/style-light.css')

    .copy('resources/js/html5shiv.js', 'public/js/html5shiv.js', true)
    .copy('resources/js/respond.min.js', 'public/js/respond.min.js', true)
    .copy('resources/plugins/bower_components/jquery/dist/jquery.min.js', 'public/js/jquery.min.js', true)
    .copy('resources/plugins/images', 'public/img', true)
    .copy('resources/bootstrap/fonts', 'public/fonts', true)

    .styles([
        'resources/bootstrap/dist/css/bootstrap.min.css',
        'resources/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css',
        'resources/plugins/bower_components/toast-master/css/jquery.toast.css',
        'resources/plugins/bower_components/morrisjs/morris.css',
        'resources/plugins/bower_components/nestable/nestable.css',
        'resources/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css',
        'resources/plugins/bower_components/custom-select/custom-select.css',
        'resources/plugins/bower_components/switchery/standalone/switchery.css',
        'resources/plugins/bower_components/bootstrap-select/bootstrap-select.min.css',
        'resources/plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css',
        'resources/plugins/bower_components/multiselect/css/multi-select.css',
        'resources/plugins/bower_components/dropify/dist/css/dropify.min.css',
        'resources/plugins/bower_components/dropzone-master/dist/dropzone.css',
        'resources/plugins/bower_components/clockpicker/dist/jquery-clockpicker.min.css',
        'resources/plugins/bower_components/jquery-asColorPicker-master/css/asColorPicker.css',
        'resources/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css',
        'resources/plugins/bower_components/timepicker/bootstrap-timepicker.min.css',
        'resources/plugins/bower_components/html5-editor/bootstrap-wysihtml5.css',
        'resources/css/animate.css',
    ],  'public/css/add.css')

    .styles('resources/css/colors/default-dark.css', 'public/css/default-dark.css')
    .styles('resources/css/colors/default.css', 'public/css/default.css');


// 'resources/plugins/bower_components/morrisjs/morris.js', //CHART
// 'resources/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js',
// 'resources/plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js',
// 'resources/plugins/bower_components/raphael/raphael-min.js',
// 'resources/js/dashboard1.js', //DASHBOARD JS USING CHART