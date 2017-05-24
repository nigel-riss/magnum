const gulp = require('gulp');
const webpack = require('webpack');
const rename = require('gulp-rename');
const webpackGulp = require('webpack-stream');

const commonCfg = {
    entry: "./src/js/app.js",
    output: {
        filename: "app.js"
    },
    module: {
        loaders: [{
            loader: 'babel-loader',
            query: {
                presets: ['es2015']
            },
            test: /\.js$/,
            exclude: /node_modules/
        }]
    }
}

gulp.task('scripts', function() {
    return gulp.src('./src/js/app.js')
        .pipe(webpackGulp(commonCfg))
        .on('error', function(errorInfo) {
            console.log(errorInfo.toString());
            this.emit('end');
        })
        // .pipe(rename('app.js'))
        .pipe(gulp.dest('./dist/scripts/'));
});