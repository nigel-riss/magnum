const gulp = require('gulp');
const webpack = require('webpack');
const rename = require('gulp-rename');
const webpackGulp = require('webpack-stream');

gulp.task('scripts', function() {
    return gulp.src('./src/js/app.js')
        .pipe(webpackGulp(require('../../webpack.config.js')))
        .on('error', function(errorInfo) {
            console.log(errorInfo.toString());
            this.emit('end');
        })
        // .pipe(rename('app.js'))
        .pipe(gulp.dest('./dist/scripts/'));
});