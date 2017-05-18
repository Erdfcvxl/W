var browserSync = require('browser-sync');
var gulp = require("gulp");
var gulpAutoprefixer = require('gulp-autoprefixer');
var gulpCleanCss = require('gulp-clean-css');
var gulpJade = require('gulp-jade');
var gulpLess = require('gulp-less');
var gulpRename = require('gulp-rename');
var gulpUglify = require('gulp-uglify');
var gulpUtil = require("gulp-util");
var webpack = require("webpack");

gulp.task('browser-sync', function() {
    browserSync({
        server: false,
        proxy: ".dev"
    });
});

gulp.task('browser-sync-reload', ['webpack'], function () {
    browserSync.reload();
});

gulp.task('watch', /*['browser-sync'],*/ function() {
    gulp.watch('./resources/assets/less/**/*.less', ['css']);
});

gulp.task('webpack', function (callback) {
    webpack(require('./webpack.config.js'), function (err, stats) {
        if (err) throw new gulpUtil.PluginError("webpack", err);
        gulpUtil.log("[webpack]", stats.toString({}));
        callback();
    });
});

gulp.task('js-compress', function() {
    gulp.src('./js/*.bundle.js')
        .on('error', function(err) {
            gulpUtil.log(err.message);
        })
        .pipe(gulpRename({
            suffix: '.min'
        }))
        .pipe(gulpUglify())
        .pipe(gulp.dest('./js/'));
});

gulp.task('css', function() {
    gulp.src([
        './resources/assets/less/public.less',
    ])
        .pipe(gulpLess())
        .on('error', function(err) {
            gulpUtil.log(err.message);
        })
        .pipe(gulpAutoprefixer({browsers: ['last 2 versions']}))
        .pipe(gulpCleanCss())
        .pipe(gulpRename({
            suffix: '.min'
        }))
        .pipe(gulp.dest('./public/css'))
        .pipe(browserSync.reload({
            stream: true
        }));
});


//main commands
gulp.task('build', ['css'/*, 'webpack'*/]);

gulp.task('default', ['build', 'watch']);