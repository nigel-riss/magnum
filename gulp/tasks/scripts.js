const gulp = require('gulp');
// const webpack = require('webpack');
const rename = require('gulp-rename');
const webpackGulp = require('webpack-stream');

gulp.task('scripts', function() {
    return gulp.src('./src/js/app.js')
        // .pipe(webpackGulp('../../webpack.config.js'))
        .pipe(webpackGulp(''))
        .on('error', function(errorInfo) {
            console.log(errorInfo.toString());
            this.emit('end');
        })
        .pipe(rename('app.js'))
        .pipe(gulp.dest('./dist/scripts/'));
});

// gulp.task('scripts', function(callback) {
//     webpack(require('../../webpack.config.js'), function(err, stats) {
//         if (err) {
//             console.log(err.toString());
//         }
//         console.log(stats.toString());
//         callback();
//     });
// });