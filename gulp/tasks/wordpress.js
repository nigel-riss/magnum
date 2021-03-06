const gulp = require('gulp');
const rename = require('gulp-rename');

gulp.task('copyPHP', function() {
    return gulp.src('./wp/*.php')
        .pipe(gulp.dest('C:/xampp/htdocs/magnum/wp-content/themes/magnum/'));
});

gulp.task('copyCSS', function() {
    return gulp.src('./dist/styles.css')
        .pipe(rename('style.css'))
        .pipe(gulp.dest('C:/xampp/htdocs/magnum/wp-content/themes/magnum/'));
});