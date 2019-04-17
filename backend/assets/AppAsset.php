<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',

        'bower_components/bootstrap/dist/css/bootstrap.min.css',                            // Bootstrap 3.3.7
        'bower_components/Ionicons/css/ionicons.min.css',                                   // Ionicons
        'bower_components/font-awesome/css/font-awesome.min.css',                           // Font Awesome
        'dist/css/AdminLTE.min.css',                                                        // Theme style
        'dist/css/skins/_all-skins.min.css',
        'bower_components/morris.js/morris.css',                                            // Morris chart
        'bower_components/jvectormap/jquery-jvectormap.css',                                // jvectormap
        'bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css',      // Date Picker
        'bower_components/bootstrap-daterangepicker/daterangepicker.css',                   // Daterange picker
        'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css',                         // bootstrap wysihtml5 - text editor
    ];
    public $js = [
        'bower_components/jquery/dist/jquery.min.js',                                   // jQuery 3
        'bower_components/jquery-ui/jquery-ui.min.js',                                  // jQuery UI 1.11.4
        'bower_components/bootstrap/dist/js/bootstrap.min.js',                          // Bootstrap 3.3.7
        'bower_components/raphael/raphael.min.js',
        'bower_components/morris.js/morris.min.js',                                     // Morris.js charts
        'bower_components/jquery-sparkline/dist/jquery.sparkline.min.js',               // Sparkline
        'plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',                            // jvectormap
        'plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
        'bower_components/jquery-knob/dist/jquery.knob.min.js',                         // jQuery Knob Chart
        'bower_components/moment/min/moment.min.js',
        'bower_components/bootstrap-daterangepicker/daterangepicker.js',                // daterangepicker
        'bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
        'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js',                  // datepicker
        'bower_components/jquery-slimscroll/jquery.slimscroll.min.js',                  // Bootstrap WYSIHTML5
        'bower_components/fastclick/lib/fastclick.js',                                  // Slimscroll
        'dist/js/adminlte.min.js',                                                      // FastClick
        'dist/js/pages/dashboard.js',                                                   // AdminLTE App
        'dist/js/demo.js',                                                              // AdminLTE dashboard demo (This is only for demo purposes)
        'js/custom.js',                                                                 // AdminLTE for demo purposes
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
