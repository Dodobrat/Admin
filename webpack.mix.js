const mix = require('laravel-mix');

mix.js([
        'resources/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js',
        'resources/plugins/bower_components/waypoints/lib/jquery.waypoints.js',
        'resources/plugins/bower_components/counterup/jquery.counterup.min.js',
        'resources/plugins/bower_components/sweetalert/sweetalert.min.js',
        'resources/plugins/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js',
        'resources/bootstrap/dist/js/bootstrap.min.js',
        'resources/js/jquery.slimscroll.js',
        'resources/js/waves.js',
        'resources/js/custom.js',
        'resources/js/jasny-bootstrap.js',
        'resources/js/validator.js',
        'resources/plugins/bower_components/toast-master/js/jquery.toast.js',
        'resources/plugins/bower_components/custom-select/custom-select.min.js',
        'resources/plugins/bower_components/bootstrap-select/bootstrap-select.min.js',
        'resources/plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js',
        'resources/plugins/bower_components/multiselect/js/jquery.multi-select.js',
        'resources/plugins/bower_components/clockpicker/dist/jquery-clockpicker.min.js',
        'resources/plugins/bower_components/jquery-asColorPicker-master/libs/jquery-asColor.js',
        'resources/plugins/bower_components/jquery-asColorPicker-master/libs/jquery-asGradient.js',
        'resources/plugins/bower_components/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js',
        'resources/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.js',
        'resources/plugins/bower_components/timepicker/bootstrap-timepicker.min.js',
        'resources/plugins/bower_components/dropify/dist/js/dropify.min.js',
        'resources/plugins/bower_components/dropzone-master/dist/dropzone.js',
    ], 'public/js/app.js')

    .js([
        'resources/plugins/bower_components/dropzone-master/dist/dropzone.js',
    ],'public/js/drop.js')

    .js([
        'resources/js/charlotte.js',
    ],'public/js/charlotte.js')

    .less('resources/less/dark/style.less', 'public/css/style-dark.css')
    .less('resources/less/colors/default-dark.less', 'public/css/default-dark.css')
    .less('resources/less/colors/default.less', 'public/css/default-light.css')
    .less('resources/less/light/style.less', 'public/css/style-light.css')

    .styles([
        'resources/bootstrap/dist/css/bootstrap.min.css',
        'resources/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css',
        'resources/plugins/bower_components/toast-master/css/jquery.toast.css',
        'resources/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css',
        'resources/plugins/bower_components/custom-select/custom-select.css',
        'resources/plugins/bower_components/bootstrap-select/bootstrap-select.min.css',
        'resources/plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css',
        'resources/plugins/bower_components/multiselect/css/multi-select.css',
        'resources/plugins/bower_components/dropzone-master/dist/dropzone.css',
        'resources/plugins/bower_components/clockpicker/dist/jquery-clockpicker.min.css',
        'resources/plugins/bower_components/jquery-asColorPicker-master/css/asColorPicker.css',
        'resources/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css',
        'resources/plugins/bower_components/timepicker/bootstrap-timepicker.min.css',
        'resources/plugins/bower_components/html5-editor/bootstrap-wysihtml5.css',
        'resources/plugins/bower_components/summernote/dist/summernote.css',
        'resources/plugins/bower_components/flag-icon-css/css/flag-icon.min.css',
        'resources/plugins/bower_components/datatables/jquery.dataTables.min.css',
        'resources/plugins/bower_components/sweetalert/sweetalert.css',
        'resources/plugins/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css',
        // 'resources/plugins/bower_components/jquery-ui-1.12.1/jquery-ui.min.css',
        'resources/css/animate.css',
        'resources/css/spinners.css',
        'resources/css/switches.css',
    ],  'public/css/add.css')

    .copy('resources/plugins/bower_components/summernote/dist/summernote.js', 'public/js/editor.js', true)
    .copy('resources/plugins/bower_components/datatables/jquery.dataTables.min.js', 'public/js/data-table.js', true)
    .copy('resources/js/html5shiv.js', 'public/js/html5shiv.js', true)
    .copy('resources/js/respond.min.js', 'public/js/respond.min.js', true)
    .copy('resources/plugins/bower_components/jquery/dist/jquery.min.js', 'public/js/jquery.min.js', true)
    .copy('resources/plugins/bower_components/jquery-ui-1.12.1/jquery-ui.min.js', 'public/js/jquery-ui.min.js', true)
    .copy('resources/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js', 'public/js/charts.js', true)
    .copy('resources/plugins/bower_components/flag-icon-css/flags', 'public/flags', true)
    .copy('resources/plugins/images', 'public/img', true)
    .copy('resources/bootstrap/fonts', 'public/fonts', true)
    .copy('resources/fonts', 'public/fonts', true)

    .options({
        processCssUrls: false
    })

    .version();
